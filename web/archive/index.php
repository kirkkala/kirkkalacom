<?php 

$base_url = 'http://www.kalak.org';

/* The box */
if($_GET['box'] == 'no')
	$showbox = FALSE;
else
	$showbox = TRUE;


/* Search through the img folder */
$img_folder = "imgs/";
$imglist='';

mt_srand((double)microtime()*1000);

//use the directory class
$imgs = dir($img_folder);

while ($file = $imgs->read()) {
	if (eregi("gif", $file) || eregi("jpg", $file) || eregi("png", $file)) {
		$imglist .= "$file ";
	}
}
closedir($imgs->handle);

//put all images into an array
$imglist = explode(" ", $imglist);
$no = sizeof($imglist)-2;

//generate a random number between 0 and the number of images
$rndm = mt_rand(0, $no);
$image = $imglist[$rndm];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<meta name="keywords" content="Timo Kirkkala, valokuvaaja, valokuvia, photos, photoblog" />
	<meta name="description" content="The internetplayground & virtual photo exhibition of mr. Timo Kirkkala." />
	<meta name="copyright" content="Timo Kirkkala" />
	<title>Kalak.org</title>
	<link rel="stylesheet" href="<?php print $base_url; ?>/style.css" type="text/css" />
</head>
<body>
<!--[if lte IE 6]>
	<div id="poor-ie-user">
		<h1>Dude. Seriously.</h1>
		<p>We are living the year <?php print date('Y'); ?> and you still got that ancient browser?!</p>
		<p id="tips"><a href="http://www.getfirefox.com/">Firefox</a> / <a href="http://www.opera.com/">Opera</a> / <a href="http://www.google.com/chrome/">Google Chrome</a> / <a href="http://www.microsoft.com/windows/internet-explorer/">Internet Explorer</a>.<br />Please, update.
	</div>
<![endif]-->

<div id="bg" title="Click to change the pic"><a href="<?php print $base_url; ?>/<?php if(!$showbox) print '?box=no'; ?>"><img src="<?php print $base_url; ?>/<?php print $img_folder.$image; ?>" alt="" /></a></div>
<?php if($showbox): ?>
	<div id="content">
		<a href="<?php print $base_url; ?>/?box=no" class="x" title="Close">x</a>
		<h1>Hi there.</h1>
		<p>I got a bit tired with the blog. It is gone for now but I might set up something else later.</p>
		<p>Meanwhile, go to <a href="http://www.flickr.com/photos/kalak/" title="www.flickr.com/photos/kalak">Flickr</a> to see my photostream. Or click around to see another random picture, there are a few of them.</p>
		<h2>Looking for something in particular?</h2>
		<p>Drop me a line to <a href="mailto:timo.kirkkala@gmail.com">timo.kirkkala@gmail.com</a> and I might revert that to the site..</p> 
		<p id="copy">&copy; Timo Kirkkala 2010<br />timo.kirkkala@gmail.com</p>
	</div>
<?php endif; ?>
<?php if(!$showbox): ?>
	<div id="back">
		<a href="<?php print $base_url; ?>/" title="Open info">x</a>
	</div>
<?php endif; ?>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2711157-1");
pageTracker._trackPageview();
} catch(err) {}</script>

<!-- BEGIN Snoobi v1.4 -->
<script type="text/javascript" src="http://eu1.snoobi.com/snoop.php?tili=kalak_org"></script>
<!-- END Snoobi v1.4 -->

</body>
</html>
