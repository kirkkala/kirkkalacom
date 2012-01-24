/* Author: Timo Kirkkala
	 jQuery Cookies docs: http://code.google.com/p/cookies/
*/
$(document).ready(function() {

	function blinkMe(element, delay) {
		$(element).hide().delay(delay).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
	}    
    
	var time = 400;
	
	if($.cookies.get('hasClosedIntro') !== true) {
		$('#info-container').hide().delay(20).fadeIn(time);
		$('img').css('opacity', 0.05);
		blinkMe('#closing-tip', 3000);
	}
	else {
		$('#container .open').fadeIn(time);
		$('.load-item').hide().css('visibility', 'visible').fadeIn(time); 
	}
	
	$('.close').click(function() {
		$.cookies.set('hasClosedIntro', true);
		$('#info-container').fadeOut(time);
		$('#container .open').fadeIn(time);
		$('.load-item').hide().css('visibility', 'visible').fadeIn(time); 
		$('img').css('opacity', 1);
	});
	
	$('.open').click(function() {
		$('#info-container').fadeIn(time);
		$('#container .open').fadeOut(time);
		$('.load-item').fadeOut(time); 
		$('img').css('opacity', 0.05);
		blinkMe('#closing-tip', 5000);
	});	
});


