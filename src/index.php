<?php
session_start();

require_once "db.php";

if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) {
    header("Location: profile.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // MD5 hash

    $stmt = $mysqli->prepare("SELECT id FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows === 1) {
        $stmt->bind_result($user_id);
        $stmt->fetch();

        $_SESSION["authenticated"] = true;
        $_SESSION["user_id"] = $user_id;
        $_SESSION["username"] = $username;
        header("Location: profile.php");
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - miniFacebook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Login to miniFacebook</h1></header>
<form method="post" action="">
    <div class="form-group">
        <label>Username:</label>
        <input type="text" name="username" required>
    </div>
    <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Login</button>
    <?php if ($error): ?>
        <div class="alert error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
</form>
<p>Don't have an account? <a href="registration.php" class="fancy-btn">Register here</a>.</p>
</body>
</html>

