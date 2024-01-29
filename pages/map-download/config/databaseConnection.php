<?php
$error_message = 'Sorry! We\'re experiencing difficulties.';
$link = mysqli_connect('localhost', 'dev.dpsmap_download', 'Admin11181#') or die($error_message);
mysqli_select_db($link, 'dev.dpsmap_download') or die($error_message);
