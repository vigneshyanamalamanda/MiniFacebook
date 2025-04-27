<?php
session_start();


// Destroy session securely
session_unset();
session_destroy();

// Redirect to login page
header("Location: form.php");
exit();
?>


