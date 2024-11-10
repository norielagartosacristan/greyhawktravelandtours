<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Tour Package</title>
</head>
<body>

<h2>Upload New Tour Package</h2>
<form action="includes/upload_tour_package.inc.php" method="post" enctype="multipart/form-data">
    <label for="package_name">Package Name:</label>
    <input type="text" name="package_name" id="package_name" required><br><br>

    <label for="description">Description:</label>
    <textarea name="description" id="description" required></textarea><br><br>

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" required><br><br>

    <label for="duration">Duration:</label>
    <input type="text" name="duration" id="duration" required><br><br>

    <label for="departure_date">Departure Date:</label>
    <input type="date" name="departure_date" id="departure_date"><br><br>

    <label for="image">Upload Image:</label>
    <input type="file" name="image" id="image" accept="image/*" required><br><br>

    <input type="submit" name="submit" value="Upload Package">
</form>

</body>
</html>
