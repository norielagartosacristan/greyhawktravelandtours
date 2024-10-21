<?php include "header.php"; ?>

<?php
require 'includes/dbh.inc.php';

// Fetch a few featured tour packages to display on the home page
$query = "SELECT * FROM Tour_Packages LIMIT 3"; // You can change the limit based on how many you want to show
$result = mysqli_query($conn, $query);
?>

    <!-- Banner Section -->
    <div class="jumbotron jumbotron-fluid text-white bg-primary">
        <div class="container">
            <h1 class="display-4">Explore the World with Greyhawk</h1>
            <p class="lead">Discover exciting destinations and personalized tour packages just for you!</p>
            <a href="tour_packages.php" class="btn btn-light">View All Tour Packages</a>
        </div>
    </div>

    <!-- Featured Tour Packages -->
    <div class="container mt-5">
        <h2 class="text-center">Featured Tour Packages</h2>
        <div class="row">
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <p class="card-text"><?php echo substr($row['description'], 0, 100); ?>...</p>
                            <p class="card-text"><strong>Price:</strong> PHP <?php echo $row['price']; ?></p>
                            <a href="tour_packages.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Flight & Hotel Booking Section -->
    <div id="booking" class="container mt-5">
        <h2 class="text-center">Flight & Hotel Booking</h2>
        <p class="text-center">Book your flights and hotels with our trusted partners. Find the best deals tailored to your needs.</p>
        <div class="text-center">
            <a href="#" class="btn btn-success">Search Flights</a>
            <a href="#" class="btn btn-success">Search Hotels</a>
        </div>
    </div>

    <!-- Contact Us Section -->
    <div id="contact" class="container mt-5 mb-5">
        <h2 class="text-center">Contact Us</h2>
        <form action="process_contact.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

<?php include "footer.php"; ?>