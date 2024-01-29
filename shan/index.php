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
    <META NAME="keywords"
            content="myanmar, burma, myanmar map, burma map, the map of myanmar, pyinmana map, naypyidaw map, bagan map, mandalay map, inlay map, mrauk-u map, amarapura map, kyaikhtiyo map, sittwe map, pyinoolwin map, taunggyi map, myanmar photogallery, myanmar travel, myanmar news, beaches in myanmar, myanmar festival, thingyan festival, myanmar free magazines, online myanmar map shop, printing services, Design Printing Service, business card, PRINTING SERVICE, www.dpsmap.com, SERVICE, BUSINESS CARD, SERVICE, WWW.DPSMAP.COM, Service, Business">
        <META NAME="description" content="Design Printing Services,Shan Map, Shan Map Free Download">
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
  <link rel="stylesheet" href="../assets/css/home.css" />
  <!-- Fontawesome -->
  <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Shan Map - DPS </title>
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
    <!--    
      <div class="before-footer" style="padding-top: 30px;">
        <div class="img-container">
            <a href="https://shop.dpsmap.com/index.php/product/shan-state-map-hard-copy/">
                <img src="../assets/images/Happy_New_Year_2024.png" alt="Happy_New_Year_2024" />
            </a>
        </div>
      </div>
    -->
    
        <div class="main-content">
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of Shan State</div>
                            </div>
                        <p class="description">
                            The Shan States were a dominant force in the politics of Upper Burma throughout the 13th to 16th centuries. 
                            The strongest Shan States, Mogaung, Mongyang and Hsenwi, constantly raided Upper Burma. 
                            Mogaung ended the kingdoms of Sagaing and Pinya in 1364.
                        </p>
                    </div>
                </div>
        </div>
        
        <div class="map-overview-container">

      <div class="map-overview">
        <div class="map-overview-left">

          <div class="map-overview-image-container">
            <img src="../downloadmap/images/ShanMap.jpg" alt="Shan Map" />
                      
          </div>
        </div>
        <div class="map-overview-right" style="padding-left: 30px;">
          <div class="custom-row">
            <div class="heading">
              <div class="main-heading">
                Shan Map
              </div>
              <div class="sub-heading">
                To download full and complete Shan Map
              </div>
            </div>

            <ol>
              <li>Press <a href="../map-download/?value=Mon">Download</a></li>
              <li>Complete the form and press submit.</li>
              <li>you will recieve the download link via email to the email address you have provided</li>
            </ol>

          </div>
             <div class="custom-row">
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
