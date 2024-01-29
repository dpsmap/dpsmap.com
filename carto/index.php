<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../config/urlConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="Carto, DPS carto">
    <META NAME="description" content="Carto dps, DPS MAP Carto">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/1SQFT.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Carto - DPS Map</title>
    
        <style>
        .responsive {
            width: 100%;
            max-width: 600px;
            height: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
            border-radius: 8px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>

<body>

    <!-- header area -->
    <section id="header">
        <?php require_once('../widgets/pc-nav-bar.php') ?>
        <?php require_once('../widgets/mobile-nav-bar.php') ?>
    </section>

    <!-- body area -->
    <section id="body">
        
    <div>
        <div class="custom-heading arc">
            <div class="main-heading">
              Carto - DPS Map
            </div>
        </div>

        <div class="arc-gis-container">
            
           <iframe width="100%" height="500px" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" title="Carto Map" src="https://dpsmap.carto.com/builder/534a4a8a-b6e9-11e6-87bc-0e8c56e2ffdb/embed">
           </iframe>
            
        </div>
    </div>
    
        <div class="custom-spacer">
            <div class="custom-hr"></div>
        </div>


    </section>


    <!-- footer area -->

    <section id="footer">
        <?php require_once('../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>

    <!-- App -->
    <script src="../assets/js/app.js" type="text/javascript"></script>


    <!-- Analytics -->
    <script src="../assets/js/analytics.js" type="text/javascript"></script>
</body>

</html>