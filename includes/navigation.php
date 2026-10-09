<?php $currentPage = basename($_SERVER['PHP_SELF']); $navItems = ['index.php'=>'Home','stay.php'=>'Stay','experience.php'=>'Experience','gallery.php'=>'Gallery','about.php'=>'About','contact.php'=>'Contact']; ?>
<nav id="nav" aria-label="Main navigation"><?php foreach ($navItems as $href=>$label): ?><a href="<?=$href?>" <?=$currentPage===$href?'aria-current="page"':''?>><?=$label?></a><?php endforeach; ?><a class="button" href="booking.php" <?=$currentPage==='booking.php'?'aria-current="page"':''?>>Book Your Stay</a></nav>

