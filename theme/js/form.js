angular.module('form', []);



function formCtrl ($scope, $filter) {
	$scope.patern = {
		postcode : /^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i,
        phone : /(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)/,
        num : /^[0-9]*$/,
        email : /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/
	}

	$scope.orderConfirmed = false;
	$scope.fileError = false;
	$scope.overleg = false;
	$scope.submitted = false;



	$scope.taartset = [
		{val:'taartset (1,-)',prijs:1},
		{val:'taartset (2,-)',prijs:2},
		{val:'taartset (3,-)',prijs:3},
		{val:'taartset (4,-)',prijs:4},
		{val:'taartset (5,-)',prijs:5},
		{val:'taartset (6,-)',prijs:6},
		{val:'taartset (7,-)',prijs:7}
	]

	$scope.custom = [
		{val:'Grote cijfer/hart (5,-)'		,prijs:5},
		{val:'Balletjes rand (5,-)'			,prijs:5}, 
		{val:'bloem/vlinder/ster/hart (5,-)',prijs:5}, 
		{val:'Barbapapa (10,-)'				,prijs:10}, 
		{val:'Nijntje (15,-)'				,prijs:15}, 
		{val:'Nijntje + Ballonen (20,-)'	,prijs:20}, 
		{val:'Boemba (15,-)'				,prijs:15}, 
		{val:'Clown (15,-)'					,prijs:15}, 
		{val:'Konijn (15,-)'				,prijs:15}, 
		{val:'Vogel (15,-)'					,prijs:15}, 
		{val:'Piraat (15,-)'				,prijs:15}, 
		{val:'Spiderman hoofd (15,-)'		,prijs:15}, 
		{val:'Lego (20,-)'					,prijs:15}, 
		{val:'Paardenhoofd (20,-)'			,prijs:20}, 
		{val:'Vliegtuig (20,-)'				,prijs:20}, 
		{val:'Drumstel (20,-)'				,prijs:20}, 
		{val:'Jip en Janneke (20,-)'		,prijs:20}, 
		{val:'Las Vegas (20,-)'				,prijs:20}, 
		{val:'Strik (25,-)'					,prijs:25}, 
		{val:'Beer (25,-)'					,prijs:25}, 
		{val:'Mario (30,-)'					,prijs:30}, 
		{val:'Mega Mindy (30,-)'			,prijs:30}, 
		{val:'Hulk (30,-) '					,prijs:30},
		{val:'Cars (30,-)'					,prijs:30},
		{val:'Hello Kitty (30,-)'			,prijs:30}, 
		{val:'Prinses (30,-)'				,prijs:30}, 
		{val:'Minnie Mouse (30,-)'			,prijs:30}, 
		{val:'Wickie de Viking (30,-)'		,prijs:30}, 
		{val:'Barca (30,-)'					,prijs:30}, 
		{val:'Batman (35,-)'				,prijs:35}, 
		{val:'Mickey Mouse (35,-)'			,prijs:35}, 
		{val:'Buddha (Overleg)'				,prijs:'overleg'}, 
		{val:'Gucci	 (Overleg)'				,prijs:'overleg'}, 
		{val:'Gucci Dora (Overleg)'			,prijs:'overleg'}, 
		{val:'Louis Vuitton	Overleg'		,prijs:'overleg'}, 
		{val:'Hart vorm taart (Overleg)'	,prijs:'overleg'}, 
		{val:'Mini muffin taart (7,-)'		,prijs:7}
	];

	$scope.smaak = [
		{val : 'slagroom',prijs:0},
		{val : 'zwitserse',prijs:0},
		{val : 'chocolate',prijs:0},
		{val : 'chipolata',prijs:0}
	];

	$scope.persoonkeuses = [];

	$scope.personen = 
	{
		slagroom : [
			{val:'8 persoon (12,-)',prijs:12,pers:8},
			{val:'12 personen (18,-)',prijs:18,pers:12},
			{val:'16 personen (24,-)',prijs:24,pers:16},
			{val:'20 personen (30,-)',prijs:30,pers:20},
			{val:'25 personen (37,50,-)',prijs:37.50,pers:25},
			{val:'30 personen (45,-)',prijs:45,pers:30},
			{val:'38 personen (57,-)',prijs:57,pers:38},
			{val:'46 personen (69,-)',prijs:69,pers:46}
		],
		zwitserse : [
			{val:'8 persoon (12,-)',prijs:12,pers:8},
			{val:'12 personen (18,-)',prijs:18,pers:12},
			{val:'16 personen (24,-)',prijs:24,pers:16},
			{val:'20 personen (30,-)',prijs:30,pers:20},
			{val:'25 personen (37,50,-)',prijs:37.50,pers:25},
			{val:'30 personen (45,-)',prijs:45,pers:30},
			{val:'38 personen (57,-)',prijs:57,pers:38},
			{val:'46 personen (69,-)',prijs:69,pers:46}
		],
		chocolate : [
			{val:'8 persoon (14,-)',prijs:14,pers:8},
			{val:'12 personen (21,-)',prijs:21,pers:12},
			{val:'16 personen (28,-)',prijs:28,pers:16},
			{val:'20 personen (35,-)',prijs:35,pers:20},
			{val:'25 personen (43,75,-)',prijs:43.75,pers:25},
			{val:'30 personen (52,50,-)',prijs:52.50,pers:30},
			{val:'38 personen (66,50,-)',prijs:66.50,pers:38},
			{val:'46 personen (80,50,-)',prijs:80.50,pers:46}
		],
		chipolata : [
			{val:'8 persoon (16,-)',prijs:16,pers:8},
			{val:'12 personen (24,-)',prijs:24,pers:12},
			{val:'16 personen (32,-)',prijs:32,pers:16},
			{val:'20 personen (40,-)',prijs:40,pers:20},
			{val:'25 personen (50,-)',prijs:50,pers:25},
			{val:'30 personen (60,-)',prijs:60,pers:30},
			{val:'38 personen (76,-)',prijs:76,pers:38},
			{val:'46 personen (92,-)',prijs:92,pers:46}
		]
	}
	

	$scope.texttype = [
		{val:'chocoladeletter', prijs:1.50},
		{val:'marsepijn', prijs:4.50}
	];

	$scope.bezorgen = [
		{val:'ophalen'},
		{val:'bezorgen'},
		{val:'Diemen'},
		{val:'ijsburg'}
	];

	$scope.tijden = [
		{val : 'tussen 10:00 en 12:00'},
		{val : 'tussen 12:00 en 13:00'},
		{val : 'tussen 13:00 en 14:00'},
		{val : 'tussen 15:00 en 16:00'}
	]

	$scope.fotoPrijs = 7;
	$scope.textPrijs = 0;
	$scope.bezorgenPrijs = 4.50;
	$scope.btw = 0;

	$scope.inp = {
		smaak : '',
		personen : '',
		taartset : '',
		foto : '',
		text : '',
		texttype : '',
		custom : '',
		bezorgen : ''
	}

	$scope.form = {
		naam : '',
		tel : '',
		email : '',
		datum : '',
		tijd : '',
		postcode : '',
		huisnummer : '',
		plaats : '',
		bezorgen : ''
	}

	$scope.thisText = '';
	$scope.skip2 = false;
	$scope.skip3 = false;
	$scope.skip4 = false;
	$scope.skip5 = false;

	$scope.$watch('inp.smaak', function(){
		console.log('smaak', $scope.inp.smaak)
		if($scope.inp.smaak != '')
		{
			$scope.persoonkeuses = $scope.personen[$scope.inp.smaak.val];
		}
	})

	$scope.$watch('skip2', function(){
			console.log('stap2 skipped')
			if($scope.skip2) $scope.inp.taartset = '';
	});

	$scope.$watch('skip3', function(){
			if($scope.skip3) $scope.inp.foto = '';
	});



	$scope.$watch('form.bezorgen', function(){
			get_price();
	});


	$scope.set_text = function(){
		console.log('oke!')
		$scope.inp.text = {val : $scope.thisText, prijs : $scope.textPrijs};
		//$scope.$apply();
	};



	$scope.$watch('inp.text + inp.texttype', function(){
		console.log('text!' , $scope.inp)
		if($scope.inp.text != '' && $scope.inp.texttype != '' && $scope.inp.foto != '')
		{
			console.log('text + foto')
			show_order();
		}
			

		if($scope.inp.text != '' && $scope.inp.texttype != '' && $scope.inp.taartset != '')
		{
			console.log('text + taartset')
			show_order();
		}
	});

	$scope.$watch('inp.custom', function(){
		console.log($scope.inp.custom)
		if($scope.inp.custom != '')
		{
			console.log('custom + text')
			show_order();
		}
	});

	$scope.$watch('skip4', function(){

		if($scope.skip4)
		{
			$scope.inp.text = '';
			$scope.inp.texttype = '';
		} 

		if($scope.inp.foto != '' || $scope.inp.taartset != '')
		{
			console.log('geen text')
			show_order();
		}
	});

	$scope.$watch('skip5', function(){

		if($scope.skip5)
		{
			$scope.inp.custom = '';
		} 
			
		if($scope.inp.smaak != '' || $scope.inp.personen != '')
		{
			console.log('geen text')
			show_order();
		}	

	});

	$scope.bestel = function(){
		$scope.submitted = true;

		if(!$scope.formOrder.$valid) return;	

		var bestelling =  angular.copy($scope.inp);
		var gegevens =  angular.copy($scope.form);
		var orderData = {};

		gegevens.tijd = gegevens.tijd.val;
		gegevens.prijs = $scope.prijs;

		for(i in bestelling)
		{
			if(bestelling[i].val)
			orderData[i] = bestelling[i].val
		}

		if($scope.overleg)
		{
			gegevens.overleg = $scope.overleg;
		}

		var data = angular.extend(orderData, gegevens);

		console.log('bestel', data);

		if(!$scope.overleg)
		{
			$.post('wp-content/themes/vinny/php/handlers/mail.php', data, function(){
				$scope.orderConfirmed = true;
				
				$scope.$apply();
			})

		}
		else
		{
			$.post('wp-content/themes/vinny/php/handlers/mail_overleg.php', data, function(){
				$scope.orderConfirmed = true;
		
				$scope.$apply();
			})
		}


		
	}

	function show_order () {
		get_price();
		$('.popup-overlay.popup-bestel').fadeIn();
	}

	function get_price () {
		var input = angular.copy($scope.inp);
		var count = 0;
		for(i in input)
		{
			if(input[i].prijs)
			{
				if(input[i].prijs == 'overleg')
				{
					$scope.overleg = true;
				}

				count += parseFloat(input[i].prijs);
			}
		}

		if($scope.form.bezorgen == 'bezorgen')
		{
			count += $scope.bezorgenPrijs;
		}

		//BTW
		var btw = count / 100 * $scope.btw;
		$scope.prijs = $filter('currency')(count + btw, '');
	}

	//JQUERY

    var url = 'wp-content/themes/vinny/server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        maxFileSize: 50000000,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
    })
    .on('fileuploadprocessalways', function (e, data) {
    	if(data.files.error)
    	{
    		$scope.fileError = true;
    		$scope.$apply();
    	}
    })
    .on('fileuploaddone', function (e, data) {
    	$scope.fileError = false;
       	$.each(data.result.files, function (index, file) {
            	
        		if(file.name)
            	{
                	$scope.inp.foto = {val : file.name, prijs : $scope.fotoPrijs};
                	$scope.$apply();
            	}
        }); 
    });

    $scope.$watch('inp.foto', function(){
			console.log($scope.inp);
	});

	$('.btn-voorbeeld').on('click', function(e){
	e.preventDefault();
	var content = $(this).find('.popup-content').html();

	$('.popup-overlay.popup-slide').find('.content-container').html(content);
		$('.content-container .slide').slidesjs({
			width: 419,
	        height: 347,
	        pagination : {active:false},
	        navigation : {active:false}
		});
		$('.popup-overlay.popup-slide').fadeIn();
	});

	$('.popup-close, .popup-overlay').on('click', function(e){
		e.stopImmediatePropagation();
		$('.popup-overlay').fadeOut();
	});

	$('.popup-container').on('click', function(e){
		e.stopPropagation();
	});

	$( "#datum" ).datepicker();




}