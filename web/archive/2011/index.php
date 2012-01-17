<?php 
require_once('assets/functions.php'); 
?>
<!doctype html>
<!--[if lt IE 7]> <html lang="en-us" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
  <meta name="keywords" content="Timo Kirkkala, valokuvaaja, valokuvia, photos, photoblog, flickr" />
  <meta name="description" content="Photos by mr Timo Kirkkala - the flickr API experiment." />
  <meta name="copyright" content="Timo Kirkkala" />
	<meta name="viewport" content="width=1123, initial-scale=1.0"> <!-- oh yes, this is stoopid. I wish I had time to bake this site responsive -->
  
	<title dir="ltr"><?php if($photoset_info['title']) { print $photoset_info['title'] .' | ';}else{ print 'The Flickr experiment | '; } ?>Timo Kirkkala | Kalak.org</title>
	
	<link rel="shortcut icon" href="/favicon.ico" />
	<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/assets/css/jquery.fancybox-1.3.2.css" type="text/css" />
	
	<script type="text/javascript" src="/assets/js/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.fancybox-1.3.2.pack.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.simpledropdown.js"></script>
	<script type="text/javascript" src="/assets/js/script.js"></script>

</head>
<body class="nojs">

<div id="wrapper">
<?php if(!$cache): ?>
<div class="error">
<p>Oh noes - smth wrong with caching.<br />Photos might load slowly :(</p>
</div>
<?php endif; ?>
<div id="header">
<h1><a href="/"><span><?php print $welcome; ?></span> kalak.org <span> - the internetplayground of mr. Timo Kirkkala</span></a></h1>
<div id="navi">
<ul><li><a class="textlayer" href="#about" title="About kalak.org"> What on earth is this website about!? </a></li></ul>
</div>
<div id="info">
<div id="photoset_img"><?php print $set_img; ?></div>
<div id="photoset_desc">
<h2><?php print $set_title; ?></h2>
<?php print $set_desc; ?>
</div>
</div><!-- /info -->
<div class="clear"></div>
</div><!-- /header -->
<div id="content">
<div id="collaguae">
<div id="select_form">
<p class="tjeu">Check out the photosets too!</p>
	<ul>
		<li>Select a photoset</li>
		<li>
			<ul>
        <li><a href="?photoset=latest">Latest photos</a></li>
        <?php print $photoset_select; ?>
 			</ul>
		</li>
	</ul>
</div>
<?php print $photocollague; ?>
<div id="copy">
<p>&copy; Timo Kirkkala 2010</p>
</div><!-- /copy -->
<div id="like">
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1" type="text/javascript"></script>
<fb:like href="http://www.kalak.org/" layout="button_count" font="segoe ui" colorscheme="dark"></fb:like>
</div><!-- /like -->
<div class="clear"></div>

</div><!-- /collaguae -->
<div style="display: none">
<div id="about"> 
<h2>What is this kalak.org?</h2>
<p>This is about fetching photos from the <a href="http://www.flickr.com/photos/kalak/">Flickr</a> account of photo enthusiast / Web developer mr. Timo Kirkkala.</p>
<h2>Contact Me?</h2>
<ul>
<li><a href="mailto:timo.kirkkala@gmail.com">timo.kirkkala@gmail.com</a></li>
<li><a href="http://www.facebook.com/timo.kirkkala">Facebook</a></li>
<li><a href="http://www.flickr.com/people/kalak/">Flickr</a></li>
<li><a href="http://twitter.com/kirkkala">Twitter</a></li>
<li><a href="http://fi.linkedin.com/in/timokirkkala">Linkedin</a></li>
</ul>
</div><!-- /about -->
</div>
</div><!-- /content -->
</div><!-- /wrapper -->
<?php include_once('assets/analytics.php'); ?>
</body>
</html>
