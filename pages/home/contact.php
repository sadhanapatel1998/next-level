<!-- start: Contact Section -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$messageStatus = ""; // Feedback message for UI

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Capture form fields
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $phone = trim($_POST['phone']);
  $subject = trim($_POST['subject']);
  $msg = trim($_POST['message']);

  // Validation
  if (!$name || !$email || !$phone || !$subject || !$msg) {
    $messageStatus = "<div class='alert alert-danger'>Please fill all required fields.</div>";
  } else {

    $mail = new PHPMailer(true);

    try {

      // SMTP config
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'shivampal.hovermedia@gmail.com';
      $mail->Password = 'fhltoiupggjbnzeg';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port = 465;

      // Email headers
      $mail->setFrom('info@nxtlevel.nz', 'Website Contact Form');
      $mail->addAddress('info@nxtlevel.nz');

      $mail->isHTML(true);
      $mail->Subject = "New Contact Form Submission: $subject";

      // Email body
      $mail->Body = "
        <h2>New Contact Form Message</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong><br>$msg</p>
      ";

      $mail->send();
      echo "<script>
        alert('Your message has been sent successfully!');
        window.location.href = window.location.href;
      </script>";
      exit;

      header("Location: thank-you.php");
      exit;


    } catch (Exception $e) {
      $messageStatus = "<div class='alert alert-danger'>Message could not be sent. Error: {$mail->ErrorInfo}</div>";
    }
  }
}
?>


<section class="tj-contact-section section-gap section-gap-x">
  <div class="container">
    <div class="row">

      <div class="col-lg-6">
        <div class="global-map wow fadeInUp" data-wow-delay=".3s">
          <div class="global-map-img">
            <img src="assets/images/bg/map.svg" alt="Image">
            <div class="location-indicator loc-1">
              <div class="location-tooltip">
                <span>Head office:</span>
                <p>
                  15 Fourth Avenue, Kingsland, Auckland 1021, New Zealand</p>

              </div>
            </div>
            <div class="location-indicator loc-2">
              <div class="location-tooltip">
                <span>India — Ahmedabad:</span>
                <p>Titanium City Center, Satellite,
                  Ahmedabad, Gujarat 380015, India</p>

              </div>
            </div>
            <div class="location-indicator loc-3">
              <div class="location-tooltip">
                <span>India — Nashik:</span>
                <p>Vedant Plaza, Tidke Colony,
                  Nashik, Maharashtra 422002, India</p>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">

          <div class="sec-heading">
            <span class="sub-title text-white"><i class="tji-box"></i>Get in Touch</span>
            <h3 class="sec-title title-anim white-with-bg mb-3"> Let's Build <span>Something Great</span></h3>
          </div>

          <!-- SUCCESS / ERROR MESSAGE -->


          <form method="post" action="">
            <div class="row wow fadeInUp" data-wow-delay=".5s">

              <div class="col-sm-6">
                <div class="form-input">
                  <input type="text" name="name" placeholder="Full Name *" required>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="form-input">
                  <input type="email" name="email" placeholder="Email Address *" required>
                </div>
              </div>

              <div class="col-sm-6 country-code-phone">
                <div class="form-input">
                 <input type="tel" id="cfPhone" name="cfPhone" placeholder=" " required>             
                </div>
              </div>

              <!-- Select -->
              <div class="col-sm-6">
                <div class="form-input">
                  <div class="tj-nice-select-box">
                    <div class="tj-select">
                      <select name="subject" required>
                        <option value="" disabled selected hidden>
                          Select a Service
                        </option>
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

              <!-- Message -->
              <div class="col-sm-12">
                <div class="form-input message-input">
                  <textarea name="message" placeholder="Type your message *" required></textarea>
                </div>
              </div>

              <div class="submit-btn">
                <button class="tj-primary-btn" type="submit">
                  <span class="btn-text"><span>Send Message</span></span>
                  <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                </button>
              </div>

            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</section>
<!-- end: Contact Section -->