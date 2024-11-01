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

    <section class="popular-destinations">
            <h2>Popular Destinations</h2>
            <div class="destinations-grid">
                <div class="destination-card">
                    <img src="" alt="">
                    <div class="card-content">
                        <h3 class="card-title">Palawan</h3>
                        <p class="card-description">Explore the beautiful landscape of palawan</p>
                    </div>
                </div>

                <div class="destination-card">
                    <img src="" alt="">
                    <div class="card-content">
                        <h3 class="card-title">Palawan</h3>
                        <p class="card-description">Explore the beautiful landscape of palawan</p>
                    </div>
                </div>

                <div class="destination-card">
                    <img src="" alt="">
                    <div class="card-content">
                        <h3 class="card-title">Palawan</h3>
                        <p class="card-description">Explore the beautiful landscape of palawan</p>
                    </div>
                </div>

                <div class="destination-card">
                    <img src="" alt="">
                    <div class="card-content">
                        <h3 class="card-title">Palawan</h3>
                        <p class="card-description">Explore the beautiful landscape of palawan</p>
                    </div>
                </div>
                
            </div>
    </section>

<?php include "footer.php"; ?>