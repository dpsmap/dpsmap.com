<?php
require_once('../../../config/urlConfig.php');
function logout($http, $domain)
{
    session_start();
    session_destroy();
    header("Location:{$http}{$domain}/pages/map-download/dps-admin/");
}
logout($http, $domain);
