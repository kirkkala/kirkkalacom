<?php require_once('assets/functions.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fi" lang="fi">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
<meta name="keywords" content="Timo Kirkkala, valokuvaaja, valokuvia, photos, photoblog, flickr" />
<meta name="description" content="Photos by mr Timo Kirkkala - the flickr API experiment." />
<meta name="copyright" content="Timo Kirkkala" />
<title>Timo Kirkkala | Kalak.org</title>
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" />
<link rel="stylesheet" href="/assets/css/jquery.fancybox-1.3.2.css" type="text/css" />

</head>

<body class="nojs">

<div id="wrapper">
<div id="header">

<?php /*
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
*/ ?>

<div id="info">
<?php /* <div id="photoset_img"><a href="<?php print $photoset_url; ?>"><img src="<?php print $primary_photo_url; ?>" alt="" /></a></div> */ ?>
<div id="photoset_img"><a href="http://www.flickr.com/photos/kalak"><img src="http://farm4.static.flickr.com/3093/buddyicons/29955877@N04.jpg" alt="Kalak" /></a></div>
<div id="photoset_desc">
<h2>Hi there</h2>
<p>Enjoy the latest photos from my <a href="http://www.flickr.com/photos/kalak">flickr</a> photostream.</p>
<?php /*
<h2><a href="<?php print $photoset_url; ?>"><?php print $photoset_info['title']; ?></a></h2>
<p><?php print $photoset_info['description']; ?></p>
*/ ?>
</div>
</div>
<div class="clear"></div>
</div><!-- /header -->
<div id="content">
<div id="collaguae">
<?php print $photocollague; ?>
<div id="like">
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like href="http://www.kalak.org/" layout="button_count" font="segoe ui" colorscheme="dark"></fb:like>
</div>
<div class="clear"></div>
</div><!-- /collaguae -->
</div><!-- /content -->
</div><!-- /wrapper -->

 
<script type="text/javascript" src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fancybox-1.3.2.pack.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>  
<?php /* <script type="text/javascript" src="/assets/js/jquery.simpledropdown.js"></script> */ ?>
</body>
</html>
