<?php
// For mobile device detection
require_once('assets/detectmobilebrowser.php');
function divBegin($oid, $title = '', $content = '') {
  if ($title == '') {
    $title = $oid;
  }
  
  $thediv = '<div id="' . $oid . '" class="item" title="'.$title.'" rel="'.$oid.'">
  <h1>' . $title . '</h1>';
  return $thediv;
}

function divEnd() {
  return '</div>';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<title>selector test - tool page</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="assets/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="assets/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="assets/style.css" type="text/css" media="all" />
 	<link rel="stylesheet" href="assets/style-screen.css" type="text/css" media="screen" />
 	<!--link rel="stylesheet" href="assets/style-handheld.css" type="text/css" media="handheld" /-->
 	<link media="only screen and (max-device-width: 480px) and (min-device-width: 320px)" href="assets/style-handheld.css" type="text/css" rel="stylesheet" />
 	<!--link media="handheld, only screen and (max-device-width: 319px)" href="mobile_simple.css" type="text/css" rel="stylesheet" /-->
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<div id="content">
  <?php if (isMobile()) { print '<a href="converter.php">Back</a>';} ?>
    
<form id="selecter">
  <?php // build the dropdown with .js ?>
</form>


<div id="items">

<?php print divBegin('first', 'First title'); ?> 
<p>Some amazing content</p>
<?php print divEnd(); ?> 

<?php print divBegin('second'); ?> 
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras at felis sem. Aliquam mattis, magna porttitor faucibus pulvinar, dui arcu sodales mi, non ullamcorper purus ante vitae dui. Curabitur eu lorem ac lorem consectetur ornare sed a nibh. Mauris et orci urna, a pharetra lorem. In hac habitasse platea dictumst. Suspendisse lectus dolor, consequat a pulvinar ut, sodales a orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at lacus ante. Aliquam pellentesque consequat eros vel sollicitudin. Cras ornare lacinia massa, ut lobortis tellus blandit id. Vivamus quis justo orci. Integer ac adipiscing orci.</p>

<p>Mauris non varius velit. Maecenas laoreet porta nulla sed porta. Integer ornare erat felis. Integer pharetra lobortis tempor. Nullam eleifend nulla ac massa elementum fringilla fringilla urna dapibus. Aliquam convallis lectus non ligula facilisis volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget mattis nibh. Quisque interdum risus id quam pellentesque gravida. Aenean porta est quis purus gravida nec rhoncus arcu lobortis. Aliquam aliquet imperdiet leo ut rutrum. Morbi vulputate scelerisque tortor in malesuada. Cras semper auctor tellus, ac cursus dui convallis sollicitudin. Curabitur pharetra augue et diam imperdiet sed ornare lectus interdum. Nunc pellentesque, diam ut auctor feugiat, ante nisl pellentesque risus, at malesuada sem lorem ac nisi.</p>
<?php print divEnd(); ?> 

<?php print divBegin('third', 'Third box'); ?> 
<p>Maecenas laoreet porta nulla sed porta. Integer ornare erat felis. Integer pharetra lobortis tempor. Nullam eleifend nulla ac massa elementum fringilla fringilla urna dapibus. Aliquam convallis lectus non ligula facilisis volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eget mattis nibh. Quisque interdum risus id quam pellentesque gravida. Aenean porta est quis purus gravida nec rhoncus arcu lobortis. Aliquam aliquet imperdiet leo ut rutrum. Morbi vulputate scelerisque tortor in malesuada. Cras semper auctor tellus, ac cursus dui convallis sollicitudin. Curabitur pharetra augue et diam imperdiet sed ornare lectus interdum. Nunc pellentesque, diam ut auctor feugiat, ante nisl pellentesque risus, at malesuada sem lorem ac nisi.</p>
<?php print divEnd(); ?> 


<?php print divBegin('fourth'); ?> 
<p>Integer ornare erat felis. Integer pharetra lobortis tempor. Nullam eleifend nulla ac massa elementum fringilla fringilla urna dapibus. Aliquam convallis lectus non ligula facilisis volutpat. Aenean porta est quis purus gravida nec rhoncus arcu lobortis. Aliquam aliquet imperdiet leo ut rutrum. Morbi vulputate scelerisque tortor in malesuada. Cras semper auctor tellus, ac cursus dui convallis sollicitudin. Curabitur pharetra augue et diam imperdiet sed ornare lectus interdum. Nunc pellentesque, diam ut auctor feugiat, ante nisl pellentesque risus, at malesuada sem lorem ac nisi.</p>
<?php print divEnd(); ?>

</div> <!-- /items -->
</div> <!-- /content -->

</body>
</html>