<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../functions/mapOutput.php');
require_once('../config/urlConfig.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <META NAME="keywords" content="Inlay Map Download, Free Map Download">
        <META NAME="description"
            content="Design Printing Services : Publish the whole Map of Myanmar(Burma) and Free tourist maps and then printing service for business cards, Brochures.">
    <meta
      name="google-site-verification"
      content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222" />
    <link
      rel="shortcut icon"
      href="../assets/favicon/favicon-512x512.png"
      sizes="512x512"
      type="image/x-icon"
    />
  <link rel="manifest" href="../manifest.json">
  <link rel="stylesheet" href="../assets/css/common.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />
  <link rel="stylesheet" href="../assets/css/division.css" />
  <link rel="stylesheet" href="../assets/css/yangon.css" />
  <link rel="stylesheet" href="../assets/css/custom_has.css" />
  <link rel="stylesheet" href="../assets/css/1SQFT.css" />
  <link rel="stylesheet" href="../assets/css/home.css" />
  <!-- Fontawesome -->
  <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Inlay Map - DPS </title>
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
                                <div class="main-heading">The Map Of Inlay</div>
                            </div>
                        <p class="description">
                            Inlay Lake is located in the heart of the Shan Plateau. It is a beautiful highland lake, 900 meters above sea level. 
                            The lake is 22km long and 10km across, and inhabited by many different ethnic nationals of the area. 
                            The Intha are the Lake dwellers who are unique for their leg rowing. Leg rowed traditional boats are the main ceremonial attractions of the Inlay Lake.
                        </p>
                    </div>
                </div>
        </div>
    
        <div class="map-overview-container">

      <div class="map-overview">
        <div class="map-overview-left">

          <div class="map-overview-image-container">
            <img src="images/inlay_map.jpg" alt="Amarapura Map" />
                      
          </div>
        </div>
        <div class="map-overview-right" style="padding-left: 30px;">
          <div class="custom-row">
            <div class="heading">
              <div class="main-heading">
                Inlay Map
              </div>
              <div class="sub-heading">
                To download full and complete Inlay Map
              </div>
            </div>

            <ol>
              <li>Press <a href="../pages/map-download/?value=Inlay">Download</a></li>
              <li>Complete the form and press submit.</li>
              <li>you will recieve the download link via email to the email address you have provided</li>
            </ol>

          </div>
             <div class="custom-row">
            <div>
              <h3>
                  About Inlay Lake (INLE)
              </h3>
              <p>
                  This vast picturesque lake, 900 metres above sea-level, is one of the main tourist attractions in Myanmar. The lake, 22 km long and 10 km across, has a population of some 150,000 many of whom live on floating islands of vegetation. Inlay Lake, natural and unpolluted, is famous for its scenic beauty and the unique leg-rowing of the Inthas, the native lake dwellers.
              </p>
              </br>
              <h3>How to get there</h3>
              <p>The most convenient way is to fly from Yangon to Heho, which is the nearest airport to the lake. There are daily flights to Heho which take about one hour. The flight from Mandalay to Heho takes only 20 minutes. Travelling by car along the uphill and winding road over the Shan Plateau, taking long hours is interesting the nearest station to the Lake.</p>
              </br>
              <h3>Where to Stay</h3>
              <p>There are newly built cottage-style hotels with modern facilities on the Lake and modern-style hotels at Nayung-shwe, which is the gateway to Inlay Lake.</p>
              </br>
              <h3>What to See</h3>
              <h4>Ywama</h4>
              <p>The largest village on the inlay Lake; its streets are a web of canals. There are some beautiful teak houses built on large wooden poles driven into the Lake bed. The main activity and attraction is at the floating market in the largest canal.</p>
              </br>
            </div>
             <div>
                <a href="https://dpsmap.com/mapplotting.shtml">
                    <img src="../assets/images/map-ads.png" class="responsive" >
                </a>
            </div>
            
        </div>
      </div>

    </div>
    
    </section>

    <section id="footer">
      <?php require_once('../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script
      src="../assets/libs/fontawesome/js/all.min.js"
      type="text/javascript"
    ></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>

    <!-- App -->
    <script src="../assets/js/app.js" type="text/javascript"></script>

    <!-- Analytics -->
    <script src="../assets/js/analytics.js" type="text/javascript"></script>
  </body>
</html>
