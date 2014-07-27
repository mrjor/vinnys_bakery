<?php
    
    class JsonHandler
    {
        public $sRequest;
        public $aDataIn;
        public $iState; // -1 = undefined, 0 = error, 1 = ok
        private $aError;
        private $aDataOut;
        private $bDebug;
        
        public function __construct()
        {
            $this->sRequest = trim(file_get_contents("php://input"));
            $this->aDataIn = json_decode($this->sRequest, true);
            $this->iState = -1;
            $this->aError = array();
            $this->aDataOut = array();
            $this->bDebug = false;
        }
        
        public function addError($sError)
        {
            $this->aError[] = $sError;
            $this->iState = 0;
        }
        
        public function add($sKey, $mData)
        {
            $this->aDataOut[$sKey] = $mData;
        }
        
        public function get($sKey)
        {
            if (strlen($this->aDataIn[$sKey])>0)
                return $this->aDataIn[$sKey];
            else
            {
                if (isset($_REQUEST[$sKey]))
                    return $_REQUEST[$sKey];
                return "";
            }
        }
        
        public function render()
        {
            $this->aDataOut["errors"] = $this->aError;
            $this->aDataOut["debug"] = $this->bDebug;
            $this->aDataOut["state"] = $this->iState;
            
            //$this->aDataOut["dataout"] = var_export($this->aDataOut, true);
			if($this->bDebug)
		{
			$this->aDataOut["datain"] = var_export($this->aDataIn, true);
		}
            
            $sJsonResult = json_encode($this->aDataOut);
            
            echo $sJsonResult;
            
            return $sJsonResult;
        }
        
        function mysqlError()
        {
            $this->aDataOut["mysql_error"] = mysql_error();
        }
        
        public function setHeader($bHtml = false)
        {
            if ($bHtml)
                header("Content-Type: text/html; charset=utf-8");
            else
            {
                header("Content-Type: application/json; charset=utf-8");
                /*
                header('Cache-Control: no-cache, must-revalidate');
                header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
                header('Content-type: application/json');
                */
            }
        }
		
		public function arrayToJson($aData)
		{
			foreach ($aData as $sKey => $sValue)
				$this->add($sKey, $sValue);
		}
    }
    
?>