<?php 
require_once('assets/functions.php'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta name="keywords" content="Timo Kirkkala, valokuvaaja, valokuvia, photos, photoblog, flickr" />
<meta name="description" content="Photos by mr Timo Kirkkala - the flickr API experiment." />
<meta name="copyright" content="Timo Kirkkala" />
<title><?php if($photoset_info['title']) { print $photoset_info['title'] .' | ';}else{ print 'The Flickr experiment | '; } ?>Timo Kirkkala | Kalak.org</title>
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
<ul><li><a class="textlayer" href="#about" title="About kalak.org">About</a></li></ul>
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
	<ul>
		<li>Select photoset</li>
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
<h2>What is this about?</h2>
<p><a href="http://kalak.org">Kalak.org</a> is the internet playground of web developer &amp; photo hobbyist mr. Timo Kirkkala.</p>
<p>The domain has been around since 2005, first starting as static html pages, then evolving to a <a href="http://wordpress.com/">Wordpress</a> blog which I later got tired and shut down in autumn 2009.</p>
<p>The current version was launched 6.12.2010 and is build with a little help of <a href="http://www.flickr.com/services/api/">Flickr API</a> &amp; <a href="http://phpflickr.com/">phpflickr 3.0</a> fetching photos from my Flickr account.</p>
<p>Most of the stuff I have on Flickr is <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/">Creative Commons licenced</a>, but it is usually nice to ask the copyright holder if you wan't to use the images somewhere else. Thanks.</p>
<h2>Contact Me?</h2>
<p>Drop me an email to <a href="mailto:timo.kirkkala@gmail.com">timo.kirkkala@gmail.com</a> or find me from <a href="http://www.facebook.com/timo.kirkkala">Facebook</a> or <a href="http://www.flickr.com/people/kalak/">Flickr</a>.</p>
</div><!-- /about -->
</div>
</div><!-- /content -->
</div><!-- /wrapper -->
<?php include_once('assets/analytics.php'); ?>
</body>
</html>
