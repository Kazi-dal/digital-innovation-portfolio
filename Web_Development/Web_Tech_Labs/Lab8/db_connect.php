<?php
// Database connection credentials
$servername = "db.cs.dal.ca";
$username = "kalam";
$password = "d39HXhTbRSRxSRoXZRCwwqv67";
$database = "kalam";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection to Database works!";
}
?>
