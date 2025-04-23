<?php
session_start();

require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        $hashed = md5($password); // Using MD5 for consistency
        $stmt = $mysqli->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed);

        if ($stmt->execute()) {
            $_SESSION["authenticated"] = true;
            $_SESSION["username"] = $username;
            header("Location: profile.php");
            exit();
        } else {
            $error = "Registration failed. Username may already exist.";
        }
    } else {
        $error = "Please fill out all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - miniFacebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Register for miniFacebook</h1>
    </header>

    <main class="container">
        <?php if (!empty($error)) echo "<p class='alert error'>$error</p>"; ?>
        <form action="addnewuser.php" method="POST" class="form login">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email Address:</label>
            <input type="email" name="email" id="email" required>

            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="fancy-btn">Register</button>
        </form>

        <a href="index.php" class="fancy-btn">Back to Login</a>
    </main>

    <footer>
        &copy; 2025 miniFacebook
    </footer>
</body>
</html>
