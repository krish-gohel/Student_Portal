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
    <title>RESULT</title>
    <link rel="stylesheet" href="resultall.css">
    <style>
       

       

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #333;
        }

        .result-options {
            list-style: none;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .result-options li {
            margin: 10px 0;
            width: 200px; /* Set a fixed width for the boxes */
        }

        .result-options a {
            display: block;
            text-decoration: none;
            color: black;
            padding: 15px;
            border: 2px solid black;
            border-radius: 5px;
            background-color: #f9f9f9; /* White background for the box */
            transition: background-color 0.3s, color 0.3s;
            text-align: center; /* Center text inside the box */
        }

        .result-options a:hover {
            background-color: gray;
            color: white;
        }
    </style>
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
    
    <h1>Select The Required Result:</h1>
    <ul class="result-options">
        <li><a href="resultd1.php">SEM - 1</a></li>
        <li><a href="resultd2.php">SEM - 2</a></li>
        <li><a href="resultd3.php">SEM - 3</a></li>
        <li><a href="resultd4.php">SEM - 4</a></li>
    </ul>
    
</body>
</html>