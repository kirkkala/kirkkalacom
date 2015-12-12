$(document).ready(function() {

	var time = 400;

	$('#container .open').fadeIn(time);
	$('.load-item').hide().css('visibility', 'visible').fadeIn(time);
    
	$('.close').click(function() {
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

	function blinkMe(element, delay) {
		$(element).hide().delay(delay).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
	}


	// Add attributes for the thumbnail images
	setTimeout(function(){

	var elem = $('#thumb-list li img'),
			elemHeight = elem.height(),
			elemWidth = elem.width();

	  $('#thumb-list li img').attr('width', 150);
		$('#thumb-list li img').attr('height', 150);
	}, 500);

});


