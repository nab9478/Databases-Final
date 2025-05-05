<?php
header("Cache.Control: no-cache");
$servername = "localhost";
$username = "u248613372_NYU_ER";
$password = "Maroons219:)";
$dbname = "u248613372_NYU_ER";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
