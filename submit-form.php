<?php
// Get the form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$additional_note = $_POST['additional_note'];

// Compose the email message
$message = "Name: $full_name\n";
$message .= "Email: $email\n";
$message .= "Contact Number: $contact_number\n";
$message .= "Additional Note: $additional_note\n";

$headers = 'From: sender@example.com' . "\r\n" .
    'Reply-To: sender@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Send the email
mail('rusiruchathuranka@gmail.com', 'New Contact Form Submission', $message);

// Send a response to the client
echo 'Your message has been sent successfully.';



