<?php
$servername = "ec2-3-214-136-47.compute-1.amazonaws.com";
$usernameDB = "bqgmgfpgabwslp";
$password = "d32505c7b94fb8833caf57ef7723c61b624f802e80ef14b54fa389438e53b2a2";
$db = "dfkbgdpud7dt2h";
$uri = 'postgres://bqgmgfpgabwslp:d32505c7b94fb8833caf57ef7723c61b624f802e80ef14b54fa389438e53b2a2@ec2-3-214-136-47.compute-1.amazonaws.com:5432/dfkbgdpud7dt2h';
// Create connection
$conn = pg_connect($uri);

// Check connection
if (!$conn) {
  die('Error: Could not connect: ' . pg_last_error());
}
?>