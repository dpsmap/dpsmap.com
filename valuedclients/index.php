<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../config/urlConfig.php') ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="1sqft, DPS 1sqft" />
        <meta name="description" content="1sqft, DPS MAP 1SQFT" />
        <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="theme-color" content="#222" />
        <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
        <link rel="manifest" href="../manifest.json" />
        <link rel="stylesheet" href="../assets/css/common.css" />
        <link rel="stylesheet" href="../assets/css/responsive.css" />
        <link rel="stylesheet" href="../assets/css/about-us.css" />
        <!-- Fontawesome -->
        <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

        <title> Our Valued Clients </title>
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

            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                     <div class="main-heading">
                        <p style="font-size: 50px;">
                            Valued Clients
                        </p>
                    </div>
                    </br>
                    <div class="main-heading">
                        Telecom 25
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/mpt.php">
                            <img src="../valuedclients/images/mpt-2.jpg" alt="mpt">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/telenor.php">
                            <img src="../valuedclients/images/telenor.jpg" alt="telenor">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ooredoo.php">
                            <img src="../valuedclients/images/ooredoo.jpg" alt="ooredoo">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/securenetwork.php">
                            <img src="../valuedclients/images/securenetwork.jpg" alt="securenetwork">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/elite.php">
                            <img src="../valuedclients/images/elite.jpg" alt="elite">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/sptoa_telecom.php">
                            <img src="../valuedclients/images/sptoa_telecom.jpg" alt="sptoa_telecom">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shwethanlwin.php">
                            <img src="../valuedclients/images/shwethanlwin.jpg" alt="shwethanlwin">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/s`com.php">
                            <img src="../valuedclients/images/sɼom.jpg" alt="sɼom">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/abc.php">
                            <img src="../valuedclients/images/abc.jpg" alt="abc">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/fbt.php">
                            <img src="../valuedclients/images/fbt.jpg" alt="fbt">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ktt.php">
                            <img src="../valuedclients/images/ktt.jpg" alt="ktt">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/vivala.php">
                            <img src="../valuedclients/images/vivala.jpg" alt="vivala">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shwenainggan.php">
                            <img src="../valuedclients/images/shwenainggan.jpg" alt="shwenainggan">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/alcazar.php">
                            <img src="../valuedclients/images/alcazar.jpg" alt="alcazar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/kinetic.php">
                            <img src="../valuedclients/images/kinetic.jpg" alt="kinetic">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/fortune.php">
                            <img src="../valuedclients/images/fortune.jpg" alt="fortune">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/fisca.php">
                            <img src="../valuedclients/images/fisca.jpg" alt="fisca">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/mtn.php">
                            <img src="../valuedclients/images/mtn.jpg" alt="mtn">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/myanmarpadauk.php">
                            <img src="../valuedclients/images/myanmarpadauk.jpg" alt="myanmarpadauk">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/huawei.php">
                            <img src="../valuedclients/images/huawei.jpg" alt="huawei">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ytp.php">
                            <img src="../valuedclients/images/ytp.jpg" alt="ytp">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/act.php">
                            <img src="../valuedclients/images/act.jpg" alt="act">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/horizontelecom.php">
                            <img src="../valuedclients/images/horizontelecom.jpg" alt="horizontele.com">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/smec.php">
                            <img src="../valuedclients/images/smec.jpg" alt="smec">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/Irrrawaddy.php">
                            <img src="../valuedclients/images/Irrrawaddy.jpg" alt="Irrrawaddy">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/eager.php">
                            <img src="../valuedclients/images/eager.jpg" alt="eager">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ericsson.php">
                            <img src="../valuedclients/images/ericsson.jpg" alt="ericsson">
                        </a>
                    </div>

                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Distribution 36
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/carlsberg.php">
                            <img src="../valuedclients/images/carlsberg.jpg" alt="carlsberg">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/unilever.php">
                            <img src="../valuedclients/images/Unilever.jpg" alt="Unilever">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/veve.php">
                            <img src="../valuedclients/images/veve.jpg" alt="veve">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/earthtrading.php">
                            <img src="../valuedclients/images/earthtrading.jpg" alt="earthtrading">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/pro1.php">
                            <img src="../valuedclients/images/pro1.jpg" alt="pro1">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/Rothmans.php">
                            <img src="../valuedclients/images/Rothmans.jpg" alt="Rothmans">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ewallet.php">
                            <img src="../valuedclients/images/ewallet.jpg" alt="ewallet">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/myanmarbeer.php">
                            <img src="../valuedclients/images/myanmarbeer.jpg" alt="myanmarbeer">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shwekyeesnack.php">
                            <img src="../valuedclients/images/shwekyeesnack.jpg" alt="shwekyeesnack">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/igegroup.php">
                            <img src="../valuedclients/images/igegroup.jpg" alt="igegroup">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/taungpawthar.php">
                            <img src="../valuedclients/images/taungpawthar.jpg" alt="taungpawthar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/rhino.php">
                            <img src="../valuedclients/images/rhino.jpg" alt="rhino">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/goldencoco.php">
                            <img src="../valuedclients/images/goldencoco.jpg" alt="goldencoco">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/hightech.php">
                            <img src="../valuedclients/images/hightech.jpg" alt="hightech">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/nibban.php">
                            <img src="../valuedclients/images/nibban.jpg" alt="nibban">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ibtc.php">
                            <img src="../valuedclients/images/ibtc.jpg" alt="ibtc">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/danayazar.php">
                            <img src="../valuedclients/images/danayazar.jpg" alt="danayazar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/wthm.php">
                            <img src="../valuedclients/images/wthm.jpg" alt="wthm">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/grandkmm.php">
                            <img src="../valuedclients/images/grandkmm.jpg" alt="grandkmm">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/technovision.php">
                            <img src="../valuedclients/images/technovision.jpg" alt="technovision">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/Sagittarius_Myanmar.php">
                            <img src="../valuedclients/images/Sagittarius_Myanmar.jpg" alt="Sagittarius_Myanmar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shwepuzun.php">
                            <img src="../valuedclients/images/shwepuzun.jpg" alt="shwepuzun">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/asia_beverages.php">
                            <img src="../valuedclients/images/asia_beverages.jpg" alt="asia_beverages">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/eclion_global.php">
                            <img src="../valuedclients/images/eclion_global.jpg" alt="eclion_global">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/mkw.php">
                            <img src="../valuedclients/images/mkw.jpg" alt="mkw">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/lohein.php">
                            <img src="../valuedclients/images/lohein.jpg" alt="lohein">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/mega.php">
                            <img src="../valuedclients/images/mega.jpg" alt="mega">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/samparoo.php">
                            <img src="../valuedclients/images/samparoo.jpg" alt="samparoo">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/diamondstar.php">
                            <img src="../valuedclients/images/diamondstar.jpg" alt="diamondstar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/dagon_beverages.php">
                            <img src="../valuedclients/images/dagon_beverages.jpg" alt="dagon_beverages">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shweyamone.php">
                            <img src="../valuedclients/images/shweyamone.jpg" alt="shweyamone">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/create_moster_company.php">
                            <img src="../valuedclients/images/create_moster_company.jpg" alt="create_moster_company">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/shanshwetaung.php">
                            <img src="../valuedclients/images/shanshwetaung.jpg" alt="shanshwetaung">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/globalsky.php">
                            <img src="../valuedclients/images/globalsky.jpg" alt="globalsky">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ayeyarhinthar.php">
                            <img src="../valuedclients/images/ayeyarhinthar.jpg" alt="ayeyarhinthar">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/khinmaungnyuntmanufacturingyan.php">
                            <img src="../valuedclients/images/khinmaungnyuntmanufacturingyan.jpg" alt="khinmaungnyuntmanufacturingyan">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/asia-sun.php">
                            <img src="../valuedclients/images/asia-sun.jpg" alt="asia-sun">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/redline.php">
                            <img src="../valuedclients/images/redline.jpg" alt="redline">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/moeyan.php">
                            <img src="../valuedclients/images/moeyan.jpg" alt="moeyan">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/sitawgyi.php">
                            <img src="../valuedclients/images/sitawgyi.jpg" alt="sitawgyi">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/mastech.php">
                            <img src="../valuedclients/images/mastech.jpg" alt="mastech">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/umg.php">
                            <img src="../valuedclients/images/umg.jpg" alt="umg">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/asia_motor_works.php">
                            <img src="../valuedclients/images/asia_motor_works.jpg" alt="asia_motor_works">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/nidicarrental.php">
                            <img src="../valuedclients/images/nidicarrental.jpg" alt="nidicarrental">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/hiang_kie_coffee.php">
                            <img src="../valuedclients/images/hiang_kie_coffee.jpg" alt="hiang_kie_coffee">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/tns.php">
                            <img src="../valuedclients/images/tns.jpg" alt="tns">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/1plusdrinkingwater.php">
                            <img src="../valuedclients/images/1plusdrinkingwater.jpg" alt="1plusdrinkingwater">
                        </a>
                    </div>
                    
                </div>
            </div>
            
             <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        NGO 5
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/who.php">
                            <img src="../valuedclients/images/who.jpg" alt="who">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/merlin.php">
                            <img src="../valuedclients/images/merlin.jpg" alt="merlin">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/unhcr.php">
                            <img src="../valuedclients/images/unhcr.jpg" alt="unhcr">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/undp.php">
                            <img src="../valuedclients/images/undp.jpg" alt="undp">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/ffss.php">
                            <img src="../valuedclients/images/ffss.jpg" alt="ffss">
                        </a>
                    </div>
                    
                    
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Infrastructure 2
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/jica.php">
                            <img src="../valuedclients/images/jica.jpg" alt="jica">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/kwater.php">
                            <img src="../valuedclients/images/kwater.jpg" alt="kwater">
                        </a>
                    </div>
                    
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Logistic 1
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/efr.php">
                            <img src="../valuedclients/images/efr.jpg" alt="efr">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Media 1
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/media.php">
                            <img src="../valuedclients/images/media.jpg" alt="media">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Engineering 3
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/teso.php">
                            <img src="../valuedclients/images/teso.jpg" alt="teso">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/klc.php">
                            <img src="../valuedclients/images/klc.jpg" alt="klc">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/nippon.php">
                            <img src="../valuedclients/images/nippon.jpg" alt="nippon">
                        </a>
                    </div>
                    
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Bank 3
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/kbzbank.php">
                            <img src="../valuedclients/images/kbzbank.jpg" alt="kbzbank">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/cbbank.php">
                            <img src="../valuedclients/images/cbbank.jpg" alt="cbbank">
                        </a>
                    </div>
                    
                    <div class="image-container">
                        <a href="../gis/uabbank.php">
                            <img src="../valuedclients/images/uabbank.jpg" alt="uabbank">
                        </a>
                    </div>
                    
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Mining 1
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/buga.php">
                            <img src="../valuedclients/images/buga.jpg" alt="buga">
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="valued-clients" style="margin-bottom: 100px;margin-top: 40px;">
                <div class="custom-heading">
                    <div class="main-heading">
                        Oil & Gas 1
                    </div>
                </div>
                <div class="image-row">
                    
                    <div class="image-container">
                        <a href="../gis/gis.php">
                            <img src="../valuedclients/images/gis.jpg" alt="gis">
                        </a>
                    </div>
                </div>
            </div>

        </section>

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