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

    <title> DPS administrative-boundaries </title>
    <style>
   <style>
  .responsive {
  width: 100%;
  height: auto;
  filter: drop-shadow(10px 10px 7px #13566f);
      
  }
  .map-description {
    width: 80%;
    margin: 40px auto;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
}
.responsive {
  width: 100%;
  height: auto;
  filter: drop-shadow(10px 10px 7px #13566f);
   justify-content: center;
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
                        <a href="https://dpsmap.com/districts/">
                            ခရိုင်၂၀၂၂The District Map of Myanmar
                        </a>
                    </br></br>
                    </div>
                </div></br></br>
                <div class="description">
                    <div>
                        <a href="https://dpsmap.com/districts/">
                            <img src="../districts/images/The_District_Map_of_Myanmar.jpg" alt="The District Map of Myanmar" class="responsive" style="width: 300px;"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
          <div class="main-content">
            <div class="map-description">
                <div class="custom-heading">
                </div>
                <div class="description">
                    <div>
                        <img src="images/Administrative_Structure20Mar2020.png" alt="" class="responsive" style="width: 100%;"/>
                    </div>
                </div>
            </div>
        </div>
    <!---->     
       <div class="main-content">
            <div class="map-description">
                <div class="description">
                <p>
                Administrative Boundaries of Myanmar တိုင်းနှင့်ပြည်နယ်များ ‌ေဒသကြီးများ
                Number 7 regions, 7 states, 1 union territory, 1 self-administered division, and 5 self-administered zones (as of 2015)
                Populations 286,627 (Kayah State) - 7,360,703 (Yangon Region)
                Areas 7,054 km2 (2,724 sq mi) (Naypyidaw Union Territory) - 155,801 km2 (60,155 sq mi) (Shan State)
                Administrative divisions
                of Myanmar
                First-level
                Region
                State
                Union Territory
                Self-Administered Division
                Self-Administered Zone
                Second-level
                District
                Third-level
                Township
                Fourth-level
                Ward
                Village tract
                Fifth-level
                Village
                vte
                Myanmar is divided into twenty-one administrative subdivisions, which include 7 regions, 7 states, 1 union territory, 1 self-administered division, and 5 self-administered zones. Following is the table of government subdivisions and its organizational structure based on different regions, states, the union territory, the self-administered division, and the self-administered zones:
                
                Type Burmese name No. of div.
                Region တိုင်းဒေသကြီး
                tuing:desa.kri: IPA: [táɪɰ̃ dèθa̰ dʑí]
                taìñ deithác̱ì 7
                State ပြည်နယ်
                pranynai IPA: [pjìnɛ̀]
                pyine 7
                Union Territory ပြည်ထောင်စုနယ်မြေ
                pranytaungcu.nai-mre IPA: [pjìdàʊɰ̃zṵnɛ̀mjè]
                pyiṯauñs̱únemyei 1
                Self-Administered
                Division ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရ တိုင်း
                kuiypuing-uphkyuphkwang.ra.tuing: IPA: [kòbàɪɰ̃ ʔoʊʔtɕʰoʊʔ kʰwɪ̰ɰ̃ja̰ táɪɰ̃]
                koup̱aiñ ouʔhcouʔ hkwíñyá taìñ 1
                Self-Administered
                Zone ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ
                kuiypuing-uphkyuphkwang.ra.desa. IPA: [kòbàɪɰ̃ ʔoʊʔtɕʰoʊʔ kʰwɪ̰ɰ̃ja̰ dèθa̰]
                koup̱aiñ ouʔhcouʔ hkwíñyá deithá 5
                The regions were called divisions prior to August 2010,[1] and four of them are named after their capital city, the exceptions being Sagaing Region, Ayeyarwady Region and Tanintharyi Region. The regions can be described as ethnically predominantly Burman (Bamar), while the states, the zones and Wa Division are dominated by ethnic minorities.
                
                Yangon Region has the largest population and is the most densely populated. The smallest population is Kayah State. In terms of land area, Shan State is the largest and Naypyidaw Union Territory is the smallest.
                
                Regions and states are divided into districts (ခရိုင်; kha yaing or khayaing, IPA: [kʰəjàɪɴ]). These districts consist of townships (မြို့နယ်; myo-ne, IPA: [mjo̰nɛ̀]) that include towns (မြို့; myo, IPA: [mjo̰]), wards (ရပ်ကွက်; yatkwet, IPA: [jaʔ kwɛʔ])) and village tracts (ကျေးရွာအုပ်စု; kyayywa oksu, IPA: [tɕé jwà ʔoʊʔ sṵ]). Village tracts are groups of adjacent villages (ကျေးရွာ; kyayywa, IPA: [tɕé jwà]).
                </p>
                    </br></br>
                </div>
            </div>
        </div>
        <!---->
        <div class="main-content">
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                    myanmar State & Region Map
                    </br></br>
                    </div>
                </div></br></br>
                <div class="description">
                    <div>
                        <img src="images/Myn_S_R_Map.jpg" alt="" class="responsive" style="width: 300px;"/>
                    </div>
                </div>
            </div>
        </div>
            <!---->
            <div class="main-content">
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        နိုင်ငံရေး၊အုပ်ချုပ်ရေး၊စီးပွားရေး၊လူမှုရေး စသည်တို့ တိုးတက်ပြောင်းလဲဖြစ်ပေါ်မှု အရ နေပြည်တော်၊တိုင်းဒေသကြီးနှင့် ပြည်နယ်များအတွင်း ခရိုင်အသစ်များ ထပ်မံတိုးချဲ့
                        </br></br>
                    </div>
                    <p>PDF Format ဖြင့်ကြည့်ရန်</p>
                    <a href="Myn_S_R_District_List_Update_2022.pdf" target="_blank">ဒီနေရာတွင် နှိပ်ပါ...</a>
                </div></br></br>
                <div class="description">
                    <div>
                        <img src="images/Myn_District_List_A4_Size.jpg" alt="" class="responsive" style="width: 100%;"/>
                    </div>
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