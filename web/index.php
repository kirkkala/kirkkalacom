<!doctype html public>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	
	<title>photography by mr. Timo Kirkkala</title>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<meta property="og:title" content="Kalak.org | Photographs by mr. Timo Kirkkala">
	<meta property="og:description" content="Internet playground/Online portfolio of web developer/photo hobbyist Timo Kirkkala">
	<meta property="og:image" content="">
	
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="assets/css/font.css" type="text/css" charset="utf-8">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" charset="utf-8"> 
	<link rel="stylesheet" href="assets/supersized/css/supersized.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="assets/supersized/theme/supersized.shutter.css" type="text/css" media="screen" charset="utf-8" />
	
	<!-- All .js at the bottom, except for Modernizr / Respond. -->
	<script src="assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

	<div id="container">
		<div id="open-info" class="open" title="Click to open info">i</div>
		<div id="info-container">
			<div id="info-shadow">
				<h1>Hi, my name is Timo Kirkkala</h1>
				<p>I am a web developer working at <a href="http://www.activeark.com">Activeark</a><br />and I like to take photos with old cameras.</p>
				<p class="js-disabled">Oh crap! How come you don't have JacaScript enabled..?</p>
				<h2>Contact me?</h2>
				<p>Get in touch via email:<br /><a href="timo.kirkkala@gmail.com">timo.kirkkala@gmail.com</a></p>
				<h2>Me at elsewhere:</h2>
				<ul>
					<li><a href="http://www.flickr.com/photos/kalak">flickr.com/photos/kalak</a></li>
					<li><a href="http://www.facebook.com/timo.kirkkala">facebook.com/timo.kirkkala</a></li>
					<li><a href="http://www.twitter.com/kirkkala">twitter.com/kirkkala</a></li>
					<li><a href="http://fi.linkedin.com/in/timokirkkala">fi.linkedin.com/in/timokirkkala</a></li>
				</ul>
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
					<a id="play-button"><img id="pauseplay" src="assets/supersized/img/pause.png"/></a>
					<div id="slidecounter">
						<span class="slidenumber"></span> / <span class="totalslides"></span>
					</div>
					<div id="slidecaption"></div>
					<a id="tray-button"><img id="tray-arrow" src="assets/supersized/img/button-tray-up.png"/></a>
					<ul id="slide-list"></ul>
				</div> <!-- /#controls -->
			</div> <!-- /#controls-wrapper -->
		</div> <!-- /#supersized-container -->
	</div> <!-- /#container -->

<!-- Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<script type="text/javascript" src="assets/js/libs/jquery.cookies.2.2.0.min.js"></script>
<script type="text/javascript" src="assets/supersized/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="assets/supersized/js/supersized.3.2.6.min.js"></script>
<script type="text/javascript" src="assets/supersized/theme/supersized.shutter.min.js"></script>

<script type="text/javascript" src="assets/js/supersized.gallery.js"></script>

<script defer src="assets/js/plugins.js"></script>
<script defer src="assets/js/script.js"></script>
  
</body>
</html>
