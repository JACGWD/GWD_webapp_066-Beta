<?php require ($_SERVER["DOCUMENT_ROOT"]."/w15_eportfolio/girouard_eric/_web_app/config.php");

// Old School SEO
$title="A long interesting meta title";

$description="160 characters of a sample description";

// Google+ Schema.org
$itempropName = 'A title suitable for sharing on Google+';
                
$itempropDescription = 'A longer description for Google+';
        
$itempropImageURL = 'http://eportfolio.pdht.ca/w15_eportfolio/girouard_eric/media/content_images/thumbnails/sample_1200.jpg';
            
// Twitter Cards  metadata	    
$TwitterCardType = "photo";
        
$TwitterPageTitle = "A page title formatted for Twitter";
        
$TwitterPageDescription = "Sample description of something very cool I designed";
                
$TwitterImageURL = 'http://eportfolio.pdht.ca/w15_eportfolio/girouard_eric/media/content_images/thumbnails/sample_400.jpg';

// Facebook OpenGraph metadata
$OgTitle = 'A title suitable for sharing on Facebook';
        
$OgType = 'website';
                
$OgImage = 'http://eportfolio.pdht.ca/w15_eportfolio/girouard_eric/media/content_images/thumbnails/sample_1200.jpg';
        
$OgDescription = "sample description of something very cool formatted for Facebook";
        
$OgSiteName = "Eric Girouard's sample eportfolio demo page";
        
$OgSection = 'home'; 
        
$OgArticleTag0 = 'graphic design';  
$OgArticleTag1 = 'web design';  
$OgArticleTag2 = 'photography';  
$OgArticleTag3 = 'SEO';  
// End SEO + Social

$ExtraHeaderCode = '<script>Extra code can be inserted here</script>';

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderTitle = NULL;
$HeaderSubtitle = NULL;

$Highlight_Menu_item = "home";

$h1 = "H1 title goes here";

$raw_main_content = '<h2>Responsive Design &amp; Mobile First</h2>
		<p>This website was designed using <a href="http://responsivedesign.ca/blog/responsive-web-design-what-is-it-and-why-should-i-care" target="_blank">Responsive Design</a> techniques which allows it to look great on all types of devices. </p>
        <p>It is also created for <a href="http://www.lukew.com/resources/mobile_first.asp" target="_blank">mobile first</a> which means it will be designed for small devices using the fewer amounts of elements possible. Other items will be added to make it look great on larger screens.</p>'; 
		
	

$raw_custom_sidebar = 'Hello world';

$ExtraFooterCode = '<script>Extra code can be inserted here</script>';
  
require ($templates_folder."page.php");
 
?>