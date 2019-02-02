<nav>
<a class="ir" id="menu" onclick="NavShow();">Navigation</a>		

<ul class="navigation">
      
<li><a href="<?php echo $currentYearFolder . $studentFolder ?>index.php" <?php if ($Highlight_Menu_item=="home") echo " class=\"currentpage\""; ?>>Home (Page template)</a></li>

<li><a href="<?php echo $currentYearFolder . $studentFolder ?>print-portfolio.php" <?php if ($Highlight_Menu_item=="print") echo " class=\"currentpage\""; ?>>Portfolio Category (Thumbnails template) Page</a></li>

<li><a href="<?php echo $currentYearFolder . $studentFolder ?>portfolio/print/business-card.php" <?php if ($Highlight_Menu_item=="print") echo " class=\"currentpage\""; ?>>Portfolio Detail (Portfolio item template) Page</a></li>

<li><a href="<?php echo $currentYearFolder . $studentFolder ?>contact.php" <?php if ($Highlight_Menu_item=="contact") echo " class=\"currentpage\""; ?>>Contact</a></li>
            
</ul>            
</nav>