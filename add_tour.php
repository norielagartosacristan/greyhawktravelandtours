<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tour Package</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Add New Tour Package</h2>
        <form action="includes/upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Tour Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="duration">Duration (e.g. 5 days, 7 nights)</label>
                <input type="text" name="duration" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" name="destination" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Tour Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add Tour Package</button>
        </form>
    </div>
</body>
</html>
