<?php
$servername = "fdb1029.awardspace.net";
$username = "4238170_buzzbirdph";
$password = "Titanvpn/101017";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
