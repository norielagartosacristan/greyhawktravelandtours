<?php
// Database connection file
require 'db_connection.php';

if (isset($_POST['submit'])) {
    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $destination = $_POST['destination'];
    
    // Image upload
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($image);
    
    // Move the uploaded file to the server
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
        // Prepare SQL query to insert tour package data
        $query = "INSERT INTO Tour_Packages (title, description, price, duration, destination, image_url) 
                  VALUES ('$title', '$description', '$price', '$duration', '$destination', '$target_file')";
        
        if (mysqli_query($conn, $query)) {
            echo "New tour package added successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Error uploading image.";
    }
}
?>
