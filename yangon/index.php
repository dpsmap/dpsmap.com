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
  <!--
  <META name="keywords" content="Yangon Map, Map Download, Free Map Download, yangon map, Yangon - DPS Map">
  <META name="description" content="Yangon Map, Map Download, free Map Download, dps map, DPS Website">
  -->
  <meta name="keywords" content="Yangon Map, Free Download, Myanmar Travel Guide, Interactive Maps, Landmarks, Navigation, Explore Yangon, Tourist Attractions, Township Maps " />
  <meta name="description" content="Unlock the beauty of Yangon with our detailed map - free to download! Your ultimate Myanmar travel guide with interactive maps, highlighting landmarks and providing seamless navigation. Explore Yangon's top tourist attractions and townships with ease." />
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
  <link rel="stylesheet" href="../assets/css/custom_has.css" />
 
  <!-- Fontawesome -->
  <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />
  
  <link rel="canonical" href="https://dpsmap.com/yangon/" />

  <title> Yangon Map - DPS </title>
  
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
        .customer-row {
          display: flex;
          flex-wrap: wrap;
        }
        
        .customer-row ol {
          flex: 1 1 33.33%;
         
        }
        .customer-row li{
            padding: 0px !important;
        }
        
        @media (max-width: 768px) {
          .customer-row ol {
            flex-basis: 100%;
            padding-left: 20px !important;
          }
        }
        
        @media (max-width: 480px) {
          .customer-row ol {
            flex-basis: 100%;
            padding-left: 0px !important;
          }
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
            <a href="https://shop.dpsmap.com/index.php/product/yangon-map-hard-copy/">
                <img src="../assets/images/Happy_New_Year_2024.png" alt="Happy_New_Year_2024" />
            </a>
        </div>
      </div>
-->

            <div class="main-content">
                <div class="mission" style="padding-top: 30px;padding-bottom: 0px;">
                    <div class="description-container">
                            <div class="heading">
                                <div class="main-heading">The Map Of Yangon</div>
                            </div>
                        
                        <p class="description">
                            Yangon (formerly Rangoon) is the former capital city of Myanmar aka Burma. Yangon covers 600 sq. Kilometers and is in the southern delta region at the confluence of Bago River and Hlaing River and is  25 miles (40 km) north of the Gulf of Martaban of the Andaman Sea. Yangon was founded as Dagon in the early 11th century (c. 1028–1043)- a fascinating city that housed a majority of Bamar people and Golden pagodas, colonial buildings and influenced by India and Chinese cultures. If you are looking for a guide to explore the best of Yangon, look no further than DPS Map of Yangon : <a href="#yangon_map_download">link to Yangon_map_download</a>
                        </p>
                    </div>
                </div>
            </div>
            
    <div class="map-overview-container">

      <div class="map-overview">
        <div class="map-overview-left">

          <div class="map-overview-image-container">
            <img src="../assets/images/yangon/yangon.jpg" alt="yangon" />
                <div>
                    <a href="https://dpsmap.com/mapplotting.shtml">
                        <img src="../assets/images/map-ads.png" class="responsive" alt="map-ads">
                    </a>
                </div>
          </div>
        </div>
        <div class="map-overview-right" style="padding-left: 10px;" id="yangon_map_download">
          <div class="custom-row">
            <div class="heading">
              <div class="main-heading">
                Yangon Map
              </div>
              <div class="sub-heading">
                To download full and complete Yangon Map
              </div>
            </div>

            <ol>
              <li>Press <a href="../pages/map-download/">Download</a></li>
              <li>Complete the form and press submit.</li>
              <li>you will recieve the download link via email to the email address you have provided</li>
            </ol>
          </div>
         
            <div class="mission">
                <div class="description-container">
                    <p style="line-height: 30px;">
                        Yangon (formerly Rangoon) is the former capital city of Myanmar aka Burma. Yangon covers 600 sq. Kilometers and is in the southern delta region at the confluence of Bago River and Hlaing River and is  25 miles (40 km) north of the Gulf of Martaban of the Andaman Sea. Yangon was founded as Dagon in the early 11th century (c. 1028–1043)- a fascinating city that housed a majority of Bamar people and Golden pagodas, colonial buildings and influenced by India and Chinese cultures. If you are looking for a guide to explore the best of Yangon, look no further than DPS Map of Yangon </ link to Yangon_map_download/>: 
                    </p>
                </div>
                
                    <li style="line-height: 30px;">
                        See the map below for the locations of these attractions and more. You can also use the links to find more information and reviews. Have a wonderful time in Yangon!
                    </li>
            
                <p class="description">
                    Free Download Yangon Map PDF
                </p>
              
                    <li style="line-height: 30px;">
                        DPS offer Free download of its Yangon Guide Map (in PDF format for individuals - commercial use of the map requires a written permission from DPS). The downloaded Yangon Map is supposed to use as its entirety withour removing the Copyright notice, DPS logo and its Databox at the bottom. The Free download map of Yangon serves as a guide for moving around Yangon and its completeness, correctness and updates are totally at the discretion of DPS. Any improvement/comments and suggestions to DPS' Yangon Map is warmly welcome.
                    </li>
              
            </div>

                <h1>
                    <a href="#yangon-district-map">
                        The following 33 Township Maps include recent 2022-Districts update.
                    </a>
                </h1>
           
            <div class="customer-row">
              <ol>
                <li>Ahlone Township [Ahlone District] </li>
                <li>Bahan Township [Kamayut District] </li>
                <li>Botataung Township [Botataung District] </li>
                <li>Dagon Myothit Seikkan Township [Dagon Myothit District] </li>
                <li>Dagon Township [Kyauktada District] </li>
                <li>Dala Township [Twantay District] </li>
                <li>Dawbon Township [Botataung District] </li>
                <li>East Dagon Township [Dagon Myothit District] </li>
                <li>Hlaing Township [Mayangon District] </li>
                <li>East Hlaingthaya Township [Insein District] </li>
                <li>West Hlaingthaya Township [Insein District] </li>
                <li>Insein Township [Insein District] </li>
                </ol>
              <ol start="13">
                <li>Kamayut Township [Kamayut District] </li>
                <li>Kyauktada Township [Kyauktada District] </li>
                <li>Kyeemyindaing Township [Ahlone District] </li>
                <li>Lanmadaw Township [Kyauktada District] </li>
                <li>Latha Township [Kyauktada District] </li>
                <li>Mayangon Township [Mayangon District] </li>
                <li>Mingala Taungnyunt Township [Botataung District] </li>
                <li>Mingaladon Township [Mingaladon District] </li>
                <li>North Dagon Township [Dagon Myothit District] </li>
                <li>North Okkalapa Township [Mayangon District] </li>
                <li>Pabedan Township [Kyauktada District] </li>
                </ol>
              <ol start="24">
                <li>Pazundaung Township [Botataung District] </li>
                <li>Sanchaung Township [Ahlone District] </li>
                <li>Seikkyi Kanaungto Township [Twantay District] </li>
                <li>Shwepyitha Township [Mingaladon District] </li>
                <li>South Dagon Township [Dagon Myothit District] </li>
                <li>South Okkalapa Township [Thingangyun District] </li>
                <li>Tamwe Township [Thingangyun District] </li>
                <li>Thaketa Township [Botataung District] </li>
                <li>Thingangyun Township [Thingangyun District] </li>
                <li>Yankin Township [Thingangyun District] </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="main-content">
        
        <div class="mission" style="padding-top: 10px;padding-bottom: 10px;">
                    <div class="description-container">
                        <h3>Township Map of Yangon (YCDC Townships)</h3>
                        <p class="description">
                            DPS painstakenly perfected Township Map of Yangon which is featured in the Yangon City Development Committee's official website.
                            <a href="https://www.ycdc.gov.mm/content.php?page=Townships">
                                https://www.ycdc.gov.mm/content.php?page=Townships
                            </a>
                        </p>
                        </br>
                        <h3>Yangon Region Map (Yangon Region Government - General Administration Department)</h3>
                        <p class="description">
                            DPS initiated 10-Household Map with Yangon Region Government in June,2020. General Administration Department[GAD] and DPS together collected household data GIS map which was based on 2008 Constitution. DPS engineered 10-Household Leader GIS database map together with Yangon City Development Committee and Yangon Technological University[YTU] (GIS Research Center) and GAD staff (being trained in GIS mapping and Google Earth and MS. Excel by DPS and YTU) </ read more/>
                        </p>
                    </div>
                </div>
    <div class="map-overview">
        <div class="map-overview-center">
                <div class="custom-row">
            <div class="heading">
              <h1>
               ရန်ကုန်တိုင်းဒေသကြီးအစိုးရအဖွဲ့ Yangon Region Government ၊ ရန်ကုန်မြို့မြို့နယ်ဆိုင်ရာအချက်အလက်များ
               </h1>
            </div>
            <div class="customer-row">
              <ol>
                <li>တာမွေ</li>
                <li>တောင်ဥက္ကလာပ</li>
                <li>ဒဂုံမြို့သစ်-ဆိပ်ကမ်း</li>
                <li>ဒဂုံမြို့သစ်-တောင်ပိုင်း</li>
                <li>ဒဂုံမြို့သစ်-မြောက်ပိုင်း</li>
                <li>ဒဂုံမြို့သစ်-အရှေ့ပိုင်း</li>
                <li>ဒေါပုံ</li>
                <li>ပုဇွန်တောင်</li>
                <li>ဗိုလ်တထောင်</li>
                <li>မင်္ဂလာတောင်ညွန့်</li>
                <li>မြောက်ဥက္ကလာပ</li>
                <li>ခရမ်း</li>
                <li>ဆိပ်ကြီးခနောင်တို</li>
                <li>တွံတေး</li>
                <li>ဒလ</li>
                <li>လှိုင်သာယာ</li>
                </ol>
              <ol start="17">
                <li>ရန်ကင်း</li>
                <li>သင်္ဃန်းကျွန်း</li>
                <li>သာကေတ</li>
                <li>ကမာရွတ်</li>
                <li>ကျောက်တံတား</li>
                <li>ကြည့်မြင်တိုင်</li>
                <li>စမ်းချောင်း</li>
                <li>ဆိပ်ကမ်း</li>
                <li>ဒဂုံ</li>
                <li>ပန်းဘဲတန်း</li>
                <li>သံလျင်</li>
                <li>သုံးခွ</li>
                <li>တိုက်ကြီး</li>
                <li>ထန်းတပင်</li>
                <li>အင်းစိန်</li>
                </ol>
              <ol start="32">
                <li>ဗဟန်း</li>
                <li>မရမ်းကုန်း</li>
                <li>လမ်းမတော်</li>
                <li>လသာ</li>
                <li>လှိုင်</li>
                <li>အလုံ</li>
                <li>ကျောက်တန်း</li>
                <li>ကွမ်းခြံကုန်း</li>
                <li>ကိုကိုးကျွန်း</li>
                <li>ကော့မှုး</li>
                <li>မင်္ဂလာဒုံ</li>
                <li>မှော်ဘီ</li>
                <li>ရွှေပြည်သာ</li>
                <li>လှည်းကူး</li>
              </ol>
            </div>
          </div>
      
    </div>
    <div class="main-content">
      <div class="ygn-district">
          <div class="district-heading">
                YANKIN TOWNSHIP MAP
          </div>
          <img src="./images/yankin_township_update.jpg" alt="Yankin Tsp Map" class="ygn-district-map" />
      </div>
        
      <div class="ygn-district" id="yangon-district-map">
          <div class="district-heading">
                Yangon District Map
        </div>
        <div class="sub-heading">
                To download full and complete Yangon Map
        </div>
            <ul>
              <li>Press <a href="../files/yangon/YGN_New_DT.pdf" target="blank">Download</a></li>
            </ul>
          <img src="images/YGN New DT.jpg" alt="Yangon Map - Download for Free" class="ygn-district-map" />
      </div>
      
      <div class="map-gallery-container">
        <div class="custom-heading-container">
          <div class="bar-left"></div>
          <div class="custom-heading">
            <div class="main-heading">
              Yangon Townships' Map
            </div>
          </div>
          <div class="bar-right"></div>
        </div>

        <div class="map-gallery">
          <div class="custom-row">
            <?php $getMap('yangon_map') ?>
          </div>
        </div>
      </div>
    </div>

  </section>

    <center>
          <h3>
             The No.1 Ward Map of Pazundaung Township
          </h3>
    </center>
      <div class="before-footer">
        <div class="img-container">
                <img src="../yangon/images/pazundaung_ward.png" alt="before-footer" />
        </div>
      </div>
  
    
    <!--
    <div>
        <div class="custom-heading arc">
            <div class="main-heading">
                The No.1 Ward Map of Pazundaung Township
            </div>
        </div>

        <div class="arc-gis-container">
            
           <iframe width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="The No.1 Ward Map of Pazundaung Township" src="//www.arcgis.com/apps/Embed/index.html?webmap=272ce67c470a48ff8fa6ca04fdfb6ea2&extent=96.1682,16.773,96.1761,16.7774&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legend=true&active_panel=details&basemap_gallery=true&disable_scroll=true&theme=light">
           </iframe>
        </div>
    </div>
    
    -->
    
  <!-- footer area -->

  <section id="footer">
    <?php require_once('../widgets/footer.php') ?>
  </section>

  <!-- Fontawesome 
  <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>
  -->

  <!-- Custom js -->
  <script src="../assets/js/script.js" type="text/javascript"></script>
  <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>


  <!-- App -->
  <script src="../assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="../assets/js/analytics.js" type="text/javascript"></script>

</body>

</html>