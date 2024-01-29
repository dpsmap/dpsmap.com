<?php
$servername = "localhost";
$username_ = "dps_next";
$password_ = "dpsmap_next";
$dbname = "dps_next";

$conn = new mysqli($servername, $username_, $password_, $dbname);
mysqli_set_charset($conn,"utf8");
?>