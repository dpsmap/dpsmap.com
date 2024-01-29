<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../functions/mapOutput.php');
require_once('../config/urlConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="Yangon Map, Map Download, Free Map Download">
    <META NAME="description" content="Yangon Map, Map Download">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Bago Map - DPS </title>

        <style>
        .responsive {
            width: 100%;
            max-width: 600px;
            height: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
            border-radius: 8px;
            max-width: 100%;
            max-height: 100%;
            margin-bottom: 30px;
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
        
        <div class="main-content">
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of Bago</div>
                            </div>
                        <p class="description">
                            Bago, Myanmar is said to have been founded in 573 AD by Mon emigrants from Thaton. 
                            The city was originally called Hanthawady, which means "Hamsavati" in Pali. According to legend, 
                            the princes named the city after seeing a female Hamsa standing on the back of a male Hamsa on an island in a lake. 
                            Bago was the capital of the Mon Kingdom from 825 until 1287, when the Mons regained independence from the Mongols. 
                            It then served as the capital of the country, a major port, and a prominent Buddhist center. 
                            From 1369 to 1539, Bago was the capital of the Hanthawaddy Kingdom, which covered all of lower Burma. From 1539 to 1599, it was the capital of the Taungoo Kingdom.
                        </p>
                    </div>
                </div>
        </div>
        
        <div class="main-content">
            
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        Bago_Town_POI_Layer
                    </br></br>
                    </div>
                </div></br></br>
                <div class="description">
  
                    <p>
                    </p>
                    </br></br>
                        <div>
                            <img src="../bago/images/Bago_Town_POI_Layer.jpg" alt="bago-map" class="responsive"/>
                        </div>
                </div>
            </div>
            
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        The Map Of BAGO CITY
                    </br></br>
                    </div>
                </div></br></br>
                <div class="description">
  
                    <p>
                    </p>
                    </br></br>
                        <div>
                            <img src="../bago/images/bago_map.jpg" alt="bago-map" class="responsive"/>
                        </div>
                </div>
            </div>
        </div>
    </section>
    </br></br></br></br></br>
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