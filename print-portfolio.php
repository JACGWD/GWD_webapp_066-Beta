<?php require ($_SERVER["DOCUMENT_ROOT"]."/w15_eportfolio/girouard_eric/_web_app/config.php");

// Old School SEO
$title="Print Portfolio";

$description="sample description";

// Google+ Schema.org
$itempropName = NULL;
                
$itempropDescription = NULL;
        
$itempropImageURL = NULL;
            
// Twitter Cards  metadata	    
$TwitterCardType = 'gallery';
// Portfolio category pages should be set to the GALLERY Twitter Card type
$TwitterGalleryImage0 = NULL;   
$TwitterGalleryImage1 = NULL;  
$TwitterGalleryImage2 = NULL;  
$TwitterGalleryImage3 = NULL;
        
$TwitterPageTitle = "Print Portfolio";
        
$TwitterPageDescription = "sample description";
                
$TwitterImageURL = NULL;

// Facebook OpenGraph metadata
$OgTitle = NULL;
        
$OgType = NULL;
                
$OgImage = NULL;
        
$OgDescription = NULL;
        
$OgSiteName = NULL;
        
$OgSection = NULL; 
        
$OgArticleTag0 = NULL;  
$OgArticleTag1 = NULL;  
$OgArticleTag2 = NULL;  
$OgArticleTag3 = NULL;  
// End SEO + Social

$ExtraHeaderCode = NULL;

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderTitle = NULL;
$HeaderSubtitle = NULL;

$Highlight_Menu_item="PrintPortfolio";

$h1 = "Print Portfolio";

$raw_top_main_content = '<p>HTML content above the thumbnails goes here.</p>'; 

$ThumbFigureClass = NULL;

$thumbnails = array
  (
array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.jpg",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.jpg 400w",
		'thumb_image_1.5x' => "sample_600.jpg 600w",
		'thumb_image_2x' => "sample_800.jpg 800w",
		'thumb_image_3x' => "sample_1200.jpg 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/w15_eportfolio/girouard_eric/portfolio/print/business-card.php"), 
		
  
array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.jpg",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.jpg 400w",
		'thumb_image_1.5x' => "sample_600.jpg 600w",
		'thumb_image_2x' => "sample_800.jpg 800w",
		'thumb_image_3x' => "sample_1200.jpg 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/w15_eportfolio/girouard_eric/portfolio/print/business-card.php"), 
  
array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.jpg",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.jpg 400w",
		'thumb_image_1.5x' => "sample_600.jpg 600w",
		'thumb_image_2x' => "sample_800.jpg 800w",
		'thumb_image_3x' => "sample_1200.jpg 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/w15_eportfolio/girouard_eric/portfolio/print/business-card.php"), 
  
array (
		'thumb_css_class' => NULL,   // Add a CSS class to a specific thumbnail <figure> tag.
		'thumb_image_default' => "sample_400.jpg",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "sample_400.jpg 400w",
		'thumb_image_1.5x' => "sample_600.jpg 600w",
		'thumb_image_2x' => "sample_800.jpg 800w",
		'thumb_image_3x' => "sample_1200.jpg 1200w",
		'thumb_sizes' => NULL,
		// Leave NULL to use default values from config.php
  		'thumb_alt' => "This is good alt text",
		'thumb_caption' => "Business card 1 designed for Acme Inc",
		'highres_link' => "/w15_eportfolio/girouard_eric/portfolio/print/business-card.php"), 
		);

$raw_bottom_main_content = '<p>HTML content below the thumbnails goes here.</p>'; 

$raw_custom_sidebar = NULL;

$ExtraFooterCode = NULL;


require ($templates_folder."thumbnails.php");
?>