<?php
// Load Composer's autoloader or manually include PHPMailer files
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'srorr8872@gmail.com';
        $mail->Password   = 'mmtx fdpa zabi jjrt';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom($email, $name);
        $mail->addAddress('srorr8872@gmail.com', 'All Green');


        $mail->isHTML(true);
        $mail->Subject = 'New Contact Message from ' . $name;
        $mail->Body    = "
           <div style='background-color:#f4f4f4; padding:20px; font-family:Arial, sans-serif;'>
        <div style='max-width:600px; margin:0 auto; background-color:#ffffff; padding:20px; border-radius:8px; box-shadow:0 2px 4px rgba(0,0,0,0.1);'>
            <h2 style='color:#4CAF50;'>New Contact Message</h2>
            <p style='font-size:16px; color:#333;'><strong>Name:</strong> $name</p>
            <p style='font-size:16px; color:#333;'><strong>Email:</strong> $email</p>
            <p style='font-size:16px; color:#333;'><strong>Phone:</strong> $phone</p>
            <p style='font-size:16px; color:#333;'><strong>Message:</strong></p>
            <p style='font-size:16px; color:#555;'>$message</p>
            <hr style='border-top:1px solid #dddddd; margin:20px 0;'/>
            <footer style='text-align:center; font-size:12px; color:#777;'>
                <p>All Green</p>
                <p>123 Green Street, City, Country</p>
                <p>Email: info@allgreen.me | Phone: +20 (122) 750-0877</p>
            </footer>
        </div>
    </div>
        ";
        $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";


        $mail->send();
        echo 'Message has been sent successfully!';
        header('Location: Contact_Us.php');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header('Location: Contact_Us.php');
    exit();
}
