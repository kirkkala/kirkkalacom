$(document).ready(function(){


  // Create the dropdown selector form items
  $('#selector').append('<label for="itemChooser">Select Myllykoski paper: </label>');  
  $('#selector').append('<select id="itemChooser" name="itemChooser"></select>');  
  $('#itemChooser').append('<option value="select">Paper name</option>');  
  $('#items .item').each(function(){
    $('#itemChooser').append('<option value="'+$(this).attr('rel')+'">' + $(this).attr('title') + '</option>');
    $(this).addClass($(this).attr('rel'));
  });
    
  // Style the dropdown with ui.selectmenu.js
  // $('select#itemChooser').selectmenu({style:'dropdown'});
  
  // Hide all items
  $('#items .item').css('display','none');
  
  // Expose items when selected
  $('#selector').change(function(){
  $('#items .item').css('display','none');
    $('#items .'+$('#selector #itemChooser').val()).css('display','block');
  });
  
  // Open the links in new window
  $('.item a[href^="http://"]')
    .attr({
      target: "_blank", 
      title: "Opens in a new window"
    });
    
});