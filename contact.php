<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    // Redirect to the login page if the session is invalid
    header("Location: login.php"); // Correctly formatted header function
    exit(); 
}

// If the user is logged in, display their username
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
   
    <nav class="navbar">
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="student-profile.php">Student Profile</a></li>
            <li><a href="resultall.php">Result</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php" class="logout-button">Logout</a></li>
        </ul>
</nav>
<div class="contact-container">
    <h1>Contact Us</h1>
    <br>
    <form id="contactForm">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <br>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <!-- Message container where the "Thank you" message will appear -->
    <div id="thankYouMessage" style="display: none; color: green; margin-top: 10px;">
        Thank you for contacting us! We will get back to you shortly.
    </div>

</div>
        <div class="social-media">
            
            <ul>
                <li>
                    <a href="https://www.instagram.com/i.krishh._/" target="_blank">
                        <img src="images\instagram.webp" alt="Instagram" class="instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/krishgohelofficial/" target="_blank">
                        <img src="images\linkedin.webp" alt="LinkedIn" class="linkedin"> 
                    </a>
                </li>
                <li>
                    <a href="https://x.com" target="_blank">
                        <img src="images\X.webp" alt="X" class="X">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="images\facebook.webp" alt="Facebook" class="facebook">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <script src="contact.js"></script>
</body>
</html>
