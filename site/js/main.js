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