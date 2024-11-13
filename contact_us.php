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
   
   
<?php include "footer.php";?>