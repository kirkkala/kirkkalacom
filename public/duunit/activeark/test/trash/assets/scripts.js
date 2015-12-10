$(document).ready(function(){

  // Create the dropdown 
  $('#selecter').append('<label for="itemChooser">Product: </label>');  
  $('#selecter').append('<select id="itemChooser"></select>');  
  $('#itemChooser').append('<option value="select">--Select--</option>');  
  $('#items .item').each(function(){
    $('#itemChooser').append('<option value="'+$(this).attr('rel')+'">' + $(this).attr('title') + '</option>');
    $(this).addClass($(this).attr('rel'));
  });
  
  // Hide stuff
  $('#items .item').css('display','none');
  
  // Expose selection
  $('#selecter').change(function(){
  $('#items .item').css('display','none');
    $('#items .'+$('#selecter #itemChooser').val()).css('display','block');
  });
});