<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['admin']; ?>!</h1>
    <nav>
        <a href="upload_tour_package.php">Upload Tour Package</a> | 
        <a href="view_packages.php">View Tour Packages</a> | 
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container">
        <div class="header">

        </div>
        <div class="sidebar"></div>
        <div class="main"></div>
        
    </div>
</body>
</html>
