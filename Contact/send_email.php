<?php
if (isset($_POST['submit'])) {
    $recipient = "lawandprathamesh7@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $headers = "From: $name <$email>";
    
    if (mail($recipient, $subject, $message, $headers)) {
        echo "Thank you for contacting me!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
