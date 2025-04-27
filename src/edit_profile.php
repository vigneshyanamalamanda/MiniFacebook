<?php


session_start();
require_once "db.php";


$username = $_SESSION["username"];
$name = $email = $phone = "";
$success = $error = "";

// Fetch current profile info
$stmt = $mysqli->prepare("SELECT name, email, phone FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($name, $email, $phone);
$stmt->fetch();
$stmt->close();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newName = trim($_POST["name"]);
    $newEmail = trim($_POST["email"]);
    $newPhone = trim($_POST["phone"]);

    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format.";
    } else {
        $stmt = $mysqli->prepare("UPDATE users SET name=?, email=?, phone=? WHERE username=?");
        $stmt->bind_param("ssss", $newName, $newEmail, $newPhone, $username);
        if ($stmt->execute()) {
            $success = "Profile updated successfully.";
            $name = $newName;
            $email = $newEmail;
            $phone = $newPhone;
        } else {
            $error = "Update failed. Please try again.";
        }
        $stmt->close();
    }
}

include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile - miniFacebook</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="container">
        <h2>Edit Profile</h2>

        <?php if ($success): ?>
            <div class="alert success"><?= htmlspecialchars($success) ?></div>
        <?php elseif ($error): ?>
            <div class="alert error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" id="name" value="<?= htmlspecialchars($name) ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($phone) ?>">
            </div>

            <button type="submit" class="btn primary">Update Profile</button>
        </form>

        <div class="form-actions">
            <a href="profile.php" class="btn secondary">Back to Profile</a>
        </div>
    </main>
</body>
</html>
