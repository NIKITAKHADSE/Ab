# ABSSOLUTE HOMTEL Website

Hostinger-compatible PHP 8 / MySQL website. This is a booking **enquiry** flow, not a live reservation system.

## Deploy on Hostinger

1. Extract the ZIP and upload the contents of `ABSSOLUTE-HOMTEL-WEBSITE` to `public_html`.
2. In Hostinger, create a MySQL database and user.
3. Import `database/schema.sql` using phpMyAdmin.
4. Copy `config/config.example.php` to `config/config.php`, then enter the database host, name, user and password.
5. Point the domain to Hostinger and enable the free SSL certificate. Force HTTPS in Hostinger's dashboard.
6. Replace all labelled image, contact, amenity, location and property-detail placeholders with verified information before launch.
7. If email notifications are needed, configure an authenticated SMTP mailer supported by the hosting account. Database storage works independently of email.
8. Test contact and booking forms, dates, mobile navigation, keyboard access and every page on the live domain.

## Administration

Enquiries are stored in `booking_enquiries` and `contact_enquiries`. Review them securely through Hostinger phpMyAdmin or build a password-protected admin panel before allowing staff access. Do not expose phpMyAdmin publicly without Hostinger authentication.

## Content still required

- Original property photographs
- Verified phone, WhatsApp, email and complete address
- Verified room sizes, occupancy, amenities and facilities
- Genuine guest reviews
- Confirmed nearby destinations and map embed

No prices, reviews, availability, room specifications or contact details have been invented.

