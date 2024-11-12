<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>
    <nav>
        <a href="upload_package.php">Upload Tour Package</a> | 
        <a href="view_packages.php">View Tour Packages</a> | 
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
