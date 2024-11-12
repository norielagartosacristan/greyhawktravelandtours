<?php include "header.php"; ?>


    <!-- Contact Us Section -->
    <div id="contact" class="container mt-5 mb-5">
        <h2 class="text-center">Contact Us</h2>
        <form action="includes/process_contact.inc.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Your Message</label><br>
                <textarea name="message" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>

    <div>
        <h2>Our Location</h2>
        <!-- Map container -->
        <div id="map"></div>
    </div>
   
    <script>
        function initMap() {
            const location = { lat: 14.5995, lng: 120.9842 }; // Replace with your desired coordinates

            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 12,
                center: location,
            });

            // Custom Marker Icon
            const customIcon = {
                url: "https://path/to/your/custom-marker.png", // Replace with your custom marker image URL
                size: new google.maps.Size(50, 50), // Size of the marker icon
                origin: new google.maps.Point(0, 0), // Where the image's origin is (top-left corner)
                anchor: new google.maps.Point(25, 50), // Where the marker is anchored (adjust to center image)
            };

            // Create a custom marker with the icon
            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Our Location", // Optional title for the marker
                icon: customIcon, // Set the custom marker icon
            });
        }
    </script>

    <!-- Replace "YOUR_API_KEY" with your actual Google Maps JavaScript API key -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

<?php include "footer.php";?>