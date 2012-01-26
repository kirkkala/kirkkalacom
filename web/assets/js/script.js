/* Author: Timo Kirkkala
	 jQuery Cookies docs: http://code.google.com/p/cookies/
*/

$(document).ready(function() {

	// Extend to get querystring for always displaying the info
	$.extend({
		getUrlVars: function(){
			var vars = [], hash;
			var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
			for(var i = 0; i < hashes.length; i++) {
				hash = hashes[i].split('=');
				vars.push(hash[0]);
				vars[hash[0]] = hash[1];
			}
			return vars;
		},
		getUrlVar: function(name){
			return $.getUrlVars()[name];
		}
	});

	function blinkMe(element, delay) {
		$(element).hide().delay(delay).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100);
	}    
    
	var time = 400;
	
	if($.cookies.get('hasClosedIntro') !== true || $.getUrlVar('info') === 'show') {
		$('#info-container').hide().delay(420).fadeIn(time);
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


