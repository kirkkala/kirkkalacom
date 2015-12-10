<?php
// For mobile device detection
require_once('assets/detectmobilebrowser.php');
$deviceType = "desktop";

if (isMobile()) {
  $lid = 'mobile';
}
else {
  $lid = 'iframe';
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<title>selector test - index page</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
		!window.jQuery && document.write('<script src="assets/jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="assets/style.css" type="text/css" media="all" />
 	<link rel="stylesheet" href="assets/style-screen.css" type="text/css" media="screen" />
 	<!--link rel="stylesheet" href="assets/style-handheld.css" type="text/css" media="handheld" /-->
 	<link media="only screen and (max-device-width: 480px) and (min-device-width: 320px)" href="assets/style-handheld.css" type="text/css" rel="stylesheet" />
 	<!--link media="handheld, only screen and (max-device-width: 319px)" href="mobile_simple.css" type="text/css" rel="stylesheet" /-->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#tool-link-iframe").fancybox({
				'width'           : '50%',
				'height'          : '100%',
				'autoScale'			  : false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				    : 'iframe'
			});
		});
	</script>
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<div id="content">
	<h1>
		Converter tool
	</h1>
	<p><a id="tool-link-<?php print $lid ?>" href="converter_tool.php">Open the tool</a></p>
</div>
</body>
</html>