<?php

	$url = "/trustpower-php/";

//This uses the URI which was given in order to access this page; for instance, '/index.html'. 
	switch ($_SERVER["REQUEST_URI"]) {
		case $url . "chair-ceo.php":
			$CURRENT_PAGE = "Chair-CEO"; 
			$PAGE_TITLE = "Chair CEO";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "environment.php":
			$CURRENT_PAGE = "Environment"; 
			$PAGE_TITLE = "Environment";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "highlights.php":
			$CURRENT_PAGE = "Highlights"; 
			$PAGE_TITLE = "Highlights";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "leaders.php":
			$CURRENT_PAGE = "Leaders"; 
			$PAGE_TITLE = "Leaders";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "our-assets-infrastructure.php":
			$CURRENT_PAGE = "Our-Assets-Infrastructure"; 
			$PAGE_TITLE = "Our Assets Infrastructure";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "our-environment.php":
			$CURRENT_PAGE = "Our-Environment"; 
			$PAGE_TITLE = "Our Environment";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "our-finacials.php":
			$CURRENT_PAGE = "Our-Finacials"; 
			$PAGE_TITLE = "Our Finacials";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "our-people.php":
			$CURRENT_PAGE = "Our-People"; 
			$PAGE_TITLE = "Our People";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "our-relationships.php":
			$CURRENT_PAGE = "Our-Relationships"; 
			$PAGE_TITLE = "Our Relationships";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "people.php":
			$CURRENT_PAGE = "People"; 
			$PAGE_TITLE = "People";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		case $url . "waipori.php":
			$CURRENT_PAGE = "Waipori"; 
			$PAGE_TITLE = "Waipori";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Home Page";
			$PAGE_DESCRIPTION = "";
			$PAGE_KEYWORDS = "";
	}
?>