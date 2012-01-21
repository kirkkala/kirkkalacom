/* Author: Timo Kirkkala

*/
$(document).ready(function() {
	var time = 400;
	
	if($.cookies.get('hasClosedIntro') !== true) {
		$('#intro-container').hide().delay(1200).fadeIn(800);
	}
	else {
		$('#container .open').fadeIn(time);
		$('.load-item').hide().css('visibility', 'visible').fadeIn(time); 
	}
	
	$('.close').click(function() {
		$.cookies.set('hasClosedIntro', true);
		$('#intro-container').fadeOut(time);
		$('#container .open').fadeIn(time);
		$('.load-item').hide().css('visibility', 'visible').fadeIn(time); 
	});
	
	$('.open').click(function() {
		$('#intro-container').fadeIn(time);
		$('#container .open').fadeOut(time);
		$('.load-item').fadeOut(time); 
	});
});

    