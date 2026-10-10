<?php $title='Contact | ABSSOLUTE HOMTEL'; include 'includes/header.php'; ?>
<section class="page-hero"><p class="eyebrow">Contact</p><h1>Let&rsquo;s plan your stay</h1><p>Verified phone, WhatsApp, email, address and map details must be added in place of the clearly marked placeholders.</p></section>
<section class="split contact-section">
    <div class="contact-details"><h2>Contact details</h2><p class="notice">Contact information awaiting verification.</p><h3>Location</h3><p>Aundh, Pune, Maharashtra, India</p><div class="placeholder map">Google Maps embed to be added after address verification</div></div>
    <form action="api/contact-submit.php" method="post" data-ajax><h2>Send an enquiry</h2><input type="hidden" name="csrf" value="<?=e(csrf_token())?>"><label>Full name<input name="name" required maxlength="100"></label><label>Email<input type="email" name="email" required maxlength="190"></label><label>Mobile number<input type="tel" name="phone" maxlength="30"></label><label>Message<textarea name="message" required maxlength="2000"></textarea></label><label class="honeypot">Leave empty<input name="website" tabindex="-1" autocomplete="off"></label><button class="button" type="submit">Send enquiry</button><p class="form-status" role="status"></p></form>
</section>
<?php include 'includes/footer.php'; ?>
