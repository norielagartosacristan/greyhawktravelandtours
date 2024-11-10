




<footer>
    <div class="footer-container">
        <!-- Left Column: Links -->
        <div class="footer-column">
            <h3>Important Links</h3>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookies Policy</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>

        <!-- Center Column: Social Media Icons -->
        <div class="footer-column social-media">
            <div id="newsletter" class="container mt-5 mb-5">
            <h2>Subscribe to our Newsletter</h2>
                <form action="includes/subscribe.inc.php" method="POST">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/greyhawktravelandtours"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@greyhawktravelandtours?si=Ysg5Yx-V5aPeawcJ"><i class="fab fa-youtube"></i></a>
        </div>

        <!-- Right Column: Contact Info -->
        <div class="footer-column">
            <h3>Contact Info</h3>
            <p>Greyhawk Travel and Tours</p>
            <p>Email: info@greyhawktravel.com</p>
            <p>Phone: +63 9705902154</p>
            <p>Address: Godofredo Reyes Sr., Ragay, Camarines Sur</p>
        </div>
    </div>
</footer>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 Greyhawk Travel and Tours | All rights reserved.</p>
</footer>


    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email from the form and sanitize it
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    // Database connection
    $servername = "localhost";
    $username = "greyhlfr_nsacristan26";
    $password = "Formula@01";
    $dbname = "greyhlfr_travel_and_tours_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert email into subscribers table
    $sql = "INSERT INTO subscribers (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        $message = "Thank you for subscribing!";
        $showModal = true;
    } else {
        $message = "Error: " . $conn->error;
        $showModal = true;
    }

    // Close connection
    $conn->close();
}
?>

<!-- Success Message Modal -->
<?php if (isset($showModal) && $showModal): ?>
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><?php echo $message; ?></p>
        </div>
    </div>
<?php endif; ?>

<script>
// Get the modal
var modal = document.getElementById("modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Show the modal if it should be displayed
window.onload = function() {
    <?php if (isset($showModal) && $showModal): ?>
        modal.style.display = "block";
    <?php endif; ?>
};

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

    <!-- Bootstrap and JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>