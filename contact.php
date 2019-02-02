<?php require ($_SERVER["DOCUMENT_ROOT"]."/w15_eportfolio/girouard_eric/_web_app/config.php");

// Old School SEO
$title="Contact John Smith";

$description="Contact form for reaching John Smith, yada yada yada";

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

$ExtraHeaderCode = NULL;

$Highlight_Menu_item="contact";

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderTitle = NULL;
$HeaderSubtitle = NULL;

$h1 = "Contact Me";

$raw_main_content = '<form action="contact/sendmail.php" method="post">
<label for="tswname">Name</label>
<input type="text" name="fullname" id="tswname" size="25" />
<label for="tswemail">Email address</label>
<input type="text" id="tswemail" name="email" size="25" />

<label for="tswcomments">Comments</label>
<textarea rows="15" cols="45" name="comments" id="tswcomments"></textarea>

<script type="text/javascript" src="http://api.recaptcha.net/challenge?k=6LdW5cASAAAAAIPykq9o9qTciBFc6L85XgLV1Mks"></script>
<noscript>
<iframe src="http://api.recaptcha.net/noscript?k=6LdW5cASAAAAAIPykq9o9qTciBFc6L85XgLV1Mks" height="300" width="500" frameborder="0" title="CAPTCHA test"></iframe>

<label for="tswcaptcha">Copy and paste the code provided in above box here:</label>
<textarea name="recaptcha_challenge_field" id="tswcaptcha" rows="3" cols="40"></textarea>
<input type="hidden" name="recaptcha_response_field" value="manual_challenge" />
</noscript>

<input type="submit" value="Send Feedback" />
</form>

';

$raw_custom_sidebar = NULL;

$ExtraFooterCode = NULL;

require ($templates_folder."page.php");

?>
