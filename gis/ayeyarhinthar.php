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
        <meta name="keywords" content="DPS valued clients, Map Download, Free Map Download">
        <meta name="description" content="DPS valued clients, Map Download, Design Printing">
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

        <title> AYEYAR HINTHAR </title>
        <style>
        .responsives {
            width: 300px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .responsive {
            width: 300px;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
            border-radius: 8px;
        }

        p.big {
            line-height: 1.8;
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
                <div class="map-description">
                    <div class="custom-heading">
                        <div class="main-heading">
                            AYEYAR HINTHAR
                        </div>
                    </div></br></br>
                    <div class="description">

                        <p class="big">
                            Our companies distribute rice with the name Aye Yar Rice. When we distribute the rice to
                            numerous shops in the country, we have to upload the data of our shops and the way of our
                            sale team on the map. It is really helpful to us. It is obvious where to go. Our work is
                            more active, after purchasing GPS and GIS maps from DPS, the company which surveys the
                            ground information and data. It is more helpful in selling our goods when we install GPS for
                            sale team’s vehicles.
                        <div>
                            <img src="/valuedclients/images/ayeyarhinthar.jpg" alt="ayeyarhinthar"
                                class="responsives" />
                        </div>

                    </div>
                </div>
                <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                    <a href="https://dpsmap.com/valuedclients/">
                            Back to Valued Clients --->
                    </a>
                </div>
            </div>
        </section>
        </br></br>
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