<?php
include 'includes/dbh.inc.php';

$username = 'admin';
$password = password_hash('NS?Formula@01', PASSWORD_DEFAULT);
$email = 'nlsacristan77@gmail.com';

$stmt = $conn->prepare("INSERT INTO admin_users (username, password, email) VALUES (?, ?, ?)");
if (!$stmt) {
    die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
}

$stmt->bind_param("sss", $username, $password, $email);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
