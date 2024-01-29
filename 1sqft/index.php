<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../config/urlConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="1sqft, DPS 1sqft">
    <META NAME="description" content="1sqft, DPS MAP 1SQFT">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/1SQFT.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>1SQFT - DPS Map</title>
    
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
        
    <div>
        <div class="custom-heading arc">
            <div class="main-heading">
                တစ်ပေပတ်လည်နှုန်းထားများ လမ်းနှင့်တွဲပြသောမြေပုံ
            </div>
        </div>

        <div class="arc-gis-container">
            
           <iframe width="100%" height="500px" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" title="House One Square Feet Price Map" src="//www.arcgis.com/apps/Embed/index.html?webmap=a1d5eb700c3d4731b2f3c75ad1f13e3c&extent=95.9495,16.7527,96.4566,17.033&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light">
           </iframe>
            
        </div>
    </div>
    
        <div class="custom-spacer">
            <div class="custom-hr"></div>
        </div>

        <div class="how-to-use-container">

            <div class="how-to-use">
                <div class="custom-heading">
                    <div class="main-heading">
                        How to use this map
                    </div>
                    <div class="sub-heading">
                        မြေပုံတွင်တွေ့ရသည့် အနီရောင်ဖြင့်ဖော်ပြထားသော ကိန်းဂဏန်းများမှာ တစ်ပေပတ်လည်ဈေးနှုန်းများဖြစ်ပါသည်။
                        ထို ကိန်းဂဏန်းများကို click နှိပ်ကြည့်ပါက drop box တစ်ခုကျလာပါမည်။
                        <br />
                        Box ထဲတွင် -
                    </div>
                </div>
                <ol>
                    <li>တစ်ပေပတ်လည်ဈေး</li>
                    <li>အစိုးရအခွန်စည်းကြပ်စာအုပ်စာမျက်နှာ</li>
                    <li>၎င်းစာအုပ်ခေါင်းစဉ်နံပါတ်</li>
                    <li>မြို့နယ်</li>
                    <li>လမ်းကျဉ်း/ ကျယ်</li>
                    <li>လမ်းနာမည်</li>
                    <li>မြို့နယ်</li>
                    <li>လမ်း ဆိုပြီးပါပါတယ်။</li>
                </ol>
                <div class="arc-gis-tutorial-container">
                    <iframe src="https://player.vimeo.com/video/578732766?autoplay=1&amp;loop=1" frameborder="0" allow="fullscreen; picture-in-picture" allowfullscreen="" __idm_id__="1269761" data-ready="true">
                    </iframe>
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