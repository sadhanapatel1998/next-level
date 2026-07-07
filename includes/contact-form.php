<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name    = trim($_POST['cfName']);
    $email   = trim($_POST['cfEmail']);
    $phone   = trim($_POST['cfPhone']);
    $subject = trim($_POST['cfSubject']);
    $msg     = trim($_POST['cfMessage']);

    // validation
    if (empty($name) || empty($email) || empty($phone) || empty($msg) || $subject === "0") {
        echo "<script>
                alert('Please fill all required fields.');
                window.history.back();
              </script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
         $mail->Username   = 'shivampal.hovermedia@gmail.com'; 
        $mail->Password   = 'fhltoiupggjbnzeg';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('info@nxtlevel.nz', 'Website Contact Form');
        $mail->addAddress('info@nxtlevel.nz');

        // Email
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission";

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
                alert('Message sent successfully!');
                window.location='../contact.php';
              </script>";

    } catch (Exception $e) {
        echo "<script>
                alert('Error: {$mail->ErrorInfo}');
                window.history.back();
              </script>";
    }
}
?>
