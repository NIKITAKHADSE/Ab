<?php $title='Experience | ABSSOLUTE HOMTEL'; include 'includes/header.php'; ?>
<section class="page-hero"><p class="eyebrow">The ABSSOLUTE experience</p><h1>Live comfortably, at your own pace</h1><p>A calm, practical setting for the many reasons that bring you to Pune.</p></section>
<nav class="experience-nav" aria-label="Experience page sections">
    <span>Experience</span>
    <div>
        <a href="#overview">The ABSSOLUTE<br>experience</a>
        <a href="#amenities">Amenities</a>
        <a href="#business-stays">Business stays</a>
        <a href="#long-stays">Long stays</a>
        <a href="#family-stays">Family stays</a>
    </div>
</nav>
<section class="experience-intro reveal" id="overview">
    <div class="experience-intro-visual" role="img" aria-label="Concept image of a comfortable serviced apartment"><span>Concept residence</span></div>
    <div class="experience-intro-copy">
        <p class="eyebrow">Designed around you</p>
        <h2>Stay well.<br>Live naturally.</h2>
        <p>Spaces that work around real routines&mdash;from focused weekdays to slow family mornings and longer stays that begin to feel like home.</p>
        <div class="intro-details"><span><b>01</b>Comfort</span><span><b>02</b>Freedom</span><span><b>03</b>Ease</span></div>
        <a class="text-link" href="#amenities">Explore the experience <span aria-hidden="true">&darr;</span></a>
    </div>
</section>
<section class="experience-cards" aria-label="Stay experiences">
    <?php foreach([
        ['Amenities','Everyday essentials','Thoughtful comforts support your daily rhythm, with verified amenity details available directly from our team.','amenities'],
        ['Business stays','Work, then unwind','A flexible Pune base that gives professional visits a more comfortable pace.','business-stays'],
        ['Long stays','Settle in for longer','More room, more independence and a place that feels familiar as the days unfold.','long-stays'],
        ['Family stays','Space to be together','Comfortable shared spaces and the freedom to make family time feel entirely your own.','family-stays']
    ] as $i=>$item): ?>
    <article class="experience-card experience-card-<?=$i+1?> reveal" id="<?=$item[3]?>">
        <div class="experience-card-image" role="img" aria-label="Concept image for <?=$item[0]?>"><span>0<?=$i+1?></span><small>Concept image</small></div>
        <div class="experience-card-copy"><p class="eyebrow"><?=$item[0]?></p><h2><?=$item[1]?></h2><p><?=$item[2]?></p><a class="text-link" href="booking.php">Plan your stay <span aria-hidden="true">&rarr;</span></a></div>
    </article>
    <?php endforeach; ?>
</section>
<section class="experience-cta reveal"><div><p class="eyebrow">Your stay, your way</p><h2>Tell us what would make your visit feel right.</h2></div><a class="button" href="booking.php">Start an enquiry</a></section>
<?php include 'includes/footer.php'; ?>
