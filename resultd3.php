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
<html>
 <head>
  <title>
   Result
  </title>
  <link rel="stylesheet" href="result.css">
  
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
  <div class="container">
   <div class="header">
    <img alt="University Logo" height="100" width="600" src="images\cvm.png">
   </div>
   <table class="details">
    <tr>
     <td>
      Seat No:
     </td>
     <td>
      220220
     </td>
    </tr>
    <tr>
     <td>
      Exam Name:
     </td>
     <td>
      BTECH (CP) - SEM 3 - FEB 24
     </td>
    </tr>
    <tr>
     <td>
      Program Name:
     </td>
     <td>
      BACHELOR OF TECHNOLOGY (COMPUTER ENGINEERING)
     </td>
    </tr>
    <tr>
     <td>
      Student Name:
     </td>
     <td>
      SHREY VANSJALIYA
     </td>
    </tr>
    <tr>
     <td>
      College Name:
     </td>
     <td>
      A D PATEL INSTITUTE OF TECHNOLOGY (ADIT)
     </td>
    </tr>
    <tr>
     <td>
      Enrolment / PG Registration No:
     </td>
     <td>
      12202040601059
     </td>
    </tr>
    <tr>
     <td>
      Result Declared ON Date:
     </td>
     <td>
      25 Aug 2023 13:10:00:000
     </td>
    </tr>
    <tr>
     <td>
      SP ID:
     </td>
     <td>
      2022002211
     </td>
    </tr>
   </table>
   <table class="grades">
    <tr>
     <th>
      Course Code
     </th>
     <th>
      Course Name
     </th>
     <th>
      GL
     </th>
     <th>
      GP
     </th>
     <th>
      Credit
     </th>
    </tr>
    <tr>
     <td>
      202000211
     </td>
     <td>
      FUNDAMENTAL OF ECONOMICS AND BUSINESS MANAGEMENT
     </td>
     <td>
      AA
     </td>
     <td>
      10
     </td>
     <td>
      4
     </td>
    </tr>
    <tr>
     <td>
      202001207
     </td>
     <td>
      PROBABILITY - STSTISTICS AND NUMERICAL METHODS
     </td>
     <td>
      BB
     </td>
     <td>
      9
     </td>
     <td>
      3
     </td>
    </tr>
    <tr>
     <td>
      202001213
     </td>
     <td>
      DATA STRUCTURES
     </td>
     <td>
      BB
     </td>
     <td>
      8
     </td>
     <td>
      4
     </td>
    </tr>
    <tr>
     <td>
      202000212
     </td>
     <td>
      DATABASE MANAGEMENT SYSTEM
     </td>
     <td>
      AA
     </td>
     <td>
      10
     </td>
     <td>
      4
     </td>
    </tr>
    <tr>
     <td>
      202001202
     </td>
     <td>
      DIGITAL FUNDAMENTALS
     </td>
     <td>
      AB
     </td>
     <td>
      9
     </td>
     <td>
      4
     </td>
    </tr>
    <tr>
     <td>
      202001208
     </td>
     <td>
      INDIAN ETHOS AND VALUE EDUCATION
     </td>
     <td>
      AA
     </td>
     <td>
      10
     </td>
     <td>
      4
     </td>
    </tr>
    <tr>
     <td>
      900009903
     </td>
     <td>
      CREATIVITY, PROBLEM SOLVING AND INNOVATION
     </td>
     <td>
      AB
     </td>
     <td>
      9
     </td>
     <td>
      2
     </td>
    </tr>
   </table>
   <div class="summary">
    <p>
     SGPA : 9.12
    </p>
    <p>
     CGPA : 9.03
    </p>
    <p>
     Result : PASS
    </p>
    <p>
     Current Backlogs : 0
    </p>
    <p class="highlight">
     Congratulation!! You have Passed this exam.
    </p>
   </div>
   <form method="Post" action="homepaged.php">
    <input type="submit" value="Home"  class="button">
</form>
  </div>
 </body>
</html>