$('.item').on('click',function(e){
	e.stopPropagation();
	var elm = $(this);
	if(!elm.hasClass('closed')) return;
	elm.removeClass('closed');
	elm.find('.info').height('auto');
	var height = elm.find('.info').height();
	//console.log(height)
	elm.find('.info').height(0);
	elm.find('.info').height(height);
});

$('.info-close').on('click',function(e){
	e.stopPropagation();
	if($(this).parent().hasClass('closed')) return;
	$(this).parent().addClass('closed');
	$(this).parent().find('.info').height(0)
});


$('.product-item').on('click',function(e){
	e.preventDefault();
	var content = $(this).find('.popup-content').html();

	$('.popup-overlay').find('.content-container').html(content);
	$('.popup-overlay').fadeIn();
});

$('.popup-close, .popup-overlay').on('click', function(e){
	e.stopImmediatePropagation();
	$('.popup-overlay').fadeOut();
});

$('.popup-container').on('click', function(e){
	e.stopPropagation();
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

$( "#datum" ).datepicker();

$('input[name="type"], select[name="personen"]').on('change', function(){
var inputs = get_bestel_inputs();
	
	if(inputs.personen != '' && inputs.type != '')
	{
		$('#stap2').addClass('enable');
	}
})

$('select[name="setje"]').on('change', function(){
var inputs = get_bestel_inputs();
	
	if(inputs.setje != '')
	{
		$('#stap3').addClass('enable');
	}
});

$('#fileupload').on('change', function(){
var inputs = get_bestel_inputs();
	

		$('#stap4').addClass('enable');
	
});

$('input[name="text"], input[name="letterssmaak"]').on('change', function(){
var inputs = get_bestel_inputs();
	
	if(inputs.text != '' && inputs.letterssmaak != '')
	{
		$('#stap5').addClass('enable');
	}
});

$('select[name="custom"]').on('change', function(){
var inputs = get_bestel_inputs();
	
	if(inputs.custom != '')
	{
		$('.popup-overlay.popup-bestel').fadeIn();
	}
});

$('.btn-overslaan').on('click',function(e){
	e.preventDefault();
	var id = 'stap'+$(this).attr('rel');
	if($(this).attr('rel') == 'bestel')
	{
		$('.popup-overlay.popup-bestel').fadeIn();
		return;
	}
	$('#'+id).addClass('enable');
});

$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'wp-content/themes/vinny/server/php/';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

function get_bestel_inputs() {
 return $('form#bestel').serializeObject();
}









