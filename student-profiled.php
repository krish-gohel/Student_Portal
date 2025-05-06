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
    <title>Student Profile</title>
    <link rel="stylesheet" href="student-profile.css">
</head>
<body>
   
    <nav class="navbar">
        <ul>
        <li><a href="homepaged.php">Home</a></li>
            <li><a href="student-profiled.php">Student Profile</a></li>
            <li><a href="resultalld.php">Result</a></li>
            <li><a href="contactd.php">Contact Us</a></li>
            <li><a href="logout.php" class="logout-button">Logout</a></li>
        </ul>
</nav>
<div class="profile-container">
        <div class="profile-pic-container">
            <img src="images\img.jpg" alt="Profile Picture" class="profile-pic">
        </div>
        <h1>Student Profile</h1>
        <br>
        <h2>Personal Information</h2>
        <ul>
            <li><strong>Full Name:</strong> Shrey Vansjaliya</li>
            <li><strong>Enrollment ID:</strong> 12202040601059</li>
            <li><strong>SP ID:</strong> 2022002211</li>
            <li><strong>Branch:</strong> Computer Engineering</li>
            <li><strong>College Name:</strong> A.D. Patel Institute Of Technology</li>
            <li><strong>Year:</strong> 3rd</li>
            <li><strong>Email:</strong> 12202040601059@adit.ac.in</li>
            <li><strong>Contact Number:</strong> 0123456789</li>
            <li><strong>DOB:</strong> 13/01/2005</li>
            <li><strong>Gender:</strong> Male</li>
            <li><strong>Nationality:</strong> Indian</li>
            <li><strong>Permanent Address:</strong> Junagadh</li>
            <li><strong>Current Address:</strong> Anand</li>
        </ul>

        <form method="Post" action="homepaged.php">
            <input type="submit" value="OK" class="button">
        </form>
    </div>
</body>
</html>

