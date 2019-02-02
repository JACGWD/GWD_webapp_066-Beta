<?php require ($_SERVER["DOCUMENT_ROOT"]."/w15_eportfolio/girouard_eric/_web_app/config.php");

// Old School SEO
$title="sample title";

$description="sample description";

// Google+ Schema.org
$itempropName = NULL;
                
$itempropDescription = NULL;
        
$itempropImageURL = NULL;
            
// Twitter Cards  metadata	    
$TwitterCardType = NULL;
        
$TwitterPageTitle = NULL;
        
$TwitterPageDescription = NULL;
                
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

$ExtraHeaderCode = '<script src="/w15_eportfolio/girouard_eric/_web_app/theme/js/swfobject_modified.js" type="text/javascript"></script>';

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderTitle = NULL;
$HeaderSubtitle = NULL;


$Highlight_Menu_item = "home";

$h1 = "The template supports Flash.";

$raw_main_content = '<h2>Flashy Stuff</h2> <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="200" height="130">
  <param name="movie" value="/w15_eportfolio/girouard_eric/media/swf/gallop.swf">
  <param name="quality" value="high">
  <param name="wmode" value="opaque">
  <param name="swfversion" value="10.1.0.0">
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="/w15_eportfolio/girouard_eric/media/swf/expressInstall.swf">
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="/w15_eportfolio/girouard_eric/media/swf/gallop.swf" width="200" height="130">
    <!--<![endif]-->
    <param name="quality" value="high">
    <param name="wmode" value="opaque">
    <param name="swfversion" value="10.1.0.0">
    <param name="expressinstall" value="/w15_eportfolio/girouard_eric/media/swf/expressInstall.swf">
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
    </div>
    <!--[if !IE]>-->
  </object>
  <!--<![endif]-->
</object>
'; 

$raw_custom_sidebar = NULL;

$ExtraFooterCode = '<script type="text/javascript">swfobject.registerObject("FlashID");</script>';
  
require ($templates_folder."page.php");
 
?>