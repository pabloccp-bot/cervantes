$(document).ready(function(){
	$('div').mouseover(function(){
		$(this).animate({
			height: '+=200px'
		});
		
	});
	$('div').mouseout(function(){
		$(this).animate({
			height: '-=200px'
		});
	});
	$('div').click(function(){
		$(this).fadeOut('fast');
			
	});
});
