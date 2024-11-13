<?php
session_start();

// Restrict access to logged-in admins only
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: index.php"); // Redirect to login if not authenticated
    exit;
}
?>

<?php include "header.php"; ?>

<h1>Welcome to the Admin Dashboard</h1>
<!-- Admin dashboard content -->
<!-- admin/dashboard.php -->
<a href="logout.php">Logout</a>



<?php include "footer.php"; ?>