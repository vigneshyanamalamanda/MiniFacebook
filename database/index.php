<?php
session_start();

// Enable error reporting for debugging (disable this in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection settings directly included
$host = 'localhost';
$user = 'WAPHTEAM1';
$password = 'teamproject';
$dbname = 'waph_team';

$mysqli = new mysqli($host, $user, $password, $dbname);
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

function checkLogin($username, $password, $mysqli) {
    // Prepare SQL to prevent SQL injection
    /*$stmt = $mysqli->prepare("SELECT password FROM users WHERE username = ?");
    if (!$stmt) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
        exit();
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Use password_verify to check the hashed password.
        if (password_verify($password, $hashed_password)) {
            $stmt->close();
            return true;
        }
    }

    $stmt->close();
    return false;*/
    $sql = "SELECT * FROM users WHERE username='" . $username . "' ";
	$sql = $sql . " AND password = md5('" . $password . "')";
	echo "DEBUG>sql=$sql";
	$result = $mysqli->query($sql);
	if($result->num_rows ==1) return TRUE;
	return FALSE;
}

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    if (checkLogin($_POST['username'], $_POST['password'], $mysqli)) {
        echo "<h2>Welcome " . htmlspecialchars($_POST['username']) . "!</h2>";
    } else {
        echo "<script>alert('Invalid username/password'); window.location='form.php';</script>";
    }
} else {
    // Prompt user to fill in the login form if data is not submitted
    header("Location: form.php");
    exit();
}
?>

