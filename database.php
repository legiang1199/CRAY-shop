<?php
$servername = "ec2-35-169-188-58.compute-1.amazonaws.com";
$usernameDB = "ecwkpszubktrca";
$password = "29596da29b68a0c25430b95c8324d819eea14be7cda2748cc88b841b4609098a";
$db = "d89f584cahc1bq";
$uri = 'postgres://ecwkpszubktrca:29596da29b68a0c25430b95c8324d819eea14be7cda2748cc88b841b4609098a@ec2-35-169-188-58.compute-1.amazonaws.com:5432/d89f584cahc1bq';
// Create connection
$conn = pg_connect($uri);

// Check connection
if (!$conn) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>