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

    <title>Website-Services by DPS</title>
    
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
        <div class="main-content">
            <div class="our-services-container">
                <div class="our-services">
                    <div class="heading">
                        <span class="main-heading">Website Services</span>
                    </div>
                    <div class="our-services-row">
                        <div class="our-services-left">
                            <div class="description-container">
                                <p class="description">


                                </p>
                            </div>
                        </div>
                        <div class="our-services-right">

                            <div class="custom-card">
                                <div class="custom-card-title">Web Design</div>
                                <div class="custom-card-description">
                                    We give the best design for our customers.
                                </div>
                                <div align="center">
                                    <i class="fa-solid fa-computer" style="width: 200px;height:200px;"></i>
                                </div>
                                </br>
                                </br>
                                <a href="#">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>

                            <!-- card end -->

                            <div class="custom-card">
                                <div class="custom-card-title">Web Developing Techniques</div>
                                <div class="custom-card-description">
                                    We develop the websites with pure programming language, wordpress and dreamweaver.
                                </div>
                                <div align="center">
                                    <i class="fa-solid fa-code" style="width: 180px;height:180px;"></i>
                                </div>
                                <a href="#">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>

                            <!-- card end -->

                            <div class="custom-card">
                                <div class="custom-card-title">Web Services</div>
                                <div class="custom-card-description">
                                    We support all web services such as pinning the business at google map, webmail services, ftp services and etc..
                                </div>
                                <div align="center">
                                    <i class="fa-solid fa-envelope-open-text" style="width: 180px;height:180px;"></i>
                                </div>
                                </br>
                                </br>
                                <a href="#">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
                            </div>

                            <!-- card end -->

                        </div>
                    </div>
                </div>
            </div>
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