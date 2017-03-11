<?php
if (isset($_GET['nobummer'])) {
	$listfiles = TRUE;
}
else {
	$listfiles = FALSE;
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en-us" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-us" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-us" class="no-js ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-us" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title>kirkkala.com - Kuvat</title>
	<meta name="description" content="Kirkkala.com photos repository">
	<meta name="author" content="Timo Kirkkala">

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="/assets/css/gallery_index.css" type="text/css" />

	<!-- All .js at the bottom, except for Modernizr / Respond. -->
	<script src="/assets/js/libs/modernizr-2.0.6.min.js"></script>
</head>

</head>
<body>
 	<div id="content">
<?php if (!$listfiles): ?>
		<h1><small style="font-size: 0.4em;">Bummer.</small><br />Galleries are hidden</h1>
		<ul>
			<li>Go to <a href="/">kirkkala.com</a></li>
		</ul>
<?php endif; ?>

<?php if ($listfiles): ?>
	<h1><small style="font-size: 0.4em;">No bummers.</small><br />Here are teh galleris</h1>
	<?php
	// http://stackoverflow.com/a/35105800
	function getDirContents($dir, $filter = '', &$results = array()) {
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);

        if(!is_dir($path)) {
        	if(empty($filter) || preg_match($filter, $path)) {
          	$results[] = $path;
          }
        }
        elseif($value != "." && $value != "..") {
        	getDirContents($path, $filter, $results);
        }
    }

    return $results;
}

$dir = getcwd();
$galleries = getDirContents($dir, '/index\.(php)$/');
?>
<ul>
<?php
foreach ($galleries as $gallery) {
	$gallerydir = str_replace($dir . '/', '', $gallery);
	$gallerydir = str_replace('/index.php', '', $gallerydir);
	print '<li><a href="'.$gallerydir.'">'.$gallerydir.'</a>';
}
?>
</ul>
<?php


endif ; ?>

		<div id="footer">
     <p id="copy">&copy; Timo Kirkkala 2008-<?php date_default_timezone_set('Europe/Helsinki'); print date('Y');  ?></p>
    </div>
	</div>

<!-- Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.6.2.min.js"><\/script>')</script>

<?php include_once('../assets/analytics.php'); ?>

</body>
</html>
