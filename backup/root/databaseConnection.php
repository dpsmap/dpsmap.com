<?php
$error_message = 'Sorry! We\'re experiencing difficulties.';
$link = mysqli_connect('localhost', 'dev.dpsmap', 'tAhryb5mXSWjdC63') or die($error_message);
mysqli_select_db($link, 'dev.dpsmap') or die($error_message);
