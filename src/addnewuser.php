<?php
require_once "db.php";

function addnewuser() {
    global $mysqli;

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($name) || empty($email) || empty($username) || empty($password)) {
        echo "<script>alert('All required fields must be filled.'); window.location='registration.php';</script>";
        return;
    }

    $hashed = md5($password); // Use MD5 hashing

    $stmt = $mysqli->prepare("INSERT INTO users (name, email, phone, username, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $username, $hashed);

    if ($stmt->execute()) {
        echo "<script>alert('Registration successful.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Registration failed: " . $stmt->error . "'); window.location='registration.php';</script>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    addnewuser();
}
