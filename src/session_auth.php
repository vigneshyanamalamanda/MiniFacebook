<?php
// Secure session cookie settings (should be set before session_start)
if (session_status() === PHP_SESSION_NONE) {
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '', // Leave blank unless using a custom domain
        'secure' => true,      // Ensures cookie is sent over HTTPS
        'httponly' => true,    // Prevents access via JavaScript
        'samesite' => 'Strict' // Protects against CSRF
    ]);
    session_start();
}

// Authentication check
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: index.php");
    exit();
}
?>

