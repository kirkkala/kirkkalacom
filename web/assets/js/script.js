/* Author: Timo Kirkkala
	 jQuery Cookies docs: http://code.google.com/p/cookies/
*/
$(document).ready(function() {
	var time = 400;
	
	if($.cookies.get('hasClosedIntro') !== true || true) {
		$('#intro-container').hide().delay(20).fadeIn(time);
		$('img').css('opacity', 0.1);
		$('#closing-tip').delay(3000).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
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
		$('img').css('opacity', 1);
	});
	
	$('.open').click(function() {
		$('#intro-container').fadeIn(time);
		$('#container .open').fadeOut(time);
		$('.load-item').fadeOut(time); 
		$('img').css('opacity', 0.1);
	});
});

    