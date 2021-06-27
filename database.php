<?php
$servername = "ec2-35-169-188-58.compute-1.amazonaws.com";
$usernameDB = "ecwkpszubktrca";
$password = "29596da29b68a0c25430b95c8324d819eea14be7cda2748cc88b841b4609098a";
$db = "d89f584cahc1bq";
// Create connection
$conn = pg_connect($servername, $usernameDB, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . pg_connect_error());
}
?>