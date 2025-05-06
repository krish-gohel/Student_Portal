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
    <title>Homepage</title>
    <link rel="stylesheet" href="homepage.css">
    
</head>
<body>

    <nav class="navbar">
        <ul>
        <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="student-profile.php">Student Profile</a></li>
            <li><a href="resultall.php">Result</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="logout.php" class="logout-button">Logout</a></li>
        </ul>
        </ul>
</nav>
    <div class="homepage-container">

        <h1>Welcome, Krish!</h1>
        <br>
        <p>This is the secure homepage, accessible only to logged-in users.</p>

        <section class="overview">
            <h2>About Us</h2>
            <br>
            <p>Our student management system is designed to streamline the academic journey of students.</p>
            <br>
            <p>We provide a user-friendly platform where students can manage their profiles, access their grades from previous semesters, communicate with instructors and track their progress.</p>
            <br>
            <p>Our goal is to enhance the educational experience by providing all necessary tools in one convenient location.</p>
        </section>

        <section class="updates">
            <h2>Recent Updates</h2>
            <br>
            <p><li>More Information added in student profile section!</li></p> 
            <br>
            <p><li>Check out the results for the last semester.</li></p>
            <br>
            <p><li>Contact us for any inquiries or support.</li></p>
        </section>

        <section class="contact-info">
            <h2>Contact Information</h2>
            <br>
            <p>If you have any questions, feel free to reach out:</p>
            <br>
            <p>Email: college@gmail.com</p>
            <br>
            <p>Phone: +91 012 345 6789</p>
        </section>
    </div>
</body>
</html>
