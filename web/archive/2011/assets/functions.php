<?php
require_once("phpflickr/phpFlickr.php");

// Create phpFlickr object
$f = new phpFlickr("******");

// Initialize db array
$db = array();
$cache = TRUE;
switch($_SERVER['HTTP_HOST']) {
  case 'local.kalak.org': // My local dev
    $db['host'] = 'localhost';
    $db['db']   = 'kalak';
    $db['user'] = 'root';
    $db['psw']  = 'root';
    break;
  case 'kalak.org' || 'www.kalak.org': // Nebula
    $db['host'] = 'mysql14.nebula.fi';
    $db['db']   = 'kalakorg';
    $db['user'] = 'kalakorg';
    $db['psw']  = '******';
    break;
  default:
    $cache = FALSE;
    break;
}

// Test db if it is cool to cache
 
if (!$dblink = mysql_connect($db['host'], $db['user'], $db['psw'])) {
    $cache = FALSE;
}
mysql_close($dblink);


// If db ok, cache the stuff
if($cache) {
	$f->enableCache('db', 'mysqli://'.$db['user'].':'.$db['psw'].'@'.$db['host'].'/'.$db['db'], 0, 'phpflickr_cache');
}

// This is my Flickr NSID
$nsid = '29955877@N04';

// Set photoset ID
$photoset_id = '';
if (isset($_GET['photoset'])) {
	$photoset_id = $_GET['photoset'];
}
else {
	$_GET['photoset'] = '';
}
    // Get the friendly URL of the user's photos
    $photos_url = $f->urls_getUserPhotos($nsid);

    $photosets = $f->photosets_getList($nsid);
    
    // Initialize some variables
    $selected = '';
    $photoset_select = '';
		
    foreach($photosets['photoset'] as $photoset) {
      if($photoset['id'] == $photoset_id || $photoset['id'] == 'latest') {
        $selected =  ' class="selected"';
      }
      $photoset_select .= '<li><a href="?photoset='.$photoset['id'].'"'.$selected.'>' . htmlspecialchars($photoset['title']) . '</a></li>';
      $selected = '';
    }
    
    // Get the user's public photos
    $my_photos = $f->people_getPublicPhotos($nsid, NULL, NULL, 60);
    
    // Get phhotos from a set
    $photos = $f->photosets_getPhotos($photoset_id, 'url_m, url_o');
    $photoset_info = $f->photosets_getInfo($photoset_id);
    
    
    //print_r($my_photos);
    
    $welcome = 'Welcome to ';
    
    if(!$_GET['photoset'] || $_GET['photoset'] == 'latest') {
      $display_photoset = FALSE;
      $photoarray = $my_photos['photos']['photo'];
    }
    elseif($photoset_info['owner'] == $nsid) {
      $photoarray = array_reverse((array)$photos['photoset']['photo']);
      $display_photoset = TRUE;
      // Get the photoset primary img url & stuff

      $primary_photo = $f->photos_getInfo($photoset_info['primary'], 'url_m');
     	$primary_photo_url = 'http://farm'.$primary_photo['photo']['farm'].'.static.flickr.com/'.$primary_photo['photo']['server'].'/'.$primary_photo['photo']['id'].'_'.$primary_photo['photo']['secret'].'_s.jpg';

      $photoset_url = $photos_url . 'sets/' . $photoset_info['id'];

      $welcome = 'This is ';
    }    
    
    // Loop through the photos and output html
    if($photoarray) {
    	$photocollague = '';
      foreach ($photoarray as $photo) {
          $phototitle = htmlspecialchars($photo['title']);
          $photocollague .= '<a class="fancy" title="' . $phototitle . '" rel="group" href="'.$f->buildPhotoURL($photo,'medium_640').'" style="-webkit-transform: rotate('.rand(-5, 5).'deg)">';
          $photocollague .= '<img alt="' . $phototitle . '" src="' . $f->buildPhotoURL($photo, "Square") . '" /></a>';
      }
    }
    else {
      $photocollague .= '<div style="text-align: center; width: 100"><h2>Bah. No photos found.<h2><p>The querystring is invalid or maybe you were trying to display someone elses photos?<br />We do not like that.</p><p>Display <a href="/?photoset=latest">the latest pics</a> or select a set from the dropdown.</p></div>';
    }
    
    if($display_photoset) {
      $set_img = '<img src="'.$primary_photo_url.'" alt="" />';
      $set_title = '<a href="'.$photoset_url .'" title="See this photoset on Flickr">'.$photoset_info['title'].'</a>';
      $set_desc = '<p>'.$photoset_info['description'] .'<br /><a href="'.$photoset_url.'">See this photoset on Flickr</a></p>';
    }
    else {
      $set_img = '<a href="http://www.flickr.com/photos/kalak" title="Go to my Flickr photostream"><img src="http://farm4.static.flickr.com/3093/buddyicons/29955877@N04.jpg" alt="Kalak" /></a>';
      $set_title = 'Hi there!';
      $set_desc = '<p>Click around for photos from my <a href="http://www.flickr.com/photos/kalak/">Flickr</a> account!</p>';
    }

?>