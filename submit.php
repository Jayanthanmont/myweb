<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Change the recipient email address to your own
    $to = 'jayanthansailentra8@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    mail($to, $subject, $body);

    // Redirect back to the contact page
    header('Location: contact.html');
    exit();
}
?>
