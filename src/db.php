<?php
$host = 'localhost';
$username = 'WAPHTEAM1';
$password = 'teamproject';
$dbname = 'waph_team';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>

