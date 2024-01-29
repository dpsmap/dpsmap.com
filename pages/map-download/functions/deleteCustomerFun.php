<?php

$deleteCustomer = function ($customerNumber) use ($link) {

    $customerNumber = intval($customerNumber);
    $query = "DELETE FROM `customers` WHERE `customer_no` = {$customerNumber}";
    mysqli_query($link, $query);
    return true;
};

if (isset($_POST['confirm_btn'])) {
    $customerNumber =  $_POST['customer_no'];
    if (($login($_SESSION['username'], $_POST['confirm_password'])) == $sessionUserId) {
        $deleteCustomer = $deleteCustomer($customerNumber);
        if ($deleteCustomer === true) {
            header("Location:{$_SERVER['PHP_SELF']}?delSuccess");
            exit();
        }
    } else {
        $logs[] = "Password Incorrect";
    }
}
