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
        <META NAME="description" content="Design Printing Services, Amarapura Map">
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

    <title>Kyaiktiyo Map - DPS </title>
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
                                <div class="main-heading">The Map Of KYAIKTIYO </div>
                            </div>
                        <p class="description">
                            This mystical pagoda built in the enshrinement of Buddha relic stands on a gold gilded boulder, precariously perched on the edge of the hill over 1100 km above sea-level.
                            The big boulder the circumference of which is about 50 feet, rests on top - to be exact - on the edge of the rock. At a glance, with ignorance of the gravity, 
                            it appears that the boulder will fall at a slight push. The shape of boulder is like a human head. A small pagoda 23 feet high, was built on top of that boulder. 
                            <a href="#golden_rock">read more...</a>
                        </p>
                    </div>
                </div>
        </div>
    
        <div class="map-overview-container">

      <div class="map-overview">
        <div class="map-overview-left">

          <div class="map-overview-image-container">
            <img src="images/kyaiktiyo_map.jpg" alt="Kyaiktiyo Map" style="padding-bottom: 30px;"/>
                      
          </div>
        </div>
        <div class="map-overview-right" style="padding-left: 30px;">
          <div class="custom-row">
            <div class="heading">
              <div class="main-heading">
                Kyaiktiyo Map
              </div>
              <div class="sub-heading">
                To download full and complete Kyaiktiyo Map
              </div>
            </div>

            <ol>
              <li>Press <a href="../pages/map-download/?value=Kyaiktiyo">Download</a></li>
              <li>Complete the form and press submit.</li>
              <li>you will recieve the download link via email to the email address you have provided</li>
            </ol>

          </div>
             <div class="custom-row" id="golden_rock">
                <div class="heading">
                      <div class="main-heading">
                         Kyaiktiyo - Golden Rock
                      </div>
                </div>
                </br>
                <p class="description">This mystical pagoda built in the enshrinement of Buddha relic stands on a gold gilded boulder, precariously perched on the edge of the hill over 1100 km above sea-level.The big boulder the circumference of which is about 50 feet, rests on top - to be exact - on the edge of the rock. At a glance, with ignorance of the gravity, it appears that the boulder will fall at a slight push. The shape of boulder is like a human head. A small pagoda 23 feet high, was built on top of that boulder. By using a piece of bamboo strips as a lever, with a piece of thread tied to one end and placed under the rock you can pass the thread from one side to the other side of the boulder which goes to show that the boulder supporting the Kyaiktiyo Pagoda does not touch the rock below it. The pagoda on top of the boulder is called in Mon language Kyaik-I -thi-ro, which means "pagoda carried by a hermit on the head" Kyaik-I-thi-ro later came to be known as Kyaiktiyo Pagoda. The hill on which the Pagoda stands is also called Kyaiktiyo Hill.</p>
                <p>It takes about 5 hours to reach Kinpun base camp at the foot of the hill. When getting there, you can enjoy 'trekking taking 4 fours' or 'a steep winding motorway heading to the nearest camp of the pagoda. Many legends about the pagoda and the 'nats' or 'spirits' can not be counted.</p>
                <p>Kyaikto, the town at the foot of the hill, is about 160 km from Yangon. It is a 11 km uphill climb for the hikers from Kinpun base camp. There is also a steep winding road for 4-wheel drive cars from the base to the nearest point of the pagoda. There are many legends about the pagoda and the 'nats' or 'spirits'. Kyaikhto Hotel and Golden Rock Hotel have modern facilities for tourists.</p>
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
