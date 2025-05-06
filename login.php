<?php
session_start();
$error = "";

$users = [
    ["email" => "12202040601015@adit.ac.in", "password" => "krish@123", "redirect" => "homepage.php"],
    ["email" => "12202040601059@adit.ac.in", "password" => "shrey@123", "redirect" => "homepaged.php"],
    ["email" => "111@a.com", "password" => "111", "redirect" => "homepage.php"]
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    foreach ($users as $user) {
        if ($user["email"] == $email && $user["password"] == $password) {

            header("Location: " . $user["redirect"]);
            $_SESSION['user'] = $email;
            $_SESSION['pass'] = $password;
            exit;

        } else {

            $error = "Invalid email or password.";
        }

    }

    


// Store user information in the session


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>

        <?php if (!empty($error)): ?>
            <p id="error-message"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
