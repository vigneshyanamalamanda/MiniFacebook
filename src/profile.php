<?php
session_start();

if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: index.php");
    exit();
}
$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Profile - miniFacebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="#">miniFacebook</a></div>
            <div class="nav-links">
                <a href="view_posts.php">View Posts</a>
                <a href="edit_profile.php">Edit Profile</a>
                <a href="changepasswordform.php">Change Password</a>
                <a href="logout.php">Logout</a>
            </div>
        </nav>
    </header>

    <main class="container">
        <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>

    </main>

    <footer>
        &copy; 2025 miniFacebook
    </footer>
</body>
</html>

