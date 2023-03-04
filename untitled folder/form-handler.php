<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $file = $_FILES['file'];
        $message = $_POST['message'];

        $to = "rusiruchathuranka@gmail.com"; // the email address to which you want to send the email
        $subject = "Form Submission";
        $headers = "From: " . $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $body = "Name: " . $name . "<br>" . "Email: " . $email . "<br>" . "Phone: " . $phone . "<br>" . "Address: " . $address . "<br>" . "Message: " . $message;
        if(mail($to, $subject, $body, $headers)) {
            echo "Form submitted successfully! An email has been sent to your email address.";
        } else {
            echo "An error occurred. Please try again later.";
        }
    }
?>
