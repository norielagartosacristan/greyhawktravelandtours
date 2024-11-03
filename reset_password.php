<?php
include 'includes/dbh.inc.php';

if (isset($_GET['token']) && isset($_POST['submit'])) {
    $token = $_GET['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "SELECT * FROM admin_users WHERE reset_token='$token'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $conn->query("UPDATE admin_users SET password='$new_password', reset_token=NULL WHERE reset_token='$token'");
        echo "Password reset successful. <a href='login.php'>Login</a>";
    } else {
        echo "Invalid token!";
    }
} else if (isset($_GET['token'])) {
    $token = $_GET['token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>
    <form method="POST" action="">
        <input type="password" name="password" placeholder="New Password" required><br><br>
        <button type="submit" name="submit">Reset Password</button>
    </form>
</body>
</html>
<?php
} else {
    echo "No token provided.";
}
?>