<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Compose email message
$to = 'mnvbains@gmail.com';
$subject = 'New message from your website';
$body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
$headers = "From: $email";

// Send email
mail($to, $subject, $body, $headers);

// Redirect to a thank-you page
header('Location: thank-you.html');
exit();
?>
