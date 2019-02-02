<?php require ($_SERVER["DOCUMENT_ROOT"]."/w15_eportfolio/girouard_eric/_web_app/config.php");
// Fetch the configuration file

// Old School SEO
$title="Business Card";
// Set the SEO meta title


$description="sample description";
// Set the SEO meta description


// SOCIAL SEO

// ====== GOOGLE+ ===== //

// Google+ Schema.org
$itempropName = NULL;
// title attribute of the Google+ rich snippet and should be limited to 140 characters.
                
$itempropDescription = NULL;
// description of the Google+ rich snippet and should be limited to 185 characters
        
$itempropImageURL = NULL;
// image of the Google+ rich snippet with an optimal size is 180 x 120. Google+ will shrink this image, but if it is too small it will not be displayed.
            
// ====== TWITTER ===== //
// SEE: https://dev.twitter.com/cards/types/summary

// Twitter Cards metadata	    
$TwitterCardType = NULL;
// The Twitter card type. Your options are summary, summary_large_image, gallery, photo, app, product or player.
// Summary is the default.
        
$TwitterPageTitle = NULL;
// Title should be concise and will be truncated at 70 characters.
        
$TwitterPageDescription = NULL;
// A description that concisely summarizes the content of the page, as appropriate for presentation within a Tweet. 
// Do not re-use the title text as the description, or use this field to describe the general services provided by the website. 
// Description text will be truncated at the word to 200 characters.
                
$TwitterImageURL = NULL;
// URL to a unique image representing the content of the page. 
// Do not use a generic image such as your website logo, author photo, or other image that spans multiple pages. 
// The image must be a minimum size of 120px by 120




// ====== FACEBOOK ===== //
// SEE: https://developers.facebook.com/docs/sharing/best-practices

// Facebook OpenGraph metadata
$OgTitle = NULL;
// the title of the piece of content. You should use this as a headline that will appeal to the Facebook audience. 
// It is ok to use a title different than the one in <title> as long as the message is ultimately the same. 
// 95 characters max.
        
$OgType = NULL;
// the type of object your piece of content is. Usually be blog, website or article.
// will default to article
                
$OgImage = NULL;
// This is the image that Facebook will show in the screenshot of the content. 
// Be sure to specify a SQUARE IMAGE to ensure the best visibility in a user’s timeline.
        
$OgDescription = NULL;
// This is the description Facebook will show in the screenshot of the piece of content. 
// 297 characters max.
        

        
$OgSection = NULL; 
// The section of your website to which the article belongs, such as 'Lifestyle' or 'Sports'
// PDHT use should be 'web' or 'print' for example: $OgArticleTag0 = 'print';  
$OgArticleTag1 = NULL;  
$OgArticleTag2 = NULL;  
$OgArticleTag3 = NULL;  
// A list of keywords relevant to the article.// End SEO + Social

// End SEO + Social


$ExtraHeaderCode = NULL;
// If you need to add code to the <head> add it here inside single quotation marks: $ExtraHeaderCode = 'something';


$HeaderTitle = "Custom Title text goes here";
// Changes the default <header> tag first line text from your name to something else

$HeaderSubtitle = "Slogan";
// Changes the default <header> tag second line text from the default to something else

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically


$Highlight_Menu_item = NULL;
// Choose the parent menu item to highlight in the navigation bar


$BodyClass = NULL;
// Add class names you want added to the <body> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically


$MainClass = NULL;
// Add class names you want added to the <main> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically



$h1 = NULL;
// Text to be added to the H1 tag

$HighResFigureClass = NULL;
// Add an extra class name to the <figure> tag. In this case, the high res one in /_web_app/theme/templates/portfolio-item.php.

$highres_image_3x = "sample_1800.jpg 1800w";
$highres_image_2x = "sample_1200.jpg 1200w";
$highres_image_1_5x = "sample_900.jpg 900w";
$highres_image_1x = "sample_600.jpg 600w";
// srcset for modern browsers that understand the new code

$default_highres_image = "default_600.jpg";
// The image older browsers (that don't understand srcset) should use.

$custom_highres_sizes = NULL;
// Override the default sizes attribute of the image, if necessary.
// Leave blank to accept the default values from config.php

$highres_alt = "This is good alt text";
// Add alt text to the img tag.

$highres_figcaption = 'Business card "designed" for Acme Inc';
// Add the text to be added to the <figcaption> tag.




$previous = $CurrentServer . "w15_eportfolio/girouard_eric/portfolio/print/previous.php";
// Add a link to the previous image in the portfolio. 
// $CurrentServer ends with a /
// Syntax is: $CurrentServer (dot) "path/to/page.php";
// For example:  $CurrentServer . "portfolio/web/page.php";

$next = $CurrentServer . "w15_eportfolio/girouard_eric/portfolio/print/next.php";
// Add a link to the next image in the portfolio. 
// $CurrentServer ends with a /
// Syntax is: $CurrentServer (dot) "path/to/page.php";
// For example:  $CurrentServer . "portfolio/web/page.php";


$raw_custom_sidebar = NULL;
// If you need a custom sidebar, add the HTML here. The <aside> tag is automatically added.

$ExtraFooterCode = NULL;
// If you need to add code just before </body> add it here inside single quotation marks: $ExtraFooterCode = 'something';

require ($templates_folder."portfolio-item.php");
// Call the template last to insert the above values into it.

?>