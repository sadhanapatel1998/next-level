<?php
$pageTitle = "Home | NextLevel";
include 'config.php';
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$messageStatus = ""; // Feedback message for user

// Handle form submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = trim($_POST['cfName']);
  $email = trim($_POST['cfEmail']);
  $phone = trim($_POST['cfPhone']);
  $subject = trim($_POST['cfSubject']);
  $msg = trim($_POST['cfMessage']);

  // Validate required fields
  if (!$name || !$email || !$phone || $subject === "0" || !$msg) {
    $messageStatus = "<div class='alert alert-danger'>Please fill all required fields.</div>";
  } else {

    $mail = new PHPMailer(true);

    try {

      // SMTP settings
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'web.hoverbusinessservices@gmail.com';
      $mail->Password = 'zrtycnkdwjjgbybt';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 465;

      // Email headers
      $mail->setFrom('info@nxtlevel.nz', 'Website Contact Form');
      $mail->addAddress('info@nxtlevel.nz');  // Destination email

      // Email content
      $mail->isHTML(true);
      $mail->Subject = "New Contact Form Submission: $subject";

      $mail->Body = "
                <h2>New Contact Form Message</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Phone:</strong> $phone</p>
                <p><strong>Subject:</strong> $subject</p>
                <p><strong>Message:</strong><br>$msg</p>
            ";

      $mail->send();
      header("Location: thank-you.php");
      exit;
    } catch (Exception $e) {
      $messageStatus = "<div class='alert alert-danger'>Message could not be sent. Error: {$mail->ErrorInfo}</div>";
    }
  }
}
?>


<div class="top-space-15"></div>

<!-- Breadcrumb Section -->
<section class="con-page-header section-gap-x" data-bg-image="assets/images/about/contact.png">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <div class="con-page-header-content text-left">
          <div class="tj-page-link">
            <span><i class="tji-home"></i></span>
            <span><a href="index.php">Home</a></span>
            <span><i class="tji-arrow-right"></i></span>
            <span>Contact Us</span>
          </div>
        </div>

        <h2 class="tj-page-title mt-2"><b>We’re Ready to Assist</b></h2>

      </div>
    </div>
  </div>
  <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.png"></div>
</section>


<!-- Contact Section -->
<section class="tj-contact-section-2 section-bottom-gap mt-5">
  <div class="container">
    <div class="row align-items-stretch">

      <!-- Contact Form -->
      <div class="col-lg-6">
        <div class="contact-form wow fadeInUp" data-wow-delay=".1s">
          <h3 class="title">Feel Free to Get in Touch or Visit Our Offices</h3>

          <!-- Show success/error message -->
          <?php if ($messageStatus)
            echo $messageStatus; ?>

          <form id="contactForm" method="POST" action="">
            <div class="row">

              <div class="col-sm-6">
                <div class="form-input">
                  <input type="text" name="cfName" placeholder=" " required>
                  <label class="cf-label">Full Name <span>*</span></label>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-input">
                  <input type="email" name="cfEmail" placeholder=" " required>
                  <label class="cf-label">Email Address <span>*</span></label>
                </div>
              </div>
              <!-- 
              <div class="col-sm-6">
                <div class="form-input country-code-phone">
                  <div style="display:flex;">
                    <select id="countryCode" style="width:20px;">
                      <option value="+91">🇮🇳 +91</option>
                      <option value="+1">🇺🇸 +1</option>
                      <option value="+44">🇬🇧 +44</option>
                      <option value="+971">🇦🇪 +971</option>
                    </select>
                    <div>
                      <input type="tel" name="cfPhone" placeholder=" " required>
                      <label class="cf-label">Phone Number <span>*</span></label>
                    </div>
                  </div>
                </div>
              </div> -->

              <div class="col-sm-6 country-code-phone">
                <div class="form-input ">
                  <input type="tel" id="cfPhone" name="cfPhone" placeholder=" " required>
                  <!-- <label class="cf-label">Phone Number <span>*</span></label> -->
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-input">
                  <div class="tj-nice-select-box">
                    <div class="tj-select">
                      <select name="cfSubject" required>
                        <option value="Back-office Support">Back-office Support</option>
                        <option value="Shared Services">Shared Services</option>
                        <option value="Partnered Support Model">Partnered Support Model</option>
                        <option value="Digital Channel Partners">Digital Channel Partners</option>
                        <option value="App & Website Development">App & Website Development</option>
                        <!-- <option value="Creative Communication"> Creative Communication</option> -->
                        <option value="SEO Service"> SEO Service</option>
                        <option value="Social Media"> Social Media</option>
                        <option value="Operational Strategy"> Operational Strategy</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="form-input message-input">
                  <textarea name="cfMessage" placeholder=" " required></textarea>
                  <label class="cf-label">Your Message <span>*</span></label>
                </div>
              </div>

              <div class="submit-btn mt-3">
                <button class="tj-primary-btn" type="submit">
                  <span class="btn-text"><span>Submit Now</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </button>
              </div>
            </div>
          </form>

        </div>
      </div>

      <!-- Contact Details -->
      <div class="col-lg-6">
        <div class="contact-details-box wow fadeInUp" data-wow-delay=".3s"
          style="background-image: url(assets/images/about/conbg.jpg);">
          <div class="details-inner">

            <h3 class="details-title text-white">Our Offices</h3>

            <ul class="details-list">
              <li>
                <h4>Head Office – New Zealand</h4>
                <p>47 Union St, Auckland CBD, New Zealand 1010</p>
              </li>

              <!-- <li>
                <h4>India Office – Ahmedabad</h4>
                <p> Prahlad Nagar Trade Center, Satalite, Ahmedabad, Gujarat 380015, India </p>

              </li> -->

              <!-- <li>
                <h4>India Office – Nashik</h4>
                <p> Vedant Plaza, Tidke Colony, Nashik, Maharashtra 422002, India</p>
              </li> -->

              <li>
                <h4>Company Email</h4>
                <p><a href="mailto:info@nxtlevel.nz">info@nxtlevel.nz</a></p>
              </li>

              <li>
                <h4>Company Contact</h4>
                <p><a href="tel:+64204504050">+64 20 450 4050</a></p>
              </li>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>



<?php
$content = ob_get_clean();
include 'layout.php';
?>