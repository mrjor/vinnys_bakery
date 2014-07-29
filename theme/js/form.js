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

	$scope.smaak = [
		{val : 'slagroom',prijs:5},
		{val : 'zwitserse',prijs:10},
		{val : 'chocolate',prijs:20},
		{val : 'chipolata',prijs:30}
	];

	$scope.texttype = [
		{val:'chocoladeletter', prijs:10},
		{val:'marsepijn', prijs:10},
	];

	$scope.bezorgen = [
		{val:'ophalen'},
		{val:'bezorgen'},
		{val:'Diemen'},
		{val:'ijsburg'},
	];

	$scope.tijden = [
		{val : 'tussen 10:00 en 12:00'},
		{val : 'tussen 12:00 en 13:00'},
		{val : 'tussen 13:00 en 14:00'},
		{val : 'tussen 15:00 en 16:00'}
	]

	$scope.fotoPrijs = 5;
	$scope.textPrijs = 3;
	$scope.bezorgenPrijs = 4.50;
	$scope.btw = 19;

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
				count += input[i].prijs;
			}
		}

		if($scope.form.bezorgen == 'bezorgen')
		{
			count += $scope.bezorgenPrijs;
		}

		//BTW
		var btw = count / 100 * $scope.btw;
		$scope.prijs = count + btw;
	}

	//JQUERY

    var url = 'wp-content/themes/vinny/server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
            	console.log(file.name)
                $scope.inp.foto = {val : file.name, prijs : $scope.fotoPrijs};
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