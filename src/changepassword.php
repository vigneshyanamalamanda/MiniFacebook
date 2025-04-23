<?php
session_start();

require_once "db.php";

// Check if user is logged in
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: index.php");
    exit();
}

$username = $_SESSION["username"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if new passwords match
    if ($new_password !== $confirm_password) {
        die("New passwords do not match.");
    }

    // Check old password
    $stmt = $mysqli->prepare("SELECT password FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($stored_password);
    $stmt->fetch();
    $stmt->close();

    if ($stored_password !== md5($old_password)) {
        die("Old password is incorrect.");
    }

    // Update new password
    $new_hashed = md5($new_password);
    $update = $mysqli->prepare("UPDATE users SET password=? WHERE username=?");
    $update->bind_param("ss", $new_hashed, $username);
    if ($update->execute()) {
        echo "<script>alert('Password changed successfully. Please log in again.'); window.location='logout.php';</script>";
    } else {
        echo "Error updating password.";
    }
    $update->close();
}
include 'header.php';
?>

