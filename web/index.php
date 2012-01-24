<!doctype html public>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>kalak.org / photography by mr. Timo Kirkkala</title>
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
				<p>I am a web developer working at <a href="http://www.activeark.com">Activeark</a> and I like to take photos with old cameras.</p>
				<p class="js-disabled">Oh crap! How come you don't have JacaScript enabled..?</p>
				<h2>Contact me</h2>
				<p>You can contact me via email: timo.kirkkala@gmail.com</p>
				<h2>Find me from the internet</h2>
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


<script type="text/javascript">
jQuery(function($){
	$.supersized({
		// Functionality
		autoplay					:	0,			// Do not autoplay
		slide_interval		:	700,	// Length between transitions
		transition				:	1,			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
		transition_speed	:	1500,		// Speed of transition
			// Size & Position
		fit_always				:	1,
		
		// Components
		slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
		slides						:	[					// Slideshow Images
			{image : 'supersized/nuuksio-skyrock.jpg', title : 'Skyrock', thumb : 'supersized/thumb/nuuksio-skyrock.jpg', url : ''},
			{image : 'supersized/aut.jpg', title : 'Aut/Egg/Ei/Huevo/Oeuf/Muna/Uovo/Ägg', thumb : 'supersized/thumb/aut.jpg', url : ''},
			{image : 'supersized/birches.jpg', title : 'Karvasalmi birches', thumb : 'supersized/thumb/birches.jpg', url : ''},
			{image : 'supersized/hki_ballsofsteel.jpg', title : 'Balls of steel', thumb : 'supersized/thumb/hki_ballsofsteel.jpg', url : ''},
			{image : 'supersized/hki_kiosk.jpg', title : 'Kiosk', thumb : 'supersized/thumb/hki_kiosk.jpg', url : ''},
			{image : 'supersized/hki_pasila_grill.jpg', title : 'Burger joint', thumb : 'supersized/thumb/hki_pasila_grill.jpg', url : ''},
			{image : 'supersized/hki_sahkosiro.jpg', title : 'Sähkösiro, Punavuori', thumb : 'supersized/thumb/hki_sahkosiro.jpg', url : ''},
			{image : 'supersized/hki_seal.jpg', title : 'Seal of steel', thumb : 'supersized/thumb/hki_seal.jpg', url : ''},
			{image : 'supersized/hki_toolobay.jpg', title : 'Töölö Bay, Helsinki', thumb : 'supersized/thumb/hki_toolobay.jpg', url : ''},
			{image : 'supersized/hki_uunisaari_iceberg.jpg', title : 'Iceberg in Uunisaari', thumb : 'supersized/thumb/hki_uunisaari_iceberg.jpg', url : ''},
			{image : 'supersized/hki_vanhakaupunginkoski_seasons.jpg', title : 'Two seasons', thumb : 'supersized/thumb/hki_vanhakaupunginkoski_seasons.jpg', url : ''},
			{image : 'supersized/iceland_codheads.jpg', title : 'Iceland: Codheads', thumb : 'supersized/thumb/iceland_codheads.jpg', url : ''},
			{image : 'supersized/iceland_cods.jpg', title : 'Iceland: Dried cods', thumb : 'supersized/thumb/iceland_cods.jpg', url : ''},
			{image : 'supersized/iceland_godafoss.jpg', title : 'Iceland: Godafoss', thumb : 'supersized/thumb/iceland_godafoss.jpg', url : ''},
			{image : 'supersized/iceland_skogafoss_goblin.jpg', title : 'Iceland: Skogafoss Goblin', thumb : 'supersized/thumb/iceland_skogafoss_goblin.jpg', url : ''},
			{image : 'supersized/isolated.jpg', title : 'Isolated', thumb : 'supersized/thumb/isolated.jpg', url : ''},
			{image : 'supersized/lofoten.jpg', title : 'Lofoten', thumb : 'supersized/thumb/lofoten.jpg', url : ''},
			{image : 'supersized/lofoten_roadtrip.jpg', title : 'Lofoten roadtrip', thumb : 'supersized/thumb/lofoten_roadtrip.jpg', url : ''},
			{image : 'supersized/lofoten_senja.jpg', title : 'Senja island, Norway', thumb : 'supersized/thumb/lofoten_senja.jpg', url : ''},
			{image : 'supersized/london_barrels.jpg', title : 'London barrels', thumb : 'supersized/thumb/london_barrels.jpg', url : ''},
			{image : 'supersized/london_geffreys.jpg', title : 'Geffreys inner yard in London', thumb : 'supersized/thumb/london_geffreys.jpg', url : ''},
			{image : 'supersized/samisammakko.jpg', title : '', thumb : 'supersized/thumb/samisammakko.jpg', url : ''}
		]
	});
});
</script>

<script defer src="assets/js/plugins.js"></script>
<script defer src="assets/js/script.js"></script>
  
</body>
</html>
