<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<!-- fuji -->
<head>
	<meta charset="utf-8">

	<title>photography by mr. Timo Kirkkala</title>
	<meta name="description" content="Internet playground / online portfolio of web developer / photo hobbyist Timo Kirkkala">
	<meta name="author" content="Timo Kirkkala">

	<meta property="og:title" content="Kirkkala.com" />
	<meta property="og:description" content="Internet playground / online portfolio of web developer / photo hobbyist Timo Kirkkala" />
	<meta property="og:image" content="http://kirkkala.com/apple-touch-icon.png" />
	<meta property="og:url" content="http://kirkkala.com" />

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="assets/css/style.min.css" type="text/css" />
	<link rel="stylesheet" href="assets/supersized/css/supersized.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="assets/supersized/theme/supersized.shutter.css" type="text/css" media="screen" />

	<!-- All .js at the bottom, except for Modernizr / Respond. -->
	<script src="assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like load-item" data-href="http://kirkkala.com" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-colorscheme="dark" data-font="verdana"></div>
	<div id="container">
		<div id="open-info" class="open" title="Click to open info">i</div>
		<div id="info-container">
			<div id="info-shadow">
				<h1>I am Timo</h1>
				<p style="margin-bottom: 0;">I am a web developer at <a href="http://www.mirumagency.com/helsinki">Mirum Helsinki</a>.<br />On my freetime I like to take pictures, especially with old cameras.</p>
				<p>For more photos visit my <a href="http://www.flickr.com/photos/kalak">Flickr photostream</a>.</small></p>
				<h2>Contact me?</h2>
				<p><a href="mailto:timo.kirkkala@gmail.com">timo.kirkkala@gmail.com</a></p>
				<h2>Me in social media:</h2>
				<p class="some">
					<a href="http://www.flickr.com/people/kalak" class="flickr" title="Flickr">flickr.com/photos/kalak</a>
					<a href="http://instagram.com/kirkkala" class="instagram" title="Instagram">instagram.com/kirkkala</a>
					<a href="http://www.facebook.com/timo.kirkkala" class="facebook" title="Facebook">facebook.com/timo.kirkkala</a>
					<a href="http://www.twitter.com/kirkkala" class="twitter" title="Twitter">twitter.com/kirkkala</a>
					<a href="http://fi.linkedin.com/in/timokirkkala" class="linkedin" title="LinkedIn">fi.linkedin.com/in/timokirkkala</a>
				</p>
				<div id="closing-tip">Close to see my photos</div>
				<div id="close-intro" class="close" title="Click to close">Close</div>
			</div> <!-- / #inro-shadow -->
		</div> <!-- /#info-container -->

		<div id="supersized-container">
			<a id="prevslide" class="load-item"></a>
			<a id="nextslide" class="load-item"></a>
			<div id="thumb-tray" class="load-item">
				<div id="thumb-back"></div>
				<div id="thumb-forward"></div>
			</div>
			<div id="progress-back" class="load-item">
				<div id="progress-bar"></div>
			</div>
			<div id="controls-wrapper" class="load-item">
				<div id="controls">
					<a id="play-button"><img id="pauseplay" src="assets/supersized/img/pause.png" alt="Pause/play" width="54" height="42" /></a>
					<div id="slidecounter">
						<span class="slidenumber"></span> / <span class="totalslides"></span>
					</div>
					<div id="slidecaption"></div>
					<a id="tray-button"><img id="tray-arrow" src="assets/supersized/img/button-tray-up.png" alt="Open/close tray" width="54" height="42" /></a>
					<ul id="slide-list"></ul>
				</div> <!-- /#controls -->
			</div> <!-- /#controls-wrapper -->
		</div> <!-- /#supersized-container -->
	</div> <!-- /#container -->

<!-- Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<script type="text/javascript" src="assets/supersized/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/supersized/js/supersized.3.2.6.min.js"></script>
<script type="text/javascript" src="assets/supersized/theme/supersized.shutter.min.js"></script>

<script type="text/javascript" src="assets/js/supersized.gallery.js"></script>

<script defer src="assets/js/plugins.js"></script>
<script defer src="assets/js/script.js"></script>

<?php include_once('assets/analytics.php'); ?>

</body>
</html>