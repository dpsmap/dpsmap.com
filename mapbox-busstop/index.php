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
    <META NAME="keywords" content="bus stop in yangon, DPS Mapbox, mapbox, yangon bus stop">
    <META NAME="description" content="Bus stop in Yangon, DPS MAP Mapbox">
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
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css' rel='stylesheet' />
 
    <title> Bus Stop in Yangon, Mapbox - DPS Map </title>
    
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
                Bus Stop in Yangon, Mapbox 
            </div>
        </div>

        <div class="arc-gis-container">
            
           <iframe width="100%" height="500px" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://api.mapbox.com/styles/v1/dpsmap/cjmu0xbil27ba2rjq0o64hiu1.html?title=false&access_token=pk.eyJ1IjoiZHBzbWFwIiwiYSI6ImNqMG9zMWd2ZjAwMDIzMm1zM2d5dXAyODkifQ.OtH5v73ktmPRPx13lCWwog&zoomwheel=false#10.94/16.8786/96.2355"
                                    title="YGN POI Presentation" style="border:none;">
           </iframe>
            <div class="col-full">
                <div class="wrap-col">
                    <div id="myanmar_map_content">
                        <div class="row">
                            <div id='map' style='width: 100%; height: 750px;'></div>
                            <script>
                            mapboxgl.accessToken =
                                'pk.eyJ1IjoiZHBzbWFwIiwiYSI6ImNqMG9zMWd2ZjAwMDIzMm1zM2d5dXAyODkifQ.OtH5v73ktmPRPx13lCWwog';
                            var map = new mapboxgl.Map({
                                container: 'map',
                                style: 'mapbox://styles/dpsmap/cj4tocdpi0lj82rqstmyqsaeb'
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
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
    
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js'></script>
</body>

</html>