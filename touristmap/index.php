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
        <META NAME="description" content="Design Printing Services, Tourist Map">
        <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#222" />
        <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
        <link rel="manifest" href="/manifest.json">
        <link rel="stylesheet" href="/assets/css/common.css" />
        <link rel="stylesheet" href="/assets/css/responsive.css" />
        <link rel="stylesheet" href="/assets/css/division.css" />
        <link rel="stylesheet" href="/assets/css/yangon.css" />
        <link rel="stylesheet" href="/assets/css/custom_has.css" />
        <link rel="stylesheet" href="/assets/css/1SQFT.css" />
        <!-- Fontawesome -->
        <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />


        <title>Tourist Map - DPS </title>
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

        <link rel="stylesheet" href="/css/zerogrid.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/responsiveslides.css">
        <link rel="stylesheet" href="/css/new_style.css">
        <link rel="stylesheet" href="/css/menu.css">
        <link rel="stylesheet" href="/css/lightbox.min.css">
        <link rel="stylesheet" href="/css/tab_content.css" />
        <link href="/css/ninja-slider.css" rel="stylesheet" type="text/css" />

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
        <script src="/js/jquery-latest.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/jquery183.min.js"></script>
        <script src="/js/ninja-slider.js" type="text/javascript"></script>
        <script src="/js/responsiveslides.min.js"></script>
        <script src="/js/prefixfree.min.js"></script>
        <script src="/js/lightbox-plus-jquery.min.js"></script>

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
            <?php require_once('../widgets/pc-nav-bar.php') ?>
            <?php require_once('../widgets/mobile-nav-bar.php') ?>
        </section>

        <!-- body area -->
        <section id="body">
            <div class="wrap-container clearfix">
                <div id="main-content">
                    <div class="zerogrid">
                        <div class="col-full">
                            <div class="row">
                                <div class="wrap-col">
                                    <div class="header">
                                        <div class="row">
                                            <h1 style="font-size:20px;line-height:20px;letter-spacing:0px;">Tourist Maps
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-col">
                                    <div id="overview_content">
                                        <div class="row">
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>Tourist Maps of Myanmar (TMM)</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/TMM/img1.jpg" alt="Photo_1"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/TMM/img1.jpg" alt="Photo_1"></a>
                                                </p>
                                                <p align="justify">Tourist Maps of Myanmar is a guide map recognised by
                                                    ministry of Hotels & Tourism and clearly provides all necessary
                                                    information. It has also been distributed by DPS in various
                                                    International Travel Fairs.</p>
                                                <!--<a class="button_link" href="myanmarmap.html">Read More</a>-->
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>The Map of Bagan (MOB)</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/bagan/img1.jpg" alt="Photo_3"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/bagan/img1.jpg" alt="Photo_3"></a>
                                                </p>
                                                <p align="justify"> 95% of the tourist visit Bagan where there are
                                                    ancient bulding & culture. The map of Bagan provides necessary
                                                    information for their visit.
                                                </p>
                                                <!--<a class="button_link" href="mapofbagan.html">Read More</a>-->
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>Yangon Tourist Map (YTM)</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/YTM/img1.jpg" alt="Photo_2"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/YTM/img1.jpg" alt="Photo_2"></a>
                                                </p>
                                                <p align="justify">Yangon Tourist Map (YTM)
                                                    is a guide map recognised by ministry of Hotels & Tourism and
                                                    clearly provides all necessary information. It has also been
                                                    distributed by DPS in various International Travel Fairs.</p>
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-col">
                                    <div id="overview_content">
                                        <div class="row">
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>Tourist Map of Nay Pyi Taw</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/NPT/photo1.jpg" alt="Photo_1"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/NPT/photo1.jpg" alt="Photo_1"></a>
                                                </p>
                                                <p align="justify">Tourist Maps of Nay Pyi Taw is a guide map recognised
                                                    by the ministy of Hotels & Tourism and it has been distributed at
                                                    various International Tourism Fairs including.
                                                    ASEAN Tourism Fourm 2015 (ATF) held in Nay Pyi Taw.</p>
                                                <!--<a class="button_link" href="naypyitawmap.html">Read More</a>-->
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>Ngapali Guide Map</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/ngapali/img1.jpg" alt="Photo_2"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/ngapali/img1.jpg"
                                                            alt="Photo_2"></a>
                                                </p>
                                                <p align="justify">Ngapali Guide Map is a guide map recognised by
                                                    ministry of Hotels & Tourism and clearly provides all necessary
                                                    information. It has also been distributed by DPS in various
                                                    International Travel Fairs.</p>
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                            <div class="col-1-3" id="tourist_overview">
                                                <h3>Ngwe Saung Guide Map</h3>
                                                <p><a class="example-image-link"
                                                        href="../images/touristmap/ngwesaung/img1.jpg" alt="Photo_3"
                                                        data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/ngwesaung/img1.jpg"
                                                            alt="Photo_3"></a></p>
                                                <p align="justify">Ngwe Saung Guide Map is a guide map recognised by
                                                    ministry of Hotels & Tourism and clearly provides all necessary
                                                    information. It has also been distributed by DPS in various
                                                    International Travel Fairs.</p>
                                                <a class="button_link" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-col">
                                    <div id="tourist_map_content">
                                        <div class="row">
                                            <p align="justify"> DPS has been distributing Tourist Guide Maps since 1996
                                                under guidance of the Ministry of Hotels & Tourism and published over
                                                2.9 million tourist and maps and distributed to the tourism industry
                                                -<br />
                                                - Tourist Maps of Myanmar (TMM)<br />
                                                - Yangon Tourist Map (YTM)<br />
                                                - The Map of Bagan (MOB)<br />
                                                - Tourist Map of Nay Pyi Taw<br />
                                                - Ngapali Guide Map<br />
                                                - Ngwe Saung Guide Map</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img20.jpg"
                                                        alt="Photo_1" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img20.jpg" alt="Photo_1"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img2.jpg"
                                                        alt="Photo_2" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img2.jpg" alt="Photo_2"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img21.jpg"
                                                        alt="Photo_3" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img21.jpg" alt="Photo_3"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img28.jpg"
                                                        alt="Photo_4" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img28.jpg" alt="Photo_4"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img29.jpg"
                                                        alt="Photo_5" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img29.jpg" alt="Photo_5"></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img10.jpg"
                                                        alt="Photo_6" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img10.jpg" alt="Photo_6"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img6.jpg"
                                                        alt="Photo_7" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img6.jpg" alt="Photo_7"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img7.jpg"
                                                        alt="Photo_8" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img7.jpg" alt="Photo_8"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img13.jpg"
                                                        alt="Photo_9" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img13.jpg" alt="Photo_9"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img14.jpg"
                                                        alt="Photo_10" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img14.jpg" alt="Photo_10"></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img15.jpg"
                                                        alt="Photo_11" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img15.jpg" alt="Photo_11"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img16.jpg"
                                                        alt="Photo_12" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img16.jpg" alt="Photo_12"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img17.jpg"
                                                        alt="Photo_13" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img17.jpg" alt="Photo_13"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img18.jpg"
                                                        alt="Photo_14" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img18.jpg" alt="Photo_14"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img19.jpg"
                                                        alt="Photo_15" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img19.jpg" alt="Photo_15"></a></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img22.jpg"
                                                        alt="Photo_16" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img22.jpg" alt="Photo_16"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img23.jpg"
                                                        alt="Photo_17" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img23.jpg" alt="Photo_17"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img25.jpg"
                                                        alt="Photo_18" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img25.jpg" alt="Photo_18"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img30.jpg"
                                                        alt="Photo_19" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img30.jpg" alt="Photo_19"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img27.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img27.jpg" alt="Photo_20"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img11.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img11.jpg" alt="Photo_21"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img8.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img8.jpg" alt="Photo_22"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img34.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img34.jpg" alt="Photo_23"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img35.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img35.jpg" alt="Photo_24"></a></p>
                                            </div>
                                            <div class="col-1-5" id="tourist_overview">
                                                <p><a class="example-image-link" href="../images/touristmap/img36.jpg"
                                                        alt="Photo_20" data-lightbox="example-set" data-title=""><img
                                                            src="../images/touristmap/img36.jpg" alt="Photo_36"></a></p>
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

        <section id="footer">
            <?php require_once('../widgets/footer.php') ?>
        </section>

        <!-- Fontawesome -->
        <script src="/assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

        <!-- Custom js -->
        <script src="/assets/js/script.js" type="text/javascript"></script>
        <script src="/assets/js/jsResponsive.js" type="text/javascript"></script>

        <!-- App -->
        <script src="/assets/js/app.js" type="text/javascript"></script>

        <!-- Analytics -->
        <script src="/assets/js/analytics.js" type="text/javascript"></script>

    </body>

</html>