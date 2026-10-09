<?php $title='Stay | ABSSOLUTE HOMTEL'; include 'includes/header.php'; ?>
<section class="page-hero"><p class="eyebrow">Stay</p><h1>Find your space in Aundh</h1><p>Explore room and apartment categories. Sizes, occupancy and facilities are shown only when verified.</p></section><section><div class="grid two"><?php foreach(['studio'=>'Studio Deluxe','premium'=>'Premium Room','suite'=>'2BHK Suite','long'=>'Long Stay'] as $slug=>$name): ?><article class="card"><div class="image tall">Original property image</div><h2><?=$name?></h2><p>A comfortable option for your Pune stay. Please enquire for verified specifications and availability.</p><a class="button" href="room.php?type=<?=$slug?>">View Details</a></article><?php endforeach; ?></div></section>
<?php include 'includes/footer.php'; ?>

