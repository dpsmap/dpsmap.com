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
        <meta name="keywords" content="Myanmar Map, map of Myanmar, Free Map Download, Myanmar language map" />
        <meta name="description" content="Explore Myanmar with our comprehensive map. Download Myanmar map for free, including language-specific versions." />
        <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#222" />
        <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
        <link rel="manifest" href="../manifest.json" />
        <link rel="stylesheet" href="../assets/css/common.css" />
        <link rel="stylesheet" href="../assets/css/home.css" />
        <link rel="stylesheet" href="../assets/css/responsive.css" />
        <link rel="stylesheet" href="../assets/css/division.css" />
        <link rel="stylesheet" href="../assets/css/myanmar.css" />
        <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />
        
        <link rel="canonical" href="https://dpsmap.com/myanmar/" />

        <title>Myanmar Map - DPS</title>

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
            width: 100px;
            height: 20px;
            color: black;
            display: flex;
            justify-content: left;
            align-items: left;
        }
        </style>
    </head>

    <body>
        <section id="header">
            <?php require_once('../widgets/pc-nav-bar.php'); ?>
            <?php require_once('../widgets/mobile-nav-bar.php'); ?>
        </section>

        <section id="body">
        <!--    
      <div class="before-footer" style="padding-top: 30px;">
        <div class="img-container">
            <a href="https://shop.dpsmap.com/index.php/product/myanmar-map-hard-copy/">
                <img src="../assets/images/Happy_New_Year_2024.png" alt="Happy_New_Year_2024" />
            </a>
        </div>
      </div>
            -->
            <div class="main-content">
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of Myanmar</div>
                            </div>
                        <p class="description">
                            "Explore Myanmar's diverse landscapes and rich cultural heritage with our interactive
                            Myanmar map.
                            This detailed map of Myanmar provides a comprehensive overview of the country's geography,
                            including its regions, cities, and prominent landmarks.
                            Whether you're planning a trip to the stunning temples of Bagan, the serene shores of Inle
                            Lake, or the bustling streets of Yangon, our Myanmar map is an invaluable resource for
                            travelers.
                            Discover the top tourist destinations, historical sites, and natural wonders, and plan your
                            journey through this enchanting Southeast Asian nation with ease.
                            Click here to view and interact with our Myanmar map, and start your adventure in this
                            captivating destination."
                        </p>
                    </div>
                </div>
            </div>
            <div class="map-overview-container">
                <div class="map-overview">
                    <div class="map-overview-left">
                        <div class="map-overview-image-container">
                            <img src="../assets/images/myanmar/eng_myanmarmap.jpg" alt="Myanmar Map" />
                        </div>
                    </div>
                    <div class="map-overview-right" style="padding-left: 30px;">
                        <div class="custom-row">
                            <div class="heading">
                                <div class="main-heading">Map of Myanmar's States and Regions</div>
                                <div class="sub-heading">Download the full map of Myanmar</div>
                            </div>
                            <ol>
                                <li>Press <a href="../pages/map-download/">Download</a></li>
                                <li>Complete the form and press submit.</li>
                                <li>You will receive the download link via email to the address you provided.</li>
                            </ol>
                        </div>
                        <div class="custom-row">
                            <div class="heading">
                                <div class="main-heading">Myanmar State and Region Map List</div>
                            </div>
                            <div class="items">
                            <?php
                            $regions = [
                                "Ayeyarwaddy", "Bago", "Chin", "Kachin", "Kayah", "Kayin",
                                "Magway", "Mandalay", "Mon", "Rakhine", "Sagaing", "Shan", "Tanintharyi", "Yangon"
                            ];
                            foreach ($regions as $region) {
                                echo '<div class="item">' . $region . '</div>';
                            }
                            ?>
                            </div>
                            <div>
                                <a href="https://dpsmap.com/mapplotting.shtml">
                                    <img src="../assets/images/map-ads.png" class="responsive" alt="Map Ads" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="map-gallery-container">
                    <div class="custom-heading-container" id="en">
                        <div class="bar-left"></div>
                        <div class="custom-heading">
                            <div class="main-heading">Myanmar State and Region Map (ENGLISH Version)</div>
                        </div>
                        <div class="bar-right"></div>
                    </div>
                    <div class="map-gallery">
                        <div class="custom-row">
                            <?php $getMapMultiple('myanmar_map', 'eng'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content">
                <div class="map-gallery-container">
                    <div class="custom-heading-container" id="mm">
                        <div class="bar-left"></div>
                        <div class="custom-heading">
                            <div class="main-heading">Myanmar State and Region Map (MYANMAR Version)</div>
                        </div>
                        <div class="bar-right"></div>
                    </div>
                    <div class="map-gallery">
                        <div class="custom-row">
                            <?php $getMapMultiple('myanmar_map', 'mm'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="footer">
            <?php require_once('../widgets/footer.php'); ?>
        </section>

        <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>
        <script src="../assets/js/script.js" type="text/javascript"></script>
        <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>
        <script src="../assets/js/app.js" type="text/javascript"></script>
        <script src="../assets/js/analytics.js" type="text/javascript"></script>
    </body>

</html>