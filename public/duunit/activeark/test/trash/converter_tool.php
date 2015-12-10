<?php
if (!isset($_GET['device'])) {
  $_GET['device'] = '';  
}
// For mobile device detection
require_once('assets/detectmobilebrowser.php');
function divBegin($oid, $title = '', $content = '') {
  if ($title == '') {
    $title = $oid;
  }
  
  $thediv = '<div id="id-' . $oid . '" class="item" title="'.$title.'" rel="'.$oid.'">
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
  <?php /* close frame if viewed from mobile device */
   if ($_GET['device'] == 'mobile' || isMobile()): ?>
  <script type="text/javascript">
    if (top.location.href != self.location.href) {
      top.location.href = self.location.href;
    }
  </script>
  <?php endif; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="assets/style.css" type="text/css" media="all" />
 	<link rel="stylesheet" href="assets/style-screen.css" type="text/css" media="screen" />
 	<link media="only screen and (max-device-width: 480px) and (min-device-width: 320px)" href="assets/style-handheld.css" type="text/css" rel="stylesheet" />
	<title>selector test - tool page</title>
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<div id="content">
  <?php if (isMobile()) { print '<a href="converter.php">Back</a>';} ?>
    
<form id="selecter">
  <?php // build the dropdown with .js ?>
</form>


<div id="items">

<?php print divBegin('1', 'Product 1'); ?> 
<p>The mind blowing product #1</p>
<?php print divEnd(); ?> 

<?php print divBegin('2', 'Product 2'); ?> 
<p>The link to amazing product #2</p>
<?php print divEnd(); ?> 

<?php print divBegin('3', 'Product 3'); ?> 
<p>Link to producto #3</p>
<?php print divEnd(); ?> 


<?php print divBegin('4', 'Product 4'); ?> 
<p>Link to most awesome product #4</p>
<?php print divEnd(); ?>

</div> <!-- /items -->
</div> <!-- /content -->

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="assets/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="assets/scripts.js"></script>
 	
</body>
</html>