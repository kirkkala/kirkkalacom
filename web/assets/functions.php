<?php
require_once("phpflickr/phpFlickr.php");

// Create phpFlickr object
$f = new phpFlickr("******");

// Initialize db array
$db = array('host'  => NULL, 'db'    => NULL, 'user'  => NULL, 'psw'   => NULL);
$cache = TRUE;

switch($_SERVER['HTTP_HOST']) {
  case 'dev.kalak': // My local dev
    $db['host'] = 'localhost';
    $db['db']   = 'kalakorg';
    $db['user'] = 'root';
    $db['psw']  = 'jwfrqf';
    break;
  case 'kalak.org' || 'www.kalak.org': // Nebula
  print 'foo';
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
$dblink = mysql_connect($db['host'], $db['user'], $db['psw']); 
if (!$dblink) {
    $cache = FALSE;
}
mysql_close($dblink);


// If db ok, cache the stuff
if($cache) {
  $f->enableCache('db', 'mysql://'.$db['user'].':'.$db['psw'].'@'.$db['host'].'/'.$db['db'], 1200, 'cache_phpflickr');
}

// This is my Flickr NSID
$nsid = '29955877@N04';

// Set photoset ID
$photoset_id = $_GET['photoset'];

    // Get the friendly URL of the user's photos
    $photos_url = $f->urls_getUserPhotos($nsid);

    $photosets = $f->photosets_getList($nsid);
    foreach($photosets['photoset'] as $photoset) {
      if($photoset['id'] == $_GET['photoset'] || $photoset['id'] == 'latest') {
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
    
    if(!$_GET['photoset'] || $_GET['photoset'] == 'latest') {
      $display_photoset = FALSE;
      $photoarray = $my_photos['photos']['photo'];
    }
    else {
      $photoarray = array_reverse((array)$photos['photoset']['photo']);
      $display_photoset = TRUE;
      // Get the photoset primary img url & stuff

      $primary_photo = $f->photos_getInfo($photoset_info['primary'], 'url_m');
      $primary_photo_url = 'http://farm'.$primary_photo['farm'].'.static.flickr.com/'.$primary_photo['server'].'/'.$primary_photo['id'].'_'.$primary_photo['secret'].'_s.jpg';
      $photoset_url = $photos_url . 'sets/' . $photoset_info['id'];
    }
    
    
    // Loop through the photos and output the html
    foreach ($photoarray as $photo) {
        $phototitle = htmlspecialchars($photo[title]);
        $photourl = $f->buildPhotoURL($photo);
        
// link to flickrpage       $photocollague .= '<a href="' . $photos_url . $photo[id] . '" style="-webkit-transform: rotate('.rand(-5, 5).'deg)">';
        $photocollague .= '<a class="fancy" title="' . $phototitle . '" rel="group" href="'.$photourl.'" style="-webkit-transform: rotate('.rand(-5, 5).'deg)">';
        $photocollague .= '<img alt="' . $phototitle . '" src="' . $f->buildPhotoURL($photo, "Square") . '" />
';
        $photocollague .= '</a>';
    }
    
    if($display_photoset) {
      $set_img = '<a href="'.$photoset_url.'"><img src="'.$primary_photo_url.'" alt="" /></a>';
      $set_title = '<a href="'.$photoset_url .'" title="Go to Flickr photoset page">'.$photoset_info['title'].'</a>';
      $set_desc = $photoset_info['description'];
    }
    else {
      $set_img = '<a href="http://www.flickr.com/photos/kalak" title="Go to my Flickr photostream"><img src="http://farm4.static.flickr.com/3093/buddyicons/29955877@N04.jpg" alt="Kalak" /></a>';
      $set_title = 'Hi there!';
      $set_desc = 'Enjojy my latest photos from <a href="http://www.flickr.com/photos/kalak">flickr</a> below or choose a photoset from right.';
    }

?>