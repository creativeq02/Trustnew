<?php

	$url = "/trustpower-php/";

//This uses the URI which was given in order to access this page; for instance, '/index.html'. 
	switch ($_SERVER["REQUEST_URI"]) {
		case $url . "page1.php":
			$CURRENT_PAGE = "Page1"; 
			$PAGE_TITLE = "Page 1";
			break;
		case $url . "page2.php":
			$CURRENT_PAGE = "Page2"; 
			$PAGE_TITLE = "Page 2";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Home Page";
	}
?>