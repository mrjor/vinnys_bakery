angular.module('form', []);



function formCtrl ($scope) {
	$scope.personen = [
		{val:'1 persoon (1,-)',prijs:1,pers:1},
		{val:'2 personen (2,-)',prijs:2,pers:2},
		{val:'3 personen (3,-)',prijs:3,pers:3},
		{val:'4 personen (4,-)',prijs:4,pers:4},
		{val:'5 personen (5,-)',prijs:5,pers:5},
		{val:'6 personen (6,-)',prijs:6,pers:6},
		{val:'7 personen (7,-)',prijs:7,pers:7},
		{val:'12 personen (7,-)',prijs:7,pers:12},
		{val:'20 personen (7,-)',prijs:7,pers:20}
	]

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

	$scope.inp = {
		smaak : '',
		personen : '',
		taartset : '',
		foto : '',
		text : '',
		texttype : ''
	}

	$scope.thisText = '';
	$scope.skip2 = false;
	$scope.skip3 = false;
	$scope.skip4 = false;



	$scope.$watch('skip2', function(){
			console.log('stap2 skipped')
			if($scope.skip2) $scope.inp.taartset = '';
	});

	$scope.$watch('skip3', function(){
			if(!$scope.skip3) $scope.inp.foto = '';
	});


	$scope.set_text = function(){
		console.log('test');
		$scope.inp.text = $scope.thisText;
		$scope.$apply();
	};



	//JQUERY

    var url = 'wp-content/themes/vinny/server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
            	console.log(file.name)
                $scope.inp.foto = file.name;
                $scope.$apply();
                console.log($scope.inp);
            });
        }
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




}