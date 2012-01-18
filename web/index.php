<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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

  <div id="welcome-container">
    <div id="main" role="main">
    	<h1>Hi! I am Timo Kirkkala</h1>
			<p>I am a web developer working at <a href="http://www.activeark.com">Activeark</a> and a photo enthusiast when not working.</p>
			<p>Find more about me from</p>
			<ul>
				<li><a href="http://www.flickr.com/photos/kalak">Flickr.com/photos/kalak</a></li>
				<li><a href="http://www.facebook.com">www.facebook.com/timo.kirkkala</a></li>
				<li><a href="http://fi.linkedin.com/in/timokirkkala">fi.linkedin.com/in/timokirkkala</a></li>
			</ul>
		
				<!--Thumbnail Navigation-->
				<div id="prevthumb"></div>
				<div id="nextthumb"></div>
				
				<!--Arrow Navigation-->
				<a id="prevslide" class="load-item"></a>
				<a id="nextslide" class="load-item"></a>
				
				<div id="thumb-tray" class="load-item">
					<div id="thumb-back"></div>
					<div id="thumb-forward"></div>
				</div>
				
				<!--Time Bar-->
				<div id="progress-back" class="load-item">
					<div id="progress-bar"></div>
				</div>
				
				<!--Control Bar-->
				<div id="controls-wrapper" class="load-item">
					<div id="controls">
						
						<a id="play-button"><img id="pauseplay" src="assets/supersized/img/pause.png"/></a>
					
						<!--Slide counter-->
						<div id="slidecounter">
							<span class="slidenumber"></span> / <span class="totalslides"></span>
						</div>
						
						<!--Slide captions displayed here-->
						<div id="slidecaption"></div>
						
						<!--Thumb Tray button-->
						<a id="tray-button"><img id="tray-arrow" src="assets/supersized/img/button-tray-up.png"/></a>
						
						<!--Navigation-->
						<ul id="slide-list"></ul>

					</div>
				</div>

			
    </div>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
  
  <script type="text/javascript" src="assets/supersized/js/jquery.easing.min.js"></script>
  
  <script type="text/javascript" src="assets/supersized/js/supersized.3.2.6.min.js"></script>
  <script type="text/javascript" src="assets/supersized/theme/supersized.shutter.min.js"></script>


<script type="text/javascript">
	jQuery(function($){
		$.supersized({
			// Functionality
			autoplay					:	0,			// Do not autoplay
			slide_interval		:	10000,	// Length between transitions
			transition				:	1,			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
			transition_speed	:	1500,		// Speed of transition

			// Size & Position
			fit_always				:	1,
			
			// Components
			slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
			slides						:	[					// Slideshow Images
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
				{image : 'supersized/nuuksio-skyrock.jpg', title : 'Skyrock', thumb : 'supersized/thumb/nuuksio-skyrock.jpg', url : ''},
				{image : 'supersized/samisammakko.jpg', title : '', thumb : 'supersized/thumb/samisammakko.jpg', url : ''}
			]
		});
	});
    
</script>



  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="assets/js/plugins.js"></script>
  <script defer src="assets/js/script.js"></script>
  <!-- end scripts-->
  
</body>
</html>
