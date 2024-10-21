<?php
if(isset($_POST['submit'])) {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format');
    }

    // Email details
    $to = 'info@greyhawktravel.com'; // Replace with your email address
    $subject = 'New Contact Us Inquiry';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Email content
    $email_body = "
    <html>
    <head>
    <title>New Inquiry from Contact Form</title>
    </head>
    <body>
    <h2>New Message from Contact Us Form</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Message:</strong> $message</p>
    </body>
    </html>
    ";

    // Send email
    if(mail($to, $subject, $email_body, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Failed to send message. Please try again.';
    }
} else {
    echo 'Please submit the form.';
}
?>
