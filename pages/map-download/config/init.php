<?php
require_once('databaseConnection.php');
require_once('sanatization.php');
date_default_timezone_set('Asia/Yangon');
session_start();

$logs = [];
$outputLogs = function ($logs) {
    for ($i = 0; $i < count($logs); $i++) {
        echo "<p style='color:red'>{$logs[$i]}</p>";
    }
};
