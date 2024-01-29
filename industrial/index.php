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

    <title>Industrial - DPS Map</title>
    
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
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        Our Products
                    </div>
                </div>
                <div class="description">
                    <p>
                        ရန်ကုန်စက်မှုဇုန်များပြမြေပုံစာအုပ်သည် ရန်ကုန်မြို့တော်အညွှန်းပြမြေပုံအတွင်းမှာပါဝင်တဲ့ စက်မှုဇုန်ပေါင်း ၃၀ ရဲ့ မြေပုံတွေကို တစ်ခုချင်းစီအလိုက် လမ်းနှင့် စက်မှုဇုန်အကွက်အတိုင်းဖော်ပြရေးဆွဲထားခြင်းဖြစ်ပါတယ်။
                        စက်ရုံ၊ အလုပ်ရုံများနှင့် ချိတ်ဆက်လုပ်ကိုင်နေရသော လုပ်ငန်းရှင်များအတွက် Yangon Industrial Zone Index Map ပါဝင်မှာဖြစ်ပြီး ငွေပင်လယ်စက်မှုဇုန်၊ မင်္ဂလာဒုံစက်မှုဇုန်တို့ကို satellite map view ဖြင့်အသုံးပြုနိုင်အောင်ထည့်သွင်းပေးထားပါတယ်။
                        ရန်ကုန်မြို့၏စက်မှုဇုန် ၃၀ ရဲ့မြေပုံတွေကို A3 Size Paperနှင့် ကြည်တောက်ရှင်း‌ Quality ဖြင့် အသုံးပြုနိုင်အောင် ပြုလုပ်ပေးထားခြင်းဖြစ်ပြီး မြေပုံတစ်ပုံချင်းစီအလိုက်လည်းရွေးချယ်ဝယ်ယူနိုင်ပါတယ်…
                    </p>
                </div>
            </div>
            
             <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            <span class="sub-heading">Yangon Industrial Zone Index Map</span>
          </div>
          <div class="about-us-row">
            <div class="about-us-left">
              <div class="description-container">
                <p class="description">
                 <ul>
                     <li>   1.	Dagon Myothit East Industrial Zone (1) </li></br>
                      <li>  2.	Dagon Myothit East Industrial Zone (2) </li></br>
                      <li>  3.	Dagon Myothit North Business Development Zone </li></br>
                      <li>  4.	Dagon Seikkan Industrial Zone (1) </li></br>
                     <li>   5.	Dagon Seikkan Industrial Zone (2) </li></br>
                      <li>  6.	Dagon Myothit South Industrial Zone (1) </li></br>
                     <li>   7.	Dagon Myothit South Industrial Zone (2) </li></br>
                     <li>   8.	Dagon Myothit South Industrial Zone (3)</li></br>
                     <li>   9.	Hlaing Thar Yar Industrial Zone (1) </li></br>
                     <li>   10.	Hlaing Thar Yar Industrial Zone (2)</li></br>
                     <li>   11.	Hlaing Thar Yar Industrial Zone (3)</li></br>
                     <li>   12.	Hlaing Thar Yar Industrial Zone (4)</li></br>
                     <li>   13.	Hlaing Thar Yar Industrial Zone (5)</li></br>
                     <li>   14.	Hlaing Thar Yar Industrial Zone (6)</li></br>
                     <li>   15.	Hlaing Thar Yar Industrial Zone (7)</li></br>
                     <li>   16.	Mingalardon Industrial Zone</li></br>
                     <li>   17.	Ngwe Pinlal Industrial Zone</li></br>
                     <li>   18.	North Okkalarpa Industrial Zone</li></br>
                     <li>   19.	Shwe Lin Ban Industrial Zone</li></br>
                     <li>   20.	Shwe Pauk Kan Industrial Zone</li></br>
                     <li>   21.	Shwe Pyi Thar Industrial Zone (1)</li></br>
                     <li>   22.	Shwe Pyi Thar Industrial Zone (2)</li></br>
                     <li>   23.	Shwe Pyi Thar Industrial Zone (3)</li></br>
                     <li>   24.	Shwe Pyi Thar Industrial Zone (4)</li></br>
                     <li>   25.	Shwe Than Lwin Industrial Zone</li></br>
                     <li>   26.	Thar Du Kan Industrial Zone</li></br>
                     <li>   27.	Tharketa Industrial Zone</li></br>
                     <li>   28.	Thilawa Industrial Zone </li></br>
                     <li>   29.	War Ta Yar Industrial Zone</li></br>
                     <li>   30.	Yangon Industrial Park</li></br>
                        </ul>
                </p>
              </div>
            </div>
            <div class="about-us-right">
              <div class="bg-art-container">
                 <img src="../assets/images/YGN_Industrial_Zone_Map.jpg" alt="bg-art-map" />
              </div>
            </div>
          </div>
        </div>
      </div>
            
            
    <!--    <div class="img-container">
            <img src="../assets/images/YGN_Industrial_Zone_Map.jpg" alt="before-footer" />
             <ul>
                     <li>   1.	Dagon Myothit East Industrial Zone (1) </li></br>
                      <li>  2.	Dagon Myothit East Industrial Zone (2) </li></br>
                      <li>  3.	Dagon Myothit North Business Development Zone </li></br>
                      <li>  4.	Dagon Seikkan Industrial Zone (1) </li></br>
                     <li>   5.	Dagon Seikkan Industrial Zone (2) </li></br>
                      <li>  6.	Dagon Myothit South Industrial Zone (1) </li></br>
                     <li>   7.	Dagon Myothit South Industrial Zone (2) </li></br>
                     <li>   8.	Dagon Myothit South Industrial Zone (3)</li></br>
                     <li>   9.	Hlaing Thar Yar Industrial Zone (1) </li></br>
                     <li>   10.	Hlaing Thar Yar Industrial Zone (2)</li></br>
                     <li>   11.	Hlaing Thar Yar Industrial Zone (3)</li></br>
                     <li>   12.	Hlaing Thar Yar Industrial Zone (4)</li></br>
                     <li>   13.	Hlaing Thar Yar Industrial Zone (5)</li></br>
                     <li>   14.	Hlaing Thar Yar Industrial Zone (6)</li></br>
                     <li>   15.	Hlaing Thar Yar Industrial Zone (7)</li></br>
                     <li>   16.	Mingalardon Industrial Zone</li></br>
                     <li>   17.	Ngwe Pinlal Industrial Zone</li></br>
                     <li>   18.	North Okkalarpa Industrial Zone</li></br>
                     <li>   19.	Shwe Lin Ban Industrial Zone</li></br>
                     <li>   20.	Shwe Pauk Kan Industrial Zone</li></br>
                     <li>   21.	Shwe Pyi Thar Industrial Zone (1)</li></br>
                     <li>   22.	Shwe Pyi Thar Industrial Zone (2)</li></br>
                     <li>   23.	Shwe Pyi Thar Industrial Zone (3)</li></br>
                     <li>   24.	Shwe Pyi Thar Industrial Zone (4)</li></br>
                     <li>   25.	Shwe Than Lwin Industrial Zone</li></br>
                     <li>   26.	Thar Du Kan Industrial Zone</li></br>
                     <li>   27.	Tharketa Industrial Zone</li></br>
                     <li>   28.	Thilawa Industrial Zone </li></br>
                     <li>   29.	War Ta Yar Industrial Zone</li></br>
                     <li>   30.	Yangon Industrial Park</li></br>
                        </ul>
        </div>-->
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