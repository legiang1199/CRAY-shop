<?php
$servername = "localhost";
$usernameDB = "root";
$password = "";
$db = "test cray";
// Create connection
$conn = mysqli_connect($servername, $usernameDB, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>