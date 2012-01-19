/* Author: Timo Kirkkala

*/
$(document).ready(function() {
	$('#intro-container').hide().delay(1200).fadeIn(800);
	$('.close').click(function() {
		$('#intro-container').fadeOut(400);
		$('#container .open').fadeIn(400);
		$('.load-item').css('visibility', 'visible'); 
	});
	
	$('.open').click(function() {
		$('#intro-container').fadeIn(400);
		$('#container .open').fadeOut(400);
		$('.load-item').css('visibility', 'hidden'); 
	});
});

    