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
    <META NAME="keywords" content="Naypyitaw Map, Pyinmana Map, DPS Map, Naypyitaw Map Download, Pyinmana Map Download, Free Map Download">
    <META NAME="description" content="Naypyitaw Map, Pyinmana Map, Free Map Download">
    -->
    <meta name="description" content="Unlock the secrets of Naypyitaw's splendor with our interactive map – your gateway to uncovering the capital's hidden treasures, iconic landmarks, and vibrant culture. Seamlessly plan your visit, explore top attractions, and navigate this meticulously designed city effortlessly. Immerse yourself in the heart of Naypyitaw's allure with our comprehensive city guide.">
    <meta name="keywords" content="Naypyitaw Map, Naypyitaw Map Download, Pyinmana Map Download, Free Map Download, Pyinmana Map">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/naypyitaw.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Naypyitaw - DPS Map</title>
    
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
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of NAYPYITAW </div>
                            </div>
                        <p class="description">
                            Naypyitaw was founded on a greenfield site near Pyinmana, about 320 kilometres (200 mi) north of the old capital, Yangon. 
                            Construction started in 2002 and was completed by 2012. 
                            At least 25 construction companies were hired by the military government to build the city.
                        </p>
                    </div>
                </div>
            </div>

        <div class="map-overview-container">

            <div class="map-overview">
                <div class="map-overview-left">

                    <div class="map-overview-image-container">
                        <img src="../assets/images/naypyitaw/npt_map.jpg" alt="naypyitaw" />
                    </div>

                </div>
                <div class="map-overview-right">
                    <div class="custom-row">
                        <div class="heading">
                            <div class="main-heading">
                                Naypyitaw Map
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
                                Naypyitaw Map List
                            </div>
                        </div>
                        <div class="custom-row">
                            <ol>
                                <li>Nay Pyi Taw Central, Hotel Zone</li>
                                <li>Nay Pyi Taw Central, Business Zone</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="custom-hr">

        </div>
        <div class="map-description">
            <div class="custom-heading">
                <div class="main-heading">
                    The digital version of Naypyitaw Map
                </div>
            </div>
            <div class="map-description-left">
                <div class="description">
                    <p>
                        After Naypyitaw is secretly built in 2005 and after the seat of government moved to Naypyitaw,
                        the only map available for this town is a hand-drawn Ministries Map only.
                        As all the government offices had to move to Naypyitaw, all the related business and
                        people has to follow them to Naypyitaw to do their business used to do in Yangon - now the business capital of Myanmar.
                        DPS helped Naypyitaw Development Committee with Bilingual Map of Naypuitaw in 2006.
                        The digital version of Naypyitaw Map was created in Mapinfo based on the AutoCad version from City Planners.
                        DPS staff had to move to Naypyitaw and traveled the barren roads - some ended abruptly into high ditch - clad with GPS and cameras.
                        It took DPS 3 months and a budget of 50,000$ to produce GIS map of Naypyitaw (4422 entries of roads, 225 entries of Points of Interests,
                        184 Village Tracts) together with printed street directory clearly showing the locations of each Government Ministry.
                        It was an instant hit and the books sold out within a week.
                        The digital version of Naypyitaw is kept updated available from DPS. If you are interested in Naypyitaw GIS please write to dpsmap@gmail.com.
                    </p>
                </div>
            </div>
            <div class="map-description-right">
                <div class="image-container">
                    <img src="../assets/images/naypyitaw/npt_book.png" alt="npt_book" />
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="map-gallery-container">
                <div class="custom-heading-container">
                    <div class="bar-left"></div>
                    <div class="custom-heading">
                        <div class="main-heading">
                            Naypyitaw's Map
                        </div>
                    </div>
                    <div class="bar-right"></div>
                </div>

                <div class="map-gallery">
                    <div class="custom-row">
                        <?php $getMap('naypyitaw_map') ?>
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