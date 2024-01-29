<?php
require_once('../config/init.php');
$dateTime = date('Y-m-d h:i:s');
$activationCode = $_POST['activation_code'];
$customerNumber = $_POST['user'];
$query = "UPDATE `token` SET `code_status` = 'used' WHERE `activation_code` = '{$activationCode}'";
mysqli_query($link, $query);
$query = "UPDATE `customers` SET `merge_status` = 'downloaded', `download_date` = '{$dateTime}' WHERE `customer_no` = {$customerNumber}";
mysqli_query($link, $query);


if (isset($_POST['file_to_download'])) {

    //Read the url
    $url = '../vendor/map-files-for-free-download/' . $_POST['file_to_download'];
    //Clear the cache
    clearstatcache();

    //Check the file path exists or not
    if (file_exists($url)) {
        header('Content-Description: File Transfer');
        header('Content-Type: image/jpeg');
        header('Content-Disposition: attachment; filename="' . basename($url) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: public');
        header('Pragma: public');
        ob_clean();
        readfile($url);
        exit();
    } else {
        echo "File path does not exist.";
    }
} else {
    echo "File path is not defined.";
}
