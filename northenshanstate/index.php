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
    <META NAME="keywords" content="Yangon Map, Map Download, Free Map Download">
    <META NAME="description" content="Yangon Map, Map Download">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Northenshanstate - DPS Map</title>
    <style>
  .responsive {
  width: 100%;
  height: auto;
  filter: drop-shadow(10px 10px 7px #13566f);
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
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                     အခုတလော ခရီးသွားတွေကြားမှာခေတ်စားနေတဲ့ တိမ်ပင်လယ် ဘယ်မှာရှိလဲသိကြပီလား...?
                    </br></br>
                    </div>
                </div></br></br>
                <div class="description">
  
                    <p>
                     တိမ်ပင်လယ်က မြန်မာနိုင်ငံ ရှမ်းပြည်မြောက်ပိုင်းရဲ့ ထင်ရှားတဲ့ မြို့တစ်မြို့ဖြစ်တဲ့ နောင်ချိုမြို့ရဲ့  အလှတရားတစ်ခုပဲဖြစ်ပါတယ်
နောင်ချိုမြို့မှာဆိုရင် တိမ်ပင်လယ်နဲ့ဂုတ်ထိပ်တံတားတွေကတော့ ခရီးသွားတွေနှစ်သက်တဲ့ လည်ပတ်စရာနေရာတွေပဲဖြစ်ပါတယ်!!</br>
</br>ရှမ်းပြည်နယ်မြောက်ပိုင်းဟာ တောင်တန်း၊ ရေတံခွန်၊ လျှိုမြောင်တွေနဲ့ လှပတဲ့ ပြည်နယ်တစ်ခုဖြစ်ပြီး နောင်ချိုမြို့အပြင် ကွတ်ခိုင်မြို့ရဲ့ လွိုင်ဆမ်ဆစ်တောင်ခြေ နဲ့ သီပေါမြို့တို့ဟာ အခုနောက်ပိုင်း ခရီးသွားသူအကြားရေပန်းစားနေတဲ့နေရာတွေလည်းဖြစ်ပါတယ်...</br>
</br>မြစ်ချောင်းတွေကို အဓိကထားပြီး အသေးစိတ်ရေးဆွဲပေးထားတဲ့ ရှမ်းပြည်နယ်မြောက်ပိုင်းမြေပုံကို လုပ်ငန်းအတွက်ဖြစ်စေ၊ သင်ကြားရေးအတွက်ဖြစ်စေ ဝယ်ယူချင်တယ်ဆိုရင်တော့ DPS ကိုသာဆက်သွယ်လိုက်တော့နော်..
                    </p>
                    </br></br>
                    <div>
                                <img src="../assets/images/shan myouk cloud.jpg" alt="bg-art-map" class="responsive"/>
                            </div>
                </div>
            </div>
        </div>
    </section>
    </br></br></br></br></br>
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