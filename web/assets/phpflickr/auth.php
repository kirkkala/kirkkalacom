<?php
    /* Last updated with phpFlickr 2.3.2
     *
     * Edit these variables to reflect the values you need. $default_redirect 
     * and $permissions are only important if you are linking here instead of
     * using phpFlickr::auth() from another page or if you set the remember_uri
     * argument to false.
     */
    $api_key                 = "7013b7ebe9525e7f63fcb8dd86a82969";
    $api_secret              = "82f06887c95d3fcd";
    $default_redirect        = "/";
    $permissions             = "read";
    $path_to_phpFlickr_class = "./";

    ob_start();
    require_once($path_to_phpFlickr_class . "phpFlickr.php");
    @unset($_SESSION['phpFlickr_auth_token']);
     
	if ( isset($_SESSION['phpFlickr_auth_redirect']) && !empty($_SESSION['phpFlickr_auth_redirect']) ) {
		$redirect = $_SESSION['phpFlickr_auth_redirect'];
		unset($_SESSION['phpFlickr_auth_redirect']);
	}
    
    $f = new phpFlickr($api_key, $api_secret);
 
    if (empty($_GET['frob'])) {
        $f->auth($permissions, false);
    } else {
        $f->auth_getToken($_GET['frob']);
	}
    
    if (empty($redirect)) {
		header("Location: " . $default_redirect);
    } else {
		header("Location: " . $redirect);
    }
 
?>