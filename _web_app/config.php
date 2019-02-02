<?php
// *************   START CONFIGURABLE SECTION  *************** //


// *************   PHP ERROR REPORTING  *************** //

error_reporting(E_ALL);
ini_set('display_errors', 1);
// DELETE THE ABOVE TWO LINES WHEN THE WEB SITE IS FINISHED

// *************   END PHP ERROR REPORTING  *************** //







// *************   DEFAULT FOLDERS SECTION  *************** //


$currentYearFolder = "/w15_eportfolio/"; // $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
$studentFolder = "girouard_eric/"; // lastname_firstname (all lowercase), with trailing slash
$student = "Eric Girouard"; // When we need to print your name on a page, such as in the footer
$theme = "default"; // Add the name of the chosen theme folder in _web_app/theme/

// set your student folder & name above
// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server name, such as http://eportfolio.pdht.ca

// *************   END DEFAULT FOLDERS SECTION  *************** //






// *************   <HEADER> TAG SECTION  *************** //


$DefaultHeaderTitle = $student;
// Set the DEFAULT text inside the <header> tag to your name. You can customize per page on each page. Add text inside quotation marks.

$DefaultHeaderSubtitle = "Graphic &amp; Web Designer";
// Set the DEFAULT subtitle text inside the <header> tag. You can customize per page on each page.

$Enable_Normalize = FALSE;
// By default, we use the simple-css-reset.css (based on Eric Meyer's reset v2.0).
// Default is FALSE.
// If you want to use Nicolas Gallagher's normalize.css (an industry standard, but less beginner-friendly) set to TRUE.

// *************   END <HEADER> TAG SECTION  *************** //





// *************   DEFAULT IMAGES PROPERTIES  *************** //


$default_thumb_sizes = "(max-width: 64em) 100vw, (min-width: 64em) 45vw, (min-width: 100em) 30vw";
// Set the DEFAULT size of your THUMBNAILS here.
// The srcset sizes attribute uses media queries and "vm" units (percentages of the width of the viewport, ie entire screen).
// Adjust accordingly.


$default_highres_sizes = "(max-width: 64em) 100vw, (min-width: 64em) 80vw, (min-width: 100em) 50vw";
// Set the DEFAULT size of your HIGH RESOLUTION images here
// The srcset sizes attribute uses media queries and "vm" units (percentages of the width of the viewport, ie entire screen).
// Adjust accordingly.

// *************  END DEFAULT IMAGES PROPERTIES  *************** //





// *************   SOCIAL MEDIA PROFILES AND PAGES SECTION  *************** //


$FacebookProfile = NULL;
// Add the username of your personal Facebook profile
// ie ericgirouard3

$FacebookID = NULL;
// Add the ID number of your personal Facebook account
// Use: http://findmyfacebookid.com/

$FacebookPage = NULL;
// Add the title of your Facebook PAGE
// ie heliomedia

$GooglePlusProfile = NULL;
// Add your Google+ name
// ie +EricGirouard

$TwitterHandle = NULL;
// Add your Twitter name
// ie @eric_girouard


// *************   END SOCIAL MEDIA PROFILES AND PAGES SECTION  *************** //






// *************   EMAIL SECTION  *************** //

$mailto = 'ericg@johnabbott.qc.ca' ;
$subject = "Comment from eportfolio Visitor" ;
$formurl = $currentYearFolder . $studentFolder ."contact.php" ;
$thankyouurl = $currentYearFolder . $studentFolder ."contact/thank-you.php" ;
$errorurl = $currentYearFolder . $studentFolder ."contact/error.php" ;

// *************   END EMAIL SECTION  *************** //







// *************   END CONFIGURABLE SECTION  *************** //












// *************   DO NOT EDIT BELOW THIS LINE  *************** //

// Set the paths to the folders

$MyPortfolio = $_SERVER["DOCUMENT_ROOT"].$currentYearFolder. $studentFolder;

$templates_folder = $MyPortfolio."_web_app/theme/" . $theme . "/templates/";
$includes_folder = $MyPortfolio."_web_app/theme/" . $theme . "/inc/";

$highres_folder = $currentYearFolder. $studentFolder."media/content_images/highres/";

$thumb_folder = $currentYearFolder. $studentFolder."media/content_images/thumbnails/";

/**
     * Get the current Url taking into account Https and Port
     * @link http://css-tricks.com/snippets/php/get-current-page-url/
     * @version Refactored by @AlexParraSilva
*/
    function getCurrentUrl() {
        $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://' . $_SERVER['SERVER_NAME'];
        $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $url .= $_SERVER['REQUEST_URI'];
        return $url;
    }

$OgURL = getCurrentUrl();


	function getCurrentServer() {
		if(isset($_SERVER['HTTPS']))
		{$http_type = 'https://' . $_SERVER['HTTP_HOST'] . "/";}
		{$http_type = 'http://'. $_SERVER['HTTP_HOST'] . "/";}
		return $http_type
		;}

$CurrentServer = getCurrentServer();

?>
