<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('config/urlConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <META NAME="keywords"
            content="myanmar, burma, myanmar map, burma map, the map of myanmar, pyinmana map, naypyidaw map, bagan map, mandalay map, inlay map, mrauk-u map, amarapura map, kyaikhtiyo map, sittwe map, pyinoolwin map, taunggyi map, myanmar photogallery, myanmar travel, myanmar news, beaches in myanmar, myanmar festival, thingyan festival, myanmar free magazines, online myanmar map shop, printing services, Design Printing Service, business card, PRINTING SERVICE, www.dpsmap.com, SERVICE, BUSINESS CARD, SERVICE, WWW.DPSMAP.COM, Service, Business">
        <META NAME="description" content="Design Printing Services, Map Plotting Services">
  <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="assets/css/common.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/division.css" />
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/about-us.css" />
    <link rel="stylesheet" href="assets/css/yangon.css" />
    <link rel="stylesheet" href="assets/css/custom_has.css" />
    <link rel="stylesheet" href="assets/css/1SQFT.css" />
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsiveslides.css">
    <link rel="stylesheet" href="css/new_style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
  <!-- Fontawesome -->
  <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css" />
  
  <link rel="canonical" href="http://www.dpsmap.com/mapplotting.php">

  <title> Map Plotting Services - DPS </title>
    
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
        

        .button:hover {
            text-decoration: none;
            border-color: #377cae #175a9c #0c4893;
            box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2) inset,
                0 1px 1px rgba(5, 64, 140, 0.2);

            background-color: #4fa6e4;
            *zoom: 1;
            filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF4FA6E4', endColorstr='#FF1462C4');
            background-image: -webkit-gradient(linear,
                    50% 0%,
                    50% 100%,
                    color-stop(0%, #4fa6e4),
                    color-stop(100%, #1462c4));
            background-image: -webkit-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
            background-image: -moz-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
            background-image: -o-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
            background-image: linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
        }

        .button:active {
            border-color: #094b84 #094b84 #0f4585;
            box-shadow: 0 1px 1px rgba(241, 243, 247, 0.2),
                0 0 20px rgba(0, 0, 0, 0.5) inset;

            background-color: #1c7ec9;
            *zoom: 1;
            filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF1C7EC9', endColorstr='#FF2395D9');
            background-image: -webkit-gradient(linear,
                    50% 0%,
                    50% 100%,
                    color-stop(0%, #1c7ec9),
                    color-stop(100%, #2395d9));
            background-image: -webkit-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
            background-image: -moz-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
            background-image: -o-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
            background-image: linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
        }
        
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-57336593-1', 'auto');
        ga('send', 'pageview');
        </script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
        </script>
    
</head>

<body>
  <!-- header area -->
  <section id="header">
    <?php require_once('widgets/pc-nav-bar.php') ?>
    <?php require_once('widgets/mobile-nav-bar.php') ?>
  </section>

                <section id="container">
                <div class="wrap-container clearfix">
                    <div id="main-content">

                        <div class="zerogrid">
                            <div class="col-full">
                                <div class="row">
                                    <div class="wrap-col">
                                        <div class="header">
                                            <div class="row">
                                                <div class="col-4-5">
                                                    <h1 style="font-size:20px;line-height:20px;letter-spacing:0px;">Map
                                                        Plotting</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="wrap-col">
                                        <div class="header">
                                            <div class="col-4-4">
                                                <div class="row">

                                                    <p align="justify">Decorate your meeting rooms, office with our
                                                        maps. Just call 09774204020, 09775204020 to choose map, size,
                                                        paper type or for more details.</p>
                                                    <!--center><img src ="images/Map Plotting Photo1.jpg"></center-->
                                                    <div class="col-1-2">
                                                        <a class="example-image-link" href="images/conference_room.jpg"
                                                            alt="conference_room" data-lightbox="example-set"
                                                            data-title=""><img style="width:100%;padding:10px;"
                                                                src="images/conference_room.jpg"
                                                                alt="conference_room"></a>
                                                    </div>
                                                    <div class="col-1-2">
                                                        <a class="example-image-link" href="images/meeting_room.jpg"
                                                            alt="meeting_room" data-lightbox="example-set"
                                                            data-title=""><img style="width:100%;padding:10px;"
                                                                src="images/meeting_room.jpg" alt="meeting_room"></a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <p align="justify">Frames can be installed in your office meeting
                                                        room with a neat and neat layout. These maps can be used to
                                                        customize your map. Size required Plotting allows you to zoom in
                                                        and out with different types of paper (like Photo Paper, Inkjet
                                                        Paper, Vinyl).Many thanks to the entrepreneurs for their
                                                        continued support.</p>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="wrap-col">
                                            <div id="map_plotting_content">
                                                <div class="row">
                                                    <li>Vinyl - 1' x 1' = 10,000 Ks</li>
                                                    <li>Photo Paper - 1' x 1' = 18,000 Ks</li>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1-4" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Myanmar Map</h4>
                                                            <a class="example-image-link"
                                                                href="images/myanmar/myanmar_map.jpg" alt="Myanmar_Map"
                                                                data-lightbox="example-set" data-title=""><img
                                                                    src="images/myanmar/myanmar_map1.jpg"
                                                                    alt="Myanmar_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Size</p>
                                                            <li>2' x 4'</li>
                                                            <li>2.5' x 5'</li>
                                                            <li>3' x 6'</li>
                                                            <li>4' x 8'</li>
                                                        </div>
                                                    </div>
                                                    <div class="col-1-4" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Yangon Map</h4>
                                                            <a class="example-image-link"
                                                                href="yangon/images/map_yangon.jpg" alt="Yangon_Map"
                                                                data-lightbox="example-set" data-title=""><img
                                                                    src="yangon/images/map_yangon.jpg"
                                                                    alt="Yangon_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Size</p>
                                                            <li>3' x 4'</li>
                                                            <li>3' x 5'</li>
                                                            <li>4' x 6'</li>
                                                        </div>
                                                    </div>
                                                    <div class="col-1-4" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Mandalay Map</h4>
                                                            <a class="example-image-link"
                                                                href="mandalay/images/map_mandalay.jpg"
                                                                alt="Mandalay_Map" data-lightbox="example-set"
                                                                data-title=""><img
                                                                    src="mandalay/images/map_mandalay.jpg"
                                                                    alt="Mandalay_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Size</p>
                                                            <li>3' x 5'</li>
                                                            <li>4' x 6'</li>
                                                        </div>
                                                    </div>
                                                    <div class="col-1-4" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Naypyitaw Map</h4>
                                                            <a class="example-image-link"
                                                                href="images/map_naypyitaw.jpg" alt="Naypyitaw_Map"
                                                                data-lightbox="example-set" data-title=""><img
                                                                    src="images/map_naypyitaw.jpg"
                                                                    alt="Naypyitaw_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Size</p>
                                                            <li>4' x 6'</li>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1-3" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Yangon Township Map (Book)</h4>
                                                            <a class="example-image-link"
                                                                href="images/plotting/yangon_township.jpg"
                                                                alt="Yangon_Township_Map" data-lightbox="example-set"
                                                                data-title=""><img
                                                                    src="images/plotting/yangon_township.jpg"
                                                                    alt="Yangon_Township_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Price</p>
                                                            <li>250,000/-ks</li>
                                                            <li>
                                                                Validity date : 30 days
                                                            </li>
                                                            <li>
                                                                <p><a href="https://shop.dpsmap.com/index.php/product/yangon-township-map-book/"
                                                                        class="button">Buy Now</a></p>
                                                            </li>
                                                        </div>
                                                    </div>
                                                    <div class="col-1-3" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>Mandalay Township Map (Book)</h4>
                                                            <a class="example-image-link"
                                                                href="images/plotting/mandalay_township.jpg"
                                                                alt="Mandalay_Township_Map" data-lightbox="example-set"
                                                                data-title=""><img
                                                                    src="images/plotting/mandalay_township.jpg"
                                                                    alt="Mandalay_Township_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Price</p>
                                                            <li>250,000ks/-</li>
                                                            <li>
                                                                Validity date : 30 days
                                                            </li>
                                                            <li>
                                                                <p><a href="https://shop.dpsmap.com/index.php/product/mandalay-township-map-book/"
                                                                        class="button">Buy Now</a>
                                                                </p>
                                                            </li>
                                                        </div>
                                                    </div>
                                                    <div class="col-1-3" id="plot_content">
                                                        <div class="plot_sub_content">
                                                            <h4>State & Division Map (Book)</h4>
                                                            <a class="example-image-link"
                                                                href="images/plotting/state_region_eng.jpg"
                                                                alt="State_Region_Map" data-lightbox="example-set"
                                                                data-title=""><img
                                                                    src="images/plotting/state_region_eng.jpg"
                                                                    alt="State_Region_Map"></a>
                                                            <p
                                                                style="text-align:center; font-weight:bold; text-decoration:underline; font-size:15px;">
                                                                Price</p>
                                                            <li>5,000/-ks</li>
                                                            <li>
                                                                Validity date : 30 days
                                                            </li>
                                                            <li>
                                                                <p><a href="https://shop.dpsmap.com/index.php/product/state-division-map-book/"
                                                                        class="button">Buy Now</a></p>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
  <!-- footer area -->

  <section id="footer">
    <?php require_once('widgets/footer.php') ?>
  </section>
  
  <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57336593-1', 'auto');  ga('send', 'pageview');
  </script>
  
  <!-- Fontawesome -->
  <script src="assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

  <!-- Custom js -->
  <script src="assets/js/script.js" type="text/javascript"></script>
  <script src="assets/js/jsResponsive.js" type="text/javascript"></script>

  <!-- App -->
  <script src="assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="assets/js/analytics.js" type="text/javascript"></script>
  
        <script src="js/jquery-latest.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/jquery183.min.js"></script>
        <script src="js/ninja-slider.js" type="text/javascript"></script>
        <script src="js/responsiveslides.min.js"></script>
        <script src="js/lightbox-plus-jquery.min.js"></script>

</body>

</html>