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

        <title> DAGON BEVERAGES and DPS Map </title>
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
                            DAGON BEVERAGES
                        </div>
                    </div></br></br>
                    <div class="description">

                        <p class="big">
                            Our Dagon Beverages Co., Ltd distributes barley juice the whole country. Our distribution
                            field is wide. We would like to plan uploading the location of distribution shops in various
                            places around the country. After uploading the location of the shops on map, it is obvious
                            the rest locations of the shops. After installing the GIS from DPS it is going than before
                            because we upload the locations and routes of the directions. Although there were staff
                            changes, there is no problem about not going the target places that drivers don’t know
                            before because we can prepare about the directions on maps. To reduce unneeded
                            transportation, we installed GPS devices from DPS. We can also see the directions that they
                            have reached.
                        <div>
                            <img src="/valuedclients/images/dagon_beverages.jpg" alt="dagon_beverages"
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