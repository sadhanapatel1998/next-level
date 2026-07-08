<?php
$pageTitle = "Careers | NXT Level";
include 'config.php';
ob_start();



$pageTitle = "Home | NextLevel";
include 'config.php';
ob_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$messageStatus = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['full_name']);
    $education = trim($_POST['education']);
    $experience = trim($_POST['experience']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if (empty($name) || empty($education) || empty($email)) {

        $messageStatus = '
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            Please fill all required fields.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>';

    } else {

        $mail = new PHPMailer(true);

        try {

            // SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'web.hoverbusinessservices@gmail.com';
            $mail->Password = 'zrtycnkdwjjgbybt';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Sender
            $mail->setFrom('info@nxtlevel.nz', 'NXT Level Careers');

            // Receiver
            $mail->addAddress('info@nxtlevel.nz');

            // Reply To
            $mail->addReplyTo($email, $name);

            // Mail
            $mail->isHTML(true);

            $mail->Subject = "New Career Application - " . $name;

            $mail->Body = "

            <h2>New Career Application</h2>

            <table border='1' cellpadding='10' cellspacing='0' width='100%'>

                <tr>
                    <td><strong>Full Name</strong></td>
                    <td>{$name}</td>
                </tr>

                <tr>
                    <td><strong>Email</strong></td>
                    <td>{$email}</td>
                </tr>

                <tr>
                    <td><strong>Education</strong></td>
                    <td>{$education}</td>
                </tr>

                <tr>
                    <td><strong>Experience</strong></td>
                    <td>{$experience}</td>
                </tr>

                <tr>
                    <td><strong>Message</strong></td>
                    <td>{$message}</td>
                </tr>

            </table>

            ";

            $mail->send();

            $messageStatus = '
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your application has been submitted successfully.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';

            // Clear form
            $_POST = [];

        } catch (Exception $e) {

            $messageStatus = '
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Unable to submit your application.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>';

        }

    }

}
?>


<div class="top-space-15"></div>

<!-- start: Breadcrumb Section -->
<section class="con-page-header section-gap-x" data-bg-image="assets/images/bg/services.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="con-page-header-content text-left">

                    <div class="tj-page-link">
                        <span><i class="tji-home"></i></span>
                        <span><a href="index.php">Home</a></span>
                        <span><i class="tji-arrow-right"></i></span>
                        <span><span>Careers</span></span>
                    </div>

                </div>

                <h2 class="tj-page-title mt-2">
                    <b>Build Your Career at NXT Level</b>
                </h2>

            </div>
        </div>
    </div>
    <div class="page-header-overlay" data-bg-image="assets/images/shape/pheader-overlay.png"></div>
</section>
<!-- end: Breadcrumb Section -->


<!-- start: Careers Intro -->
<section class="tj-about-section-2 section-gap section-gap-x">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content-area text-center mb-5">
                    <div class="sec-heading">
                        <span class="sub-title wow fadeInUp" data-wow-delay=".3s">
                            <i class="tji-box"></i>Career <strong>NXT Level</strong>
                        </span>
                        <h3 class="sec-title title-anim">
                            We empower professionals with the tools, training, and
                            <span>support to succeed.</span>
                        </h3>
                    </div>

                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        At NXT Level, we’re always looking for sharp, detail-driven professionals who want to grow with
                        a company that's redefining back-office support. Whether your expertise lies in underwriting,
                        administration, customer service, or back-office operations, we provide the environment,
                        training, and tools to help you thrive.
                    </p>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- end: Careers Intro -->

<!-- start: Apply Now -->

<!-- start: Apply Now -->
<section class="tj-blog-section section-gap slidebar-stickiy-container">
    <div class="container">
        <div class="row row-gap-5 align-items-start">

            <!-- LEFT CONTENT -->
            <div class="col-lg-6">
                <div class="post-details-wrapper">
                    <div class="service-wrapper wow fadeInUp" data-wow-delay=".4s">

                        <div class="details-content-box ">

                            <div class="service-details-item equal-card wow fadeInUp" data-wow-delay=".2s">
                                <h6 class="title">Career Growth</h6>
                                <div class="desc">
                                    <p>At <strong>NXT Level,</strong> your growth is our priority. We believe careers
                                        should evolve with
                                        purpose, opportunity, and continuous learning. Our environment is built to help
                                        you sharpen your skills, explore new technologies, and take on meaningful
                                        challenges that move you forward.</p>
                                </div>
                            </div>

                            <div class="service-details-item equal-card wow fadeInUp" data-wow-delay=".4s">
                                <h6 class="title">Training & Support</h6>
                                <div class="desc">
                                    <p>At <strong>NXT Level,</strong> we invest in our people through continuous
                                        training and strong
                                        support systems. From onboarding to advanced skill development, we ensure you
                                        have the tools, guidance, and resources needed to succeed in your role and
                                        support is always within reach.</p>
                                </div>
                            </div>

                            <div class="service-details-item equal-card wow fadeInUp" data-wow-delay=".6s">
                                <h6 class="title">Collaborative Culture</h6>
                                <div class="desc">
                                    <p>At <strong>NXT Level,</strong> collaboration is at the heart of everything we do.
                                        We believe the
                                        best ideas come from open communication, shared knowledge, and diverse
                                        perspectives working together toward common goals. At <strong>NXT
                                            Level,</strong> collaboration
                                        isn’t just a value—it’s how we work every day</p>
                                </div>
                            </div>

                            <div class="service-details-item equal-card wow fadeInUp" data-wow-delay=".8s">
                                <h6 class="title">Long-Term Stability</h6>
                                <div class="desc">
                                    <p>At <strong>NXT Level,</strong> we focus on building lasting careers, not
                                        short-term roles. Our
                                        strong business foundation, long-term client partnerships, and sustainable
                                        growth approach provide employees with stability and confidence in their future.
                                        At <strong>NXT Level,</strong> you can grow your career.</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- RIGHT FORM -->
            <div class="col-lg-6">
                <div class="contact-form wow fadeInUp">
                    <h3 class="text-center mb-4">Apply Now</h3>

                    <!-- Show success/error message -->
                    <?php if (!empty($messageStatus)) { ?>
                        <?= $messageStatus; ?>
                    <?php } ?>

                    <form method="post" class="career-form">
                        <div class="row">

                            <form method="POST">

                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="full_name" class="form-control" placeholder="Full Name"
                                            value="<?= htmlspecialchars($_POST['full_name'] ?? '') ?>" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="education" class="form-control"
                                            placeholder="Education Qualification"
                                            value="<?= htmlspecialchars($_POST['education'] ?? '') ?>" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="experience" class="form-control"
                                            placeholder="Work Experience"
                                            value="<?= htmlspecialchars($_POST['experience'] ?? '') ?>">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email Address"
                                            value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <textarea name="message" rows="4" class="form-control"
                                            placeholder="Message (Optional)"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
                                    </div>

                                    <div class="col-12 text-center mt-4">

                                        <button type="submit" class="tj-primary-btn">

                                            <span class="btn-text">
                                                <span>Submit Application</span>
                                            </span>

                                            <span class="btn-icon">
                                                <i class="tji-arrow-right-long"></i>
                                            </span>

                                        </button>

                                    </div>

                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <p>
                                    Prefer email? Send your resume to <br>
                                    <a href="mailto:info@nxtlevel.nz.nz"> 📧 <strong>info@nxtlevel.nz</strong></a>
                                </p>
                            </div>
                        </div>
                </div>

            </div>
        </div>
</section>
<!-- end: Apply Now -->

<!-- Content end -->




<?php
$content = ob_get_clean();
include 'layout.php';
?>