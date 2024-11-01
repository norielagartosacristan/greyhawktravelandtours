<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Tour Package</title>
</head>
<body>
    <h2>Add a New Tour Package</h2>
    <form action="includes/upload.inc.php" method="post" enctype="multipart/form-data">
        <label for="package_name">Package Name:</label>
        <input type="text" id="package_name" name="package_name" required><br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" required><br><br>

        <label for="price">Price:</label>
        <input type="number" step="0.01" id="price" name="price" required><br><br>

        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required><br><br>

        <label for="departure_date">Departure Date:</label>
        <input type="date" id="departure_date" name="departure_date"><br><br>

        <input type="submit" value="Add Tour Package">
    </form>
</body>
</html>