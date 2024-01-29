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
    <!--
    <META NAME="keywords" content="Mandalay, Mandalay Map, DPS Map, Map Download, Free Map Download">
    <META NAME="description" content="Mandalay Map, Free Map Download">
    -->
    <meta name="description" content="Discover the beauty and history of Mandalay with our interactive map. Explore top attractions, navigate streets, and uncover the rich cultural heritage of this vibrant city in Myanmar. Plan your journey and find your way effortlessly through Mandalay's iconic landmarks and hidden gems">
    <meta name="keywords" content="Mandalay Map, Explore Mandalay, The Map of Mandalay, Mandalay Landmarks Map, Mandalay Points of Interest">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/mandalay.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Mandalay Map - DPS </title>
    
<style>
        .responsive {
            width: 100%;
            max-width: 960px;
            height: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
            border-radius: 8px;
            max-width: 100%;
            max-height: 100%;
        }

        .items {

            display: grid;
            grid-template-columns: repeat(auto-fit, 200px);

        }

        .item {

            margin: 1rem 0;
            width: 200px;
            height: 50px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
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
    <!--    
        <div class="before-footer" style="padding-top: 30px;">
            <div class="img-container">
                <a href="https://shop.dpsmap.com/index.php/product/mandalay-map-hard-copy/">
                    <img src="../assets/images/Happy_New_Year_2024.png" alt="Happy_New_Year_2024" />
                </a>
            </div>
        </div>
    -->
            <div class="main-content">
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of Mandalay</div>
                            </div>
                        <p class="description">
                            Mandalay is the last royal capital of Myanmar, founded in 1857 by King Mindon based on a dream. 
                            The British conquered Mandalay in 1885, marking the end of monarchy in Myanmar. 
                            Mandalay is the country's cultural capital. 
                            With its amazing wooden palace and pagoda-studded Mandalay Hill, the city will awe you.
                        </p>
                    </div>
                </div>
            </div>
            
        <div class="map-overview-container">

            <div class="map-overview">
                <div class="map-overview-left">

                    <div class="map-overview-image-container">
                        <img src="../assets/images/mandalay/mandalay.jpg" alt="mandalay" />
                    </div>

                </div>
                <div class="map-overview-right" style="padding-left: 30px;">
                    <div class="custom-row">
                        <div class="heading">
                            <div class="main-heading">
                                Mandalay Map
                            </div>
                            <div class="sub-heading">
                                To download full and complete Mandalay Map
                            </div>
                        </div>

                        <ol>
                            <li>Press <a href="../pages/map-download/">Download</a></li>
                            <li>Complete the form and press submit.</li>
                            <li>you will recieve the download clink via email to the email address you have provided</li>
                        </ol>

                    </div>
                    <div class="custom-row">
                        <div class="heading">
                            <div class="main-heading">
                                Mandalay Township Map List
                            </div>
                        </div>
                         <div class="items">
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">1.Aung Myay Thazan Tsp</div>
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">2.Chan Aye Thazan Tsp</div>
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">3.Chan Mya Thazi Tsp</div>
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">4.Maha Aung Myay Tsp</div>
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">5.Pyi Gyi Tagon Tsp</div>
                                <div class="item" style="margin-top: 10px;margin-bottom: 10px;">6.Amarapura Tsp</div>
                            </div>
                        </br>
                        <div>
                            <a href="https://dpsmap.com/mapplotting.shtml">
                                <img src="../assets/images/map-ads.png" class="responsive" alt="map-ads" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="main-content">
            <div class="map-gallery-container">
                <div class="custom-heading-container">
                    <div class="bar-left"></div>
                    <div class="custom-heading">
                        <div class="main-heading">
                            Mandalay Townships' Map
                        </div>
                    </div>
                    <div class="bar-right"></div>
                </div>

                <div class="map-gallery">
                    <div class="custom-row">
                        <?php $getMap('mandalay_map') ?>
                    </div>


                </div>


            </div>
        </div>

    </section>
  
    <!--
    <center>
          <h3>
              <a href="https://dpsmap.com/form105/">
                ပုံစံ(၁၀၅)၊ပုံစံ(၇) လယ်ယာမြေလုပ်ကိုင်ခွင့်မြေပုံအကြောင်း
              </a>
          </h3>
    </center>
  <div class="before-footer">
    <div class="img-container">
        <a href="https://dpsmap.com/form105/">
            <img src="../assets/images/bg-arts/about_map_update.jpg" alt="before-footer" />
        </a>
    </div>
  </div>
    -->
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