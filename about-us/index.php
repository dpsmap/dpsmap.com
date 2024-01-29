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
    <META NAME="keywords" content="1sqft, DPS 1sqft">
    <META NAME="description" content="1sqft, DPS MAP 1SQFT">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../../manifest.json">
    <link rel="stylesheet" href="../../assets/css/common.css" />
    <link rel="stylesheet" href="../../assets/css/responsive.css" />
    <link rel="stylesheet" href="../../assets/css/about-us.css" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.min.css" />

    <title>About Us - DPS Map</title>
    <style>
        .button {
          background-color: #4CAF50;
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
        }
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
        <div class="company-profile">
            <div class="custom-heading">
                <div class="main-heading">
                Why DPS?..
                </div>
                    <div class="sub-heading">
                    DPS ရဲ့ service တွေကို ဘာကြောင့်သုံးစွဲသင့်တာလဲ?..
                    </div>
                <div class="company-profile-wrapper">
                    <div class="description">
                    Design Printing Service Co.,Ltd ကို ၁၉၉၅ ခုနှစ်မှာစတင်ဖွဲ့စည်းခဲ့ပြီး ၁၉၉၆ ခုနှစ်မှာတော့ ရန်ကုန်မြို့၏ အထင်ကရမြေပုံ ဖြစ်သည့် “ရန်ကုန်လမ်းညွန်မြေပုံ” ကို ထုတ်ဝေနိုင်ခဲ့ပါတယ်။ ဒီနေ့အချိန်အထိ Geographical Information System (GIS) နည်းပညာနှင့် Data warehouse များအသုံးပြုပြီး တိုင်းနှင့်ပြည်နယ်မြေပုံများ၊ ၂၀၂၂ ခရိုင်မြေပုံများ၊ မြို့နယ်အကွက်ချမြေပုံများကိုလည်း ဆက်လက်ရေးဆွဲထုတ်ဝေလျှက်ရှိပြီး UNESCO, American Embassy, India Embassy, ESRI, TomTom, HERE, GrabTaxi နှင့် အစိုးရဌာနများနှင့် လက်တွဲလုပ်ဆောင်ခဲ့ပြီး ယုံကြည်မှုရရှိထားသော မြန်မာနိုင်ငံ၏ မြေပုံနှင့် GIS ကုမ္ပဏီတစ်ခုလည်းဖြစ်ပါတယ်။
                    </div>
            </div>
            </div>
        </div>

        <div class="company-profile">
            <div class="custom-heading">
                <div class="main-heading">
                    About Us
                </div>
                
                <div class="sub-heading">
                    Who Are We?
                </div>
                </br>
                <a style="color:grey;">https://dpsmap.com/about-us/</a>
            </div>
            
            <div class="company-profile-wrapper">
                <div class="company-profile-left">
                    <div class="description">
                        Design Printing Services (DPS) Company Limited – – incorporated in 1995 – published its landmark Map of Yangon a.k.a “Street Directory of Yangon” in 1996.
                        At that time, the government is the only organization which prepares and maintains those maps.
                        Normally they do it by hand and very difficult to update.
                        <br />
                        Moreover maps from the government are not readily available. D.P.S started digitizing the map of Yangon (Rangoon) from British era maps.
                        Then it acquired Intergraph’s Geomedia software along with IRS Panchromatic satellite imagery from Intergraph.
                        The satellite scenes are geocoded using Trimble’s Pro XR gps and then digitized by D.P.S.
                        <br />
                        D.P.S also developed Yangon GIS data warehouse complete with streets,
                        schools, clinics, government offices, water and river, and last but not least – a Business Database. Our strong point is thus in creating
                        and updating GIS database – digitization and data entry,
                        GPS survey and map publishing. We have also developed Vehicle Tracking System using GPS and Compatible maps to manage transport fleets.
                    </div>
                </div>
                <div class="company-profile-right">
                    <img src="../../assets/images/mapillary.jpg" alt="Mapillary">
                    <div class="description">
                       ရန်ကုန်မြို့ရဲ့ လမ်းများကို 360 ပုံစံဖြင့် ကြည့်ရှုလိုပါက အောက်ရှိ Button ကိုနှိပ်ပါ
                    </div>
                    <a href="http://bit.ly/DPS360" class="button" target="_blank">Button</a>
                </div>
            </div>
        </div>
        
        <div>
        <div class="company-profile">
            <div class="custom-heading">
                <div class="sub-heading">
                   Myanmar Works Hard to Keep the Internet Out
                </div></br>
                <div class="description">
                   In downtown Yangon, Internet entrepreneur Aye Min Oo is busy selling space on a Web site that he cannot access.
To woo advertisers who are also forbidden to access the World Wide Web in military-ruled Myanmar, formerly Burma, he transports his tourist-oriented Web site's pages the old-fashioned way.
</br>
"I travel around Yangon and demonstrate the pages on the hard drive of my laptop," he said. "We e-mail new pages to the webmaster in Belgrade. Hopefully, some day we will see it online here ourselves."
</br>
Aye Min Oo's roundabout access to the Internet may not be ideal, but it is a rare privilege in isolated Myanmar, a Southeast Asian country of 48 million people where some of the world's toughest Internet restrictions are vigorously enforced.
</br>
The measures, aimed at fending off the online campaigns of exiled Burmese opposition groups, restrict e-mail access to fewer than a thousand people who are close to the ruling party, the State Peace and Development Council (SPDC).
</br>
Access to the World Wide Web is strictly banned, and unauthorized use of a modem is punishable by 7 to 15 years in jail.
</br>
Just one other Web site operates consistently from the country, which has been widely condemned for human rights violations and the suppression of democracy. It is the government's own site, which is only available outside the country. It features tourist and army news in four languages, along with regular fiery criticism of opposition leader Aung San Suu Kyi, whose National League for Democracy party won a 1990 election that the military refused to recognize.
</br>
In the decade since then, thousands of democracy activists have been jailed or have fled the country once known as the "rice-bowl of Asia," now one of the world's poorest.
</br>
Among Yangon's tiny, struggling expatriate and business communities, where the daily struggles are with boredom and marginalization, the lure of the Internet has been hard to resist. Dialing into foreign servers is an obvious if illegal route for frustrated staff members at embassies and other organizations.
    </br>
Crd : <a href="https://archive.nytimes.com/www.nytimes.com/library/tech/00/07/cyber/articles/14myanmar.html">The New York Times</a>;
                </div>
            </div>
            </div>
        </div>
        
        <div class="valued-clients">
            <div class="custom-heading">
                <div class="main-heading">
                    Our Valued Clients
                </div>
            </div>
            <div class="image-row">
                <div class="image-container">
                    <a href="/gis/tomtom.php">
                    <img src="/assets/images/about-us/tomtom.png" alt="tomtom">
                    </a>
                </div>

                <div class="image-container">
                    <a href="/gis/here.php">
                    <img src="/assets/images/about-us/here.png" alt="here">
                    </a>
                </div>

                <div class="image-container">
                    <a href="/gis/esri.php">
                    <img src="/assets/images/about-us/esri.png" alt="esri">
                    </a>
                </div>

                <div class="image-container">
                    <a href="/gis/grab.php">
                    <img src="/assets/images/about-us/grab.png" alt="grab">
                    </a>
                </div>

                <div class="image-container">
                    <a href="/gis/unilever.php">
                    <img src="/assets/images/about-us/unileverlogo.png" alt="unileverlogo">
                    </a>
                </div>
                
                <div class="image-container">
                    <a href="https://www.reuters.com/article/us-myanmar-bagan-factbox-idUSSP5445920061113" target="_blank">
                    <img src="/assets/images/about-us/reuters.png" alt="reuters">
                    </a>
                </div>
                </br>
                </br>
                <div class="about-us-row">
                    <a href="https://dpsmap.com/valuedclients/">
                    <img src="/assets/images/about-us/valueclients.jpg" alt="valuedclients">
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