<?php
if (!isset($_GET['device'])) {
  $_GET['device'] = '';  
}

// For mobile device detection
require_once('assets/detectmobilebrowser.php');

function createItem($brand, $title = '', $link = '') {
  
  // Usebrans as title if not given
  if ($title == '') { $title = $brand; }
  
  // create object id from $brand
  $oid = strtolower(preg_replace("![^a-z0-9]+!i", "", $brand));
  
  if ($link == '') { $link = $title; }
  else { $link = '<a href="'.$link.'">' . $title . ' &raquo;</a>'; }
  
  $output = '
<div id="item-' . $oid . '" class="item" title="'.$brand.'" rel="'.$oid.'">
<p>Corresponding UPM paper:<br />'.$link.'</p>
</div>
';

  print $output;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php /* close frame if viewed from mobile device */
   if ($_GET['device'] == 'mobile' || isMobile()): ?>
  <script type="text/javascript">
    if (top.location.href != self.location.href) {
      top.location.href = self.location.href;
    }
  </script>
  <?php endif; ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
 	<link rel="stylesheet" href="assets/jquery.selectmenu.css" type="text/css" media="screen" />
 	<link rel="stylesheet" href="assets/style.css" type="text/css" media="all" />
 	<link rel="stylesheet" href="assets/style-screen.css" type="text/css" media="screen" />
 	<link media="only screen and (max-device-width: 480px) and (min-device-width: 320px)" href="assets/style-handheld.css" type="text/css" rel="stylesheet" />
	<title>selector test - tool page</title>
</head>
<body onload="setTimeout(function() { window.scrollTo(0, 1) }, 100);">

<div id="content">
  <?php if (isMobile()) { print '<a href="converter.php">Back</a>';} ?>
    
<form id="selector">
  <?php // build the dropdown with .js ?>
</form>


<div id="items">

<?php 
createItem('My News', 'UPM News C', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=114');
createItem('My News H', 'HS	UPM EcoBasic H', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=807');
createItem('My 70 HS', 'UPM EcoPrime H', ''); // link missing
createItem('My 70 gravure', 'UPM EcoPrime G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=787');
createItem('My Joy', 'UPM Eco H', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=86');
createItem('My Joy gravure', 'UPM Eco G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=88');
createItem('My Gold', 'UPM Smart H', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=297');
createItem('My Gold silk', 'UPM Smart S H', ''); // link not found
createItem('My Gold gravure', 'UPM Smart G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=298');
createItem('My Gold silk gravure', 'UPM Smart S G', ''); // link not found
createItem('My Gold volume gravure', 'UPM Smart M G', ''); //link not found
createItem('My Plus', 'UPM Cat H', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=80');
createItem('My Plus gravure', 'UPM Cat G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=276');
createItem('My Plus silk gravure	UPM', 'Cat S G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=441');
createItem('My Style', 'UPM Max H', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=84');
createItem('My Style gravure', 'UPM Max G', 'http://www2.upm-kymmene.com/w2/onlinecatalog/eu/mini/en/brand.html?id=85');
createItem('My Brite', 'UPM Ultra H', '');
createItem('My Brite gravure', 'UPM Ultra G', '');
createItem('My Silk gravure', 'UPM Ultra G', '');
createItem('My Star gloss', 'UPM Ultra H', '');
createItem('My Star silk', 'UPM Cote M H', '');
createItem('My Star matt', 'UPM Ultra M H', '');
createItem('My Star gravure', 'UPM Ultra G', '');
createItem('My Wega ( gloss)', 'UPM Ultra H', '');
createItem('My Wega ( silk)', 'UPM Star B H', '');
createItem('My Classic', 'UPM Cote H', '');
createItem('My Classic gravure', 'UPM Cote G', '');
createItem('My Volume', 'UPM Ultra B H', '');
createItem('My Volume gravure', 'UPM Ultra M G', '');
createItem('My Brite silk', 'UPM Star M H', '');
createItem('My Brite matt', 'UPM Star B H', '');
createItem('My Brilliant silk', 'UPM Star M H', '');
createItem('My Brilliant', '	UPM Star H', '');
createItem('My Sol (gloss)', 'UPM Sol', '');
createItem('My Sol (matt)', 'UPM Sol M', '');
createItem('My Rex (gloss)', 'UPM Rex', '');
createItem('My Rex (silk)', 'UPM Rex S', '');
createItem('My Nova (gloss)', 'UPM Nova', '');
createItem('My Nova (silk)', 'UPM Nova S', '');
createItem('My Nova (matt)', 'UPM Nova M', '');
?>


</div> <!-- /items -->
</div> <!-- /content -->

<script type="text/javascript" src="assets/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="assets/jquery-ui-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/ui.selectmenu.js"></script>
<script type="text/javascript" src="assets/scripts.js"></script>
 	
</body>
</html>