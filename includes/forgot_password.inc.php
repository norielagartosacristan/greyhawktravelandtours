<?php
include 'includes/dbh.inc.php';

if (isset($_POST['submit'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $sql = "SELECT * FROM admin_users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $token = bin2hex(random_bytes(50)); // Generate a unique token
        $reset_link = "http://yourwebsite.com/reset_password.php?token=$token";

        // Save the token in the database (temporary storage example)
        $conn->query("UPDATE admin_users SET reset_token='$token' WHERE email='$email'");

        // Send the reset link via email (use a mail server in production)
        mail($email, "Password Reset Request", "Click this link to reset your password: $reset_link");

        echo "A password reset link has been sent to your email.";
    } else {
        echo "Email not found!";
    }
}
?>
