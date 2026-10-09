<?php $title='Enquiry Received | ABSSOLUTE HOMTEL'; include 'includes/header.php'; $ref=$_GET['ref']??''; ?>
<section class="page-hero"><p class="eyebrow">Booking enquiry</p><h1>Thank you</h1><?php if($ref): ?><p>Your enquiry reference is <strong><?=e($ref)?></strong>.</p><p>This acknowledges your enquiry only. Your stay is not confirmed until the property contacts you.</p><?php else: ?><p>No enquiry reference was provided.</p><?php endif; ?><a class="button" href="index.php">Return home</a></section><?php include 'includes/footer.php'; ?>

