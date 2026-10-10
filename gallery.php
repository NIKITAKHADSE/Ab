<?php $title='Gallery | ABSSOLUTE HOMTEL'; include 'includes/header.php'; ?>
<section class="page-hero"><p class="eyebrow">Gallery</p><h1>See the spaces</h1><p>Original property photographs can be added here without changing the gallery code.</p></section>
<section>
    <div class="filters" role="group" aria-label="Gallery filters">
        <button class="active" type="button" data-filter="all" aria-pressed="true">All</button>
        <button type="button" data-filter="room" aria-pressed="false">Rooms</button>
        <button type="button" data-filter="apartment" aria-pressed="false">Apartments</button>
        <button type="button" data-filter="property" aria-pressed="false">Property</button>
        <button type="button" data-filter="lifestyle" aria-pressed="false">Lifestyle</button>
    </div>
    <p class="gallery-status" aria-live="polite">Showing all 6 images</p>
    <div class="gallery-grid"><?php foreach(['room','apartment','property','lifestyle','room','property'] as $i=>$cat): ?><button type="button" class="gallery-item placeholder" data-category="<?=$cat?>" data-title="<?=ucfirst($cat)?> photo <?=$i+1?>" aria-label="Open <?=ucfirst($cat)?> photo <?=$i+1?>"><?=ucfirst($cat)?> photo <?=$i+1?></button><?php endforeach; ?></div>
</section>
<dialog id="lightbox"><button type="button" class="close" aria-label="Close">&times;</button><div class="lightbox-image" role="img" aria-label="Selected gallery image"></div><p class="lightbox-caption"></p></dialog>
<?php include 'includes/footer.php'; ?>
