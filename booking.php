<?php $title = 'Book Your Stay | ABSSOLUTE HOMTEL';
include 'includes/header.php';
$selected = $_GET['stay'] ?? ''; ?>
<section class="page-hero">
    <p class="eyebrow">Booking enquiry</p>
    <h1>Tell us about your stay</h1>
    <p>This form sends an enquiry; it does not confirm availability or a reservation.</p>
</section>
<section>
    <form class="booking-form" action="api/booking-submit.php" method="post"><input type="hidden" name="csrf" value="<?= e(csrf_token()) ?>">
        <fieldset>
            <legend>1. Choose your stay</legend><label>Accommodation<select name="stay_type" required>
                    <option value="">Select</option><?php foreach (['studio' => 'Studio Deluxe', 'premium' => 'Premium Room', 'suite' => '2BHK Suite', 'long' => 'Long Stay'] as $k => $v): ?><option value="<?= $k ?>" <?= $selected === $k ? 'selected' : '' ?>><?= $v ?></option><?php endforeach; ?>
                </select></label>
        </fieldset>
        <fieldset>
            <legend>2. Select dates</legend>
            <div class="grid three"><label>Check-in<input type="date" name="check_in" required min="<?= date('Y-m-d') ?>"></label><label>Check-out<input type="date" name="check_out" required min="<?= date('Y-m-d', strtotime('+1 day')) ?>"></label><label>Guests<input type="number" name="guests" min="1" max="20" value="1" required></label></div>
        </fieldset>
        <fieldset>
            <legend>3. Guest details</legend>
            <div class="grid two"><label>Full name<input name="name" maxlength="100" required></label><label>Email<input type="email" name="email" maxlength="190" required></label><label>Mobile number<input type="tel" name="phone" maxlength="30" required></label><label>Special requests<textarea name="requests" maxlength="2000"></textarea></label></div>
        </fieldset>
        <fieldset>
            <legend>4. Contact details</legend>
            <p>The property will use the details above to respond to your enquiry.</p>
        </fieldset><label class="honeypot">Leave empty<input name="website" tabindex="-1" autocomplete="off"></label><button class="button" type="submit">Submit booking enquiry</button>
    </form>
</section><?php include 'includes/footer.php'; ?>