// usage: log('inside coolFunc', this, arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if(this.console) {
    arguments.callee = arguments.callee.caller;
    var newarr = [].slice.call(arguments);
    (typeof console.log === 'object' ? log.apply.call(console.log, console, newarr) : console.log.apply(console, newarr));
  }
};

// make it safe to use console.log always
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());


/* The main magic */
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
