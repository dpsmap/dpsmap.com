<?php
$servername = "mysql2001.my-virtual-panel.com";
$username = "dps_pricing";
$password = "12qwaszx";
$dbname = "dps_pricing";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>