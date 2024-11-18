<?php include "header.php"; ?>

<?php
require 'includes/dbh.inc.php';

// Fetch a few featured tour packages to display on the home page
$query = "SELECT * FROM Tour_Packages LIMIT 3"; // You can change the limit based on how many you want to show
$result = mysqli_query($conn, $query);
?>

    <!-- Banner Section -->
    <div class="jumbotron jumbotron-fluid text-white custom-bg">
        <div class="container">
            <h1 class="display-4">Explore the World with Greyhawk</h1>
            <p class="lead">Discover exciting destinations and personalized tour packages just for you!</p>
            <a href="tour_packages.php" class="btn btn-light">View All Tour Packages</a>
        </div>
    </div>

    <!-- Featured Tour Packages 
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
            -->

<div class="city-grid">
    <div class="city-image">

    </div>
    <div class="city-info">
         <h2>Cebu City</h2>    
    </div>
</div>

    <div class="destinations">
        <h2>Where to go</h2>
    <div class="card-grid">
    <div class="destination-card">
        <div class="image-container">
            <img src="images/mayon-vulcano.jpg" alt="Bali, Indonesia">
        </div>
        <div class="destination-info">
            <h3>Legazpi, Albay</h3>
            <p>Explore the beautiful beaches and lush landscapes.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>

    <div class="destination-card">
        <div class="image-container">
        <img src="images/palawan.jpg" alt="Paris, France">
        </div>
        <div class="destination-info">
            <h3>Puerto Princesa, Palawan</h3>
            <p>Experience the City of Light and its iconic Eiffel Tower.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>

    <div class="destination-card">
        <div class="image-container">
            <img src="destination3.jpg" alt="Tokyo, Japan">
        </div>
        <div class="destination-info">
            <h3>Tokyo, Japan</h3>
            <p>Discover the vibrant culture and advanced technology.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>

    <div class="destination-card">
        <div class="image-container">
            <img src="destination4.jpg" alt="New York, USA">
        </div>
        <div class="destination-info">
            <h3>New York, USA</h3>
            <p>Visit the city that never sleeps and its iconic landmarks.</p>
            <button class="learn-more">Learn More</button>
        </div>
    </div>
</div>

    </div>
    

<?php include "footer.php"; ?>