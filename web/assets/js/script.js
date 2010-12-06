
$(document).ready(function() {

  $("body").removeClass("nojs");
  $("body").addClass("js");


  // Change the list to cool dropdown
  // Remember to enable  & include the-js
  $.simpledropdown("#select_form");
    
  // Test for dummy browsers
  if(jQuery.support.opacity) {
    $("li.drop").click( function() {
      $("#wrapper").fadeOut("20000");
      $("body").html("<img src=\"http://dev.kalak/phpflickr/img/loading.gif\" />");
    });
    $("body").fadeIn("20000");
  }

  $("a[rel=group]").fancybox({
    'overlayColor'    : '#000',
		'overlayOpacity'  : 0.7,
    'transitionIn'    : 'elastic',
    'transitionOut'   : 'elastic',
    'speedIn'         : 300,
    'speedOut'        : 600,
    'titlePosition'   : 'outside',
    'titleFormat'     : function(title, currentArray, currentIndex, currentOpts) {
      return '<span id="fancybox-title-over"><span>' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? '</span> ' + title : '') + '</span>';
    }
	});

});
