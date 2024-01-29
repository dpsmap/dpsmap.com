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
    <link rel="stylesheet" href="../assets/css/home.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/about-us.css" />
    

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <title>Districts - DPS Map</title>
    
    <style>
    
        .image-grid {
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 10px;
        }
        
        .image-item {
          width: 100%;
        }
        
        .image-item img {
          width: 100%;
          height: auto;
        }
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
        table {
            width: 80%; /* Set an initial width percentage for larger screens */
            max-width: 600px; /* Set a maximum width for the table */
            border-collapse: collapse;
            margin: 0 auto; /* Center the table horizontally */
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        @media only screen and (max-width: 600px) {
            table {
                width: 100%; /* Make the table full width on smaller screens */
            }
        }
        h2 {
            align-items: center;
            text-align: center;
            
        }

        h2 img {
            max-width: 100%;
            height: auto; /* Ensures the image maintains its aspect ratio */
            display: block; /* Removes any default inline styling */
            margin: 0 auto; /* Centers the image horizontally */
        }
        .districts-table{
            background-color: powderblue;
            filter: drop-shadow(10px 10px 7px #13566f);
            border-radius: 8px;
            max-width: 100%;
            max-height: 100%;
            margin-bottom: 30px;
            align-items: center;
            margin: 25px;
            padding: 25px;
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
        
        <div class="image-grid">
    <div class="image-item">
      <img src="../districts/images/news_1.jpg" alt="Image 1">
    </div>
    <div class="image-item">
      <img src="../districts/images/news_2.jpg" alt="Image 2">
    </div>
    <div class="image-item">
      <img src="../districts/images/news_3.jpg" alt="Image 3">
    </div>
    <div class="image-item">
      <img src="../districts/images/news_4.jpg" alt="Image 4">
    </div>
  </div>
 
        
        <div class="main-content">
            
    <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            <a href="../districts/images/The_District_Map_of_Myanmar_Update_2022_A0_Size.pdf" target="_blank">
            <span class="sub-heading">ခရိုင်၂၀၂၂The District Map of Myanmar</span>
            </a>
          </div>
              <div class="about-us-row">
                   <a href="../districts/images/The_District_Map_of_Myanmar_Update_2022_A0_Size.pdf" target="_blank">
                    <img src="../districts/images/The_District_Map_of_Myanmar.jpg" alt="The District Map of Myanmar" class="responsive_img"/>
                    </a>
              </div>
        </div>
     </div> 
     
    <div class="about-us-container" id="NorthernShanState">
        <div class="about-us">
          <div class="heading">
            <span class="sub-heading"> Northern Shan State_Lashio New District Map(Draft) </span>
          </div>
              <div class="about-us-row">
                <object data="../districts/images/Northern Shan State_Lashio New District Map_Version10.svg" width="90%" height="auto" alt"ရှမ်းပြည်နယ်မြောက်ပိုင်း၊လားရှိုးခရိုင်-၂၀၂၂ပြမြေပုံအကြမ်း" > 
                </object>
              </div>
        </div>
     </div>
    
    <!---->
    <div class="districts-table">
    <div>
        <h1 style="text-align:center;">
        တိုင်းနှင့်ပြည်နယ်အလိုက် ခရိုင်များဇယား
        </h1>
        <h1 style="text-align:center;">
        ပြည်နယ်များ
        </h1>
        <h2>
        <img src="../districts/images/Flag_of_Kayah_State.svg.png" alt="Logo" style="width:auto;height:auto;"> <!-- Replace 'your-logo.png' with your actual logo file -->
       ကယားပြည်နယ်
        <img src="../districts/images/Kayah_state_districts_map.svg.png" alt="Logo" style="width:150px;height:150px;">
    </h2>

    <table>
        <tbody>
            <tr>
                <th>(၄)ခရိုင်</th>
                <th>မြို့နယ်အ​ရေအတွက်</th>
                <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
                <th>မြေပုံ</th>
            </tr>
            <tr>
               <td>လွိုင်ကော်ခရိုင်</td>
               <td>၂</td>
               <td>လွိုင်ကော်မြို့</td>
               <td>
                    <img src="../districts/images/Loikaw_tsp_in_Loikaw_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
            <tr>
               <td>ဒီးမော့ဆိုခရိုင်</td>
               <td>၂</td>
               <td>ဒီးမော့ဆိုမြို့</td>
               <td>
                    <img src="../districts/images/Demoso_tsp_in_Demoso_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
            <tr>
               <td>ဘောလခဲခရိုင်</td>
               <td>၂</td>
               <td>ဘောလခဲမြို့</td>
               <td>
                    <img src="../districts/images/Bawlakhe_tsp_in_Bawlakhe_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
            <tr>
               <td>မယ်စဲ့ခရိုင်</td>
               <td>၁</td>
               <td>မယ်စဲ့မြို့</td>
               <td>
                    <img src="../districts/images/Mese_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    
    <div>
        <h2>
        <img src="../districts/images/Flag_of_Kachin_State.svg.png" alt="Logo" style="width:auto;height:auto;"> <!-- Replace 'your-logo.png' with your actual logo file -->
        ကချင်ပြည်နယ်
        <img src="../districts/images/Kachin_state_districts_map_2022.svg.png" alt="Logo" style="width:150px;height:150px;">
    </h2>

    <table>
    <tbody>
      <tr>
        <th>(၆)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>မြစ်ကြီးနားခရိုင်</td>
        <td>၃</td>
        <td>မြစ်ကြီးနားမြို့</td>
        <td></td>
      </tr>
      <tr>
        <td>တနိုင်းခရိုင်</td>
        <td>၁</td>
        <td>တနိုင်းမြို့</td>
        <td></td>
      </tr>
      <tr>
        <td>ချီဖွေခရိုင်</td>
        <td>၂</td>
        <td>ချီဖွေမြို့</td>
        <td></td>
      </tr>
      <tr>
        <td>ဗန်းမော်ခရိုင်</td>
        <td>၄</td>
        <td>ဗန်းမော်မြို့</td>
        <td></td>
      </tr>
      <tr>
        <td>မိုးညှင်းခရိုင်</td>
        <td>၃</td>
        <td>မိုးညှင်းမြို့</td>
        <td></td>
      </tr>
      <tr>
        <td>ပူတာအိုခရိုင်</td>
        <td>၅</td>
        <td>ပူတာအိုမြို့</td>
        <td></td>
      </tr>
    </tbody>
  </table>
    </div>
    
    <div>
  <h2>
    <img src="../districts/images/Flag_of_Kayin_State.svg.png" alt="Logo" style="width:auto;height:auto;"> <!-- Replace 'your-logo.png' with your actual logo file -->
    ကရင်ပြည်နယ်
    <img src="../districts/images/Kayin_State_districts_map_2022.svg.png" alt="Logo" style="width:150px;height:150px;">
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၆)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>ဘားအံခရိုင်</td>
        <td>၂</td>
        <td>ဘားအံမြို့</td>
        <td>
                    <img src="../districts/images/Hpan_tsp_in_Hpan_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
      <tr>
        <td>မြဝတီခရိုင်</td>
        <td>၁</td>
        <td>မြဝတီမြို့</td>
        <td>
                    <img src="../districts/images/Myawady_district_in_Kayin_state.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
      <tr>
        <td>ဖာပွန်ခရိုင်</td>
        <td>၁</td>
        <td>ဖာပွန်မြို့</td>
        <td>
                    <img src="../districts/images/Hpapun_district_in_Kayin_state.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
      <tr>
        <td>သံတောင်ကြီးခရိုင်</td>
        <td>၁</td>
        <td>သံတောင်ကြီးမြို့</td>
        <td>
                    <img src="../districts/images/Thandaunggyi_district_in_Kayin_state.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
      <tr>
        <td>ကြာအင်းဆိပ်ကြီးခရိုင်</td>
        <td>၁</td>
        <td>ကြာအင်းဆိပ်ကြီးမြို့</td>
        <td>
                    <img src="../districts/images/Kyarinseikgyi_district_in_Kayin_state.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
      <tr>
        <td>ကော့ကရိတ်ခရိုင်</td>
        <td>၁</td>
        <td>ကော့ကရိတ်မြို့</td>
        <td>
                    <img src="../districts/images/Kawkareik_district_in_Kayin_state_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
      </tr>
    </tbody>
  </table>
</div>

    
    <div>
  <h2>
    <img
      src="../districts/images/Flag_of_Chin_State.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    ချင်းပြည်နယ်
    <img
      src="../districts/images/Chin_state_district_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၆)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>ဟားခါးခရိုင်</td>
        <td>၂</td>
        <td>ဟားခါးမြို့</td>
        <td>
          <img
            src="../districts/images/Hakha_tsp_in_Hakha_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဖလမ်းခရိုင်</td>
        <td>၁</td>
        <td>ဖလမ်းမြို့</td>
        <td>
          <img
            src="../districts/images/Falam_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မင်းတပ်ခရိုင်</td>
        <td>၂</td>
        <td>မင်းတပ်မြို့</td>
        <td>
          <img
            src="../districts/images/Mindat_tsp_in_Mindat_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>တီးတိန်ခရိုင်</td>
        <td>၂</td>
        <td>တီးတိန်မြို့</td>
        <td>
          <img
            src="../districts/images/Tedim_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မတူပီခရိုင်</td>
        <td>၁</td>
        <td>မတူပီမြို့</td>
        <td>
          <img
            src="../districts/images/Matupi_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ပလက်ဝခရိုင်</td>
        <td>၁</td>
        <td>ပလက်ဝမြို့</td>
        <td>
          <img
            src="../districts/images/Paletwa_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>


    <div>
  <h2>
    <img
      src="../districts/images/Flag_of_Chin_State.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    မွန်ပြည်နယ်
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၄)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
      </tr>
      <tr>
        <td>မော်လမြိုင်ခရိုင်</td>
        <td>၅</td>
        <td>မော်လမြိုင်မြို့</td>
        
      </tr>
      <tr>
        <td>သထုံခရိုင်</td>
        <td>၂</td>
        <td>သထုံမြို့</td>
        
      </tr>
      <tr>
        <td>ကျိုက်ထိုခရိုင်</td>
        <td>၂</td>
        <td>ကျိုက်ထိုမြို့</td>
       
      </tr>
      <tr>
        <td>ရေးခရိုင်</td>
        <td>၁</td>
        <td>ရေးမြို့</td>
        
      </tr>
    </tbody>
  </table>
</div>

    
    <div>
  <h2>
    <img
      src="../districts/images/Flag_of_Rakhine.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    ရခိုင်ပြည်နယ်
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၇)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
      </tr>
      <tr>
        <td>စစ်တွေခရိုင်</td>
        <td>၄</td>
        <td>စစ်တွေမြို့</td>
      </tr>
      <tr>
        <td>ကျောက်ဖြူခရိုင်</td>
        <td>၂</td>
        <td>ကျောက်ဖြူမြို့</td>
      </tr>
      <tr>
        <td>တောင်ကုတ်ခရိုင်</td>
        <td>၂</td>
        <td>တောင်ကုတ်မြို့</td>
      </tr>
      <tr>
        <td>မောင်တောခရိုင်</td>
        <td>၂</td>
        <td>မောင်တောမြို့</td>
      </tr>
      <tr>
        <td>မြောက်ဦးခရိုင်</td>
        <td>၄</td>
        <td>မြောက်ဦးမြို့</td>
      </tr>
      <tr>
        <td>သံတွဲခရိုင်</td>
        <td>၂</td>
        <td>သံတွဲမြို့</td>
      </tr>
      <tr>
        <td>အမ်းခရိုင်</td>
        <td>၁</td>
        <td>အမ်းမြို့</td>
      </tr>
    </tbody>
  </table>
</div>

    
<div>
  <h2>
        <img src="../districts/images/Flag_of_the_Shan_State.svg.png" alt="Logo" style="width:auto;height:auto;"> <!-- Replace 'your-logo.png' with your actual logo file -->
                ရှမ်းပြည်နယ် 
        <img src="../districts/images/Shan_State_Map_with_3_Parts.svg.png" alt="Logo" style="width:150px;height:150px;">
    </h2>
    <h4 style="text-align:center;">(၂၆) ခရိုင်/ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရ​ဒေသ </h4>
    
  <table>
    <h3 style="text-align:center;">
           တောင်ပိုင်း
        </h3>
    <tbody>
      <tr>
        <th>ခရိုင်များ</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
      </tr>
      <tr>
        <td>တောင်ကြီးခရိုင်</td>
        <td>၂</td>
        <td>တောင်ကြီးမြို့</td>
        
      </tr>
      <tr>
        <td>ကလောခရိုင်</td>
        <td>၃</td>
        <td>ကလောမြို့</td>
        
      </tr>
      <tr>
        <td>လွိုင်လင်ခရိုင်</td>
        <td>၃</td>
        <td>လွိုင်လင်မြို့</td>
       
      </tr>
      <tr>
        <td>နမ့်စန်ခရိုင်</td>
        <td>၃</td>
        <td>နမ့်စန်မြို့</td>
        
      </tr>
      <tr>
        <td>မိုင်းရှူးခရိုင်</td>
        <td>၂</td>
        <td>မိုင်းရှူးမြို့</td>
        
      </tr>
      <tr>
        <td>လင်းခေးခရိုင်</td>
        <td>၃</td>
        <td>လင်းခေးမြို့</td>
       
      </tr>
      <tr>
        <td>ပအိုဝ်းကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ</td>
        <td>၃</td>
        <td>ဟိုပုံးမြို့</td>
        
      </tr>
      <tr>
        <td>ဓနု ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရ ဒေသ</td>
        <td>၂</td>
        <td>ပင်းတယမြို့</td>
        
      </tr>
    </tbody>
    <table>
    <h3 style="text-align:center;">
           မြောက်ပိုင်း
        </h3>
    <tbody>
      <tr>
        <th>ခရိုင်များ</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
      </tr>
      <tr>
        <td>
            <a href="#NorthernShanState">
            	လားရှိုးခရိုင်
            </a>
        </td>
        <td>၃</td>
        <td>လားရှိုးမြို့</td>
        
      </tr>
      <tr>
        <td>မူဆယ်ခရိုင်</td>
        <td>၂</td>
        <td>မူဆယ်မြို့</td>
        
      </tr>
      <tr>
        <td>ကွတ်ခိုင်ခရိုင်</td>
        <td>၁</td>
        <td>ကွတ်ခိုင်မြို့</td>
       
      </tr>
      <tr>
        <td>ကျောက်မဲခရိုင်</td>
        <td>၄</td>
        <td>ကျောက်မဲမြို့</td>
        
      </tr>
      <tr>
        <td>မိုးမိတ်ခရိုင်</td>
        <td>၂</td>
        <td>မိုးမိတ်မြို့</td>
        
      </tr>
      <tr>
        <td>တန့်ယန်းခရိုင်</td>
        <td>၂</td>
        <td>တန့်ယန်းမြို့</td>
       
      </tr>
      <tr>
        <td>ပလောင်ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ</td>
        <td>၂</td>
        <td>နမ့်ဆန်မြို့</td>
        
      </tr>
      <tr>
        <td>ကိုးကန့်ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ</td>
        <td>၂</td>
        <td>လောက်ကိုင်မြို့</td>
        
      </tr>
    </tbody>
  </table>

  <table>
    <h3 style="text-align:center;">
           အရှေ့ပိုင်း
        </h3>
    <tbody>
      <tr>
        <th>ခရိုင်များ</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
      </tr>
      <tr>
        <td>	ကျိုင်းတုံခရိုင်</td>
        <td>၃</td>
        <td>ကျိုင်းတုံမြို့</td>
        
      </tr>
      <tr>
        <td>တာချီလိတ်ခရိုင်</td>
        <td>၂</td>
        <td>တာချီလိတ်မြို့</td>
        
      </tr>
      <tr>
        <td>မိုင်းယောင်းခရိုင်</td>
        <td>၁</td>
        <td>မိုင်းယောင်းမြို့</td>
       
      </tr>
      <tr>
        <td>မိုင်းဆတ်ခရိုင်</td>
        <td>၁</td>
        <td>မိုင်းဆတ်မြို့</td>
        
      </tr>
      <tr>
        <td>မိုင်းတုံခရိုင်</td>
        <td>၁</td>
        <td>မိုင်းတုံမြို့</td>
        
      </tr>
      <tr>
        <td>မိုင်းယန်းခရိုင်</td>
        <td>၁</td>
        <td>မိုင်းယန်းမြို့</td>
       
      </tr>
      <tr>
        <td>မိုင်းလားခရိုင်</td>
        <td>၁</td>
        <td>မိုင်းလားမြို့</td>
        
      </tr>
      <tr>
        <td>(ဝကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရတိုင်း)
          <li>မက်မန်းခရိုင်</li>
          <li>ဟိုပန်ခရိုင်</li>
        </td>
        <td>
          <li>၃</li>
          <li>၅-</li>
        </td>
        <td>
          <li>မက်မန်းမြို့</li>
          <li>ဟိုပန်မြို့</li>
        </td>
      </tr>
    </tbody>
  </table>
</div>

    
    <h1 style="text-align: center">တိုင်း​ဒေသကြီးများ</h1>
<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Sagaing_Region_(2019).svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    စစ်ကိုင်းတိုင်းဒေသကြီး
    <img
      src="../districts/images/Sagaing_region_districts_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၁၄)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>စစ်ကိုင်းခရိုင်</td>
        <td>၃</td>
        <td>စစ်ကိုင်းမြို့</td>
        <td>
          <img
            src="../districts/images/Sagaing_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မုံရွာခရိုင်</td>
        <td>၄</td>
        <td>မုံရွာမြို့</td>
        <td>
          <img
            src="../districts/images/Monywa_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ရွှေဘိုခရိုင်</td>
        <td>၃</td>
        <td>ရွှေဘိုမြို့</td>
        <td>
          <img
            src="../districts/images/Shwebo_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ရေဦးခရိုင်</td>
        <td>၃</td>
        <td>ရေဦးမြို့</td>
        <td>
          <img
            src="../districts/images/YeU_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ယင်းမာပင်ခရိုင်</td>
        <td>၄</td>
        <td>ယင်းမာပင်မြို့</td>
        <td>
          <img
            src="../districts/images/Yinmabin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကလေးခရိုင်</td>
        <td>၃</td>
        <td>ကလေးမြို့</td>
        <td>
          <img
            src="../districts/images/Kale_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကသာခရိုင်</td>
        <td>၄</td>
        <td>ကသာမြို့</td>
        <td>
          <img
            src="../districts/images/Katha_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကောလင်းခရိုင်</td>
        <td>၃</td>
        <td>ကောလင်းမြို့</td>
        <td>
          <img
            src="../districts/images/Kawlin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကန့်ဘလူခရိုင်</td>
        <td>၂</td>
        <td>ကန့်ဘလူမြို့</td>
        <td>
          <img
            src="../districts/images/Kanbalu_tsp_in_Kanbalu_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ခန္တီးခရိုင်</td>
        <td>၁</td>
        <td>ခန္တီးမြို့</td>
        <td>
          <img
            src="../districts/images/Hkamti_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>တမူးခရိုင်</td>
        <td>၁</td>
        <td>တမူးမြို့</td>
        <td>
          <img
            src="../districts/images/Tamu_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မော်လိုက်ခရိုင်</td>
        <td>၂</td>
        <td>မော်လိုက်မြို့</td>
        <td>
          <img
            src="../districts/images/Mawlaik_tsp_in_Mawlaik_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဟုမ္မလင်းခရိုင်</td>
        <td>၁</td>
        <td>ဟုမ္မလင်းမြို့</td>
        <td>
          <img
            src="../districts/images/Homalin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>နာဂကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ</td>
        <td>၃</td>
        <td>လင်းမြို့ လဟယ်မြို့</td>
        <td>
          <img
            src="../districts/images/Naga_SAZ.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>

    
    <div>
        <h2>
        <img src="../districts/images/23px-Flag_of_Tanintharyi_Division.svg.png" alt="Logo" style="width:auto;height:auto;"> <!-- Replace 'your-logo.png' with your actual logo file -->
           တနင်္သာရီတိုင်းဒေသကြီး
        <img src="../districts/images/Tanintharyi_region_districts_2022.svg.png" alt="Logo" style="width:150px;height:150px;">
    </h2>
    <table>
        <tbody>
            <tr>
                <th>(၄)ခရိုင်</th>
                <th>မြို့နယ်အ​ရေအတွက်</th>
                <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
                <th>မြေပုံ</th>
            </tr>
            <tr>
                <td>ထားဝယ်ခရိုင်</td>
                 <td>၄</td>
                <td>ထားဝယ်မြို့</td>
                <td>
                     <img src="../districts/images/Dawei_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
            <tr>
                <td>မြိတ်ခရိုင်</td>
                <td>၄</td>
                <td>မြိတ်မြို့</td>
                <td>
                     <img src="../districts/images/Myeik_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
           <tr>
                <td>ကော့သောင်းခရိုင်</td>
                <td>၁</td>
                <td>ကော့သောင်းမြို့</td>
                <td>
                     <img src="../districts/images/Kawthoung_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
            <tr>
                <td>ဘုတ်ပြင်းခရိုင်</td>
                <td>၁</td>
                <td>ဘုတ်ပြင်းမြို့</td>
                <td>
                     <img src="../districts/images/Bokpyin_district.svg.png" alt="Logo" style="width:auto;height:auto;">
                </td>
            </tr>
        </tbody>
    </table>
    </div>
    
 <div>
  <h2>
    <img
      src="../districts/images/Flag_of_Magway_Region.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    မကွေးတိုင်းဒေသကြီး
    <img
      src="../districts/images/Magway_region_districts_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၇)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>မကွေးခရိုင်</td>
        <td>၄</td>
        <td>မကွေးမြို့</td>
        <td>
          <img
            src="../districts/images/Magway_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ချောက်ခရိုင်</td>
        <td>၂</td>
        <td>ချောက်မြို့</td>
        <td>
          <img
            src="../districts/images/Chauk_tsp_in_Chauk_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>သရက်ခရိုင်</td>
        <td>၄</td>
        <td>သရက်မြို့</td>
        <td>
          <img
            src="../districts/images/Thayet_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>အောင်လံခရိုင်</td>
        <td>၂</td>
        <td>အောင်လံမြို့</td>
        <td>
          <img
            src="../districts/images/Aunglan_tsp_in_Aunglan_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မင်းဘူးခရိုင်</td>
        <td>၅</td>
        <td>မင်းဘူးမြို့</td>
        <td>
          <img
            src="../districts/images/Minbu_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ပခုက္ကူခရိုင်</td>
        <td>၅</td>
        <td>ပခုက္ကူမြို့</td>
        <td>
          <img
            src="../districts/images/Pakokku_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဂန့်ဂေါခရိုင်</td>
        <td>၃</td>
        <td>ဂန့်ဂေါမြို့</td>
        <td>
          <img
            src="../districts/images/Gangaw_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>


<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Bago_Region.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    ပဲခူးတိုင်းဒေသကြီး
    <img
      src="../districts/images/Bago_region_districts_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၆)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>ပဲခူးခရိုင်</td>
        <td>၄</td>
        <td>ပဲခူးမြို့</td>
        <td>
            <img src="../districts/images/Bago_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
      <tr>
        <td>တောင်ငူခရိုင်	</td>
        <td>၅</td>
        <td>တောင်ငူမြို့</td>
        <td>
            <img src="../districts/images/Taungoo_district.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
      <tr>
        <td>ပြည်ခရိုင်</td>
        <td>၄</td>
        <td>ပြည်မြို့</td>
        <td>
            <img src="../districts/images/Pyay_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
      <tr>
        <td>သာယာဝတီခရိုင်</td>
        <td>၆</td>
        <td>သာယာဝတီမြို့</td>
        <td>
            <img src="../districts/images/Thayarwady_district_2022.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
      <tr>
        <td>ညောင်လေးပင်ခရိုင်</td>
        <td>၅</td>
        <td>ညောင်လေးပင်မြို့</td>
        <td>
            <img src="../districts/images/Nyaunglebin_district.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
      <tr>
        <td>နတ်တလင်းခရိုင်</td>
        <td>၄</td>
        <td>နတ်တလင်းမြို့</td>
        <td>
            <img src="../districts/images/Natlin_district.svg.png" alt="Logo" style="width:auto;height:auto;">
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Mandalay_Region_(2010-2021).svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    မန္တလေးတိုင်းဒေသကြီး
    <img
      src="../districts/images/Mandalay_region_district_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၁၁)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>မဟာအောင်မြေခရိုင်</td>
        <td>၄</td>
        <td>မဟာအောင်မြေမြို့နယ် (မန္တလေးမြို့)</td>
        <td>
          <img
            src="../districts/images/Mahaaungmyae_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>အောင်မြေသာစံခရိုင်</td>
        <td>၃</td>
        <td>အောင်မြေသာစံမြို့နယ်(မန္တလေးမြို့)</td>
        <td>
          <img
            src="../districts/images/Aungmyaythazan_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>အမရပူရခရိုင်</td>
        <td>၁</td>
        <td>အမရပူရမြို့</td>
        <td>
          <img
            src="../districts/images/Amarapura_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ပြင်ဦးလွင်ခရိုင်</td>
        <td>၁</td>
        <td>ပြင်ဦးလွင်မြို့</td>
        <td>
          <img
            src="../districts/images/Pyinoolwin_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>သပိတ်ကျင်းခရိုင်</td>
        <td>၃</td>
        <td>သပိတ်ကျင်းမြို့</td>
        <td>
          <img
            src="../districts/images/Thabeikkyin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>တံတားဦးခရိုင်</td>
        <td>၂</td>
        <td>တံတားဦးမြို့</td>
        <td>
          <img
            src="../districts/images/TadaU_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကျောက်ဆည်ခရိုင်</td>
        <td>၃</td>
        <td>ကျောက်ဆည်မြို့</td>
        <td>
          <img
            src="../districts/images/Kyaukse_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မြင်းခြံခရိုင်</td>
        <td>၃</td>
        <td>မြင်းခြံမြို့</td>
        <td>
          <img
            src="../districts/images/Myingyan_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ညောင်ဦးခရိုင်</td>
        <td>၂</td>
        <td>ညောင်ဦးမြို့</td>
        <td>
          <img
            src="../districts/images/Nyaung_U_tsp_in_Nyaung_U_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မိတ္ထီလာခရိုင်</td>
        <td>၄</td>
        <td>မိတ္ထီလာမြို့</td>
        <td>
          <img
            src="../districts/images/Meiktila_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ရမည်းသင်းခရိုင်</td>
        <td>၂</td>
        <td>ရမည်းသင်းမြို့</td>
        <td>
          <img
            src="../districts/images/Yamethin_tsp_in_Yamethin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Yangon_Region.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    ရန်ကုန်တိုင်းဒေသကြီး
    
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၁၄)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>တိုက်ကြီးခရိုင်</td>
        <td>၁</td>
        <td>တိုက်ကြီးမြို့</td>
        <td>
          <img
            src="../districts/images/Taikkyi_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>လှည်းကူးခရိုင်</td>
        <td>၁</td>
        <td>လှည်းကူးမြို့</td>
        <td>
          <img
            src="../districts/images/Hlegu_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မှော်ဘီခရိုင်</td>
        <td>၂</td>
        <td>မှော်ဘီမြို့</td>
        <td>
          <img
            src="../districts/images/Hmawbi_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မင်္ဂလာဒုံခရိုင်</td>
        <td>၂</td>
        <td>မင်္ဂလာဒုံမြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Mingaladon_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>အင်းစိန်ခရိုင်</td>
        <td>၃</td>
        <td>အင်းစိန်မြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Insein_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>သန်လျင်ခရိုင်</td>
        <td>၅</td>
        <td>သန်လျင်မြို့</td>
        <td>
          <img
            src="../districts/images/Thanlyin_district_with_cocokyun.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>တွံတေးခရိုင်</td>
        <td>၅</td>
        <td>တွံတေးမြို့</td>
        <td>
          <img
            src="../districts/images/Twantay_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကျောက်တံတားခရိုင်</td>
        <td>၅</td>
        <td>ကျောက်တံတားမြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Kyauktada_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>အလုံခရိုင်</td>
        <td>၃</td>
        <td>အလုံမြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Ahlon_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မရမ်းကုန်းခရိုင်</td>
        <td>၃</td>
        <td>မရမ်းကုန်းမြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Mayangon_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>သင်္ဃန်းကျွန်းခရိုင်</td>
        <td>၄</td>
        <td>သင်္ဃန်းကျွန်းမြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Thingangyun_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဗိုလ်တထောင်ခရိုင်</td>
        <td>၅</td>
        <td>ဗိုလ်တထောင်မြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Botahtaung_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဒဂုံမြို့သစ်ခရိုင်</td>
        <td>၄</td>
        <td></td>
        <td>
          <img
            src="../districts/images/Dagonmyothit_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကမာရွတ်ခရိုင်</td>
        <td>၂</td>
        <td>ကမာရွတ်မြို့နယ်</td>
        <td>
          <img
            src="../districts/images/Kamayut_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>


<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Ayeyarwady_Region.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    ဧရာဝတီတိုင်းဒေသကြီး
    <img
      src="../districts/images/Ayeyarwady_region_districts_map_2022.svg.png"
      alt="Logo"
      style="width: 150px; height: 150px"
    />
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၈)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
        <th>မြေပုံ</th>
      </tr>
      <tr>
        <td>ပုသိမ်ခရိုင်</td>
        <td>၄</td>
        <td>ပုသိမ်မြို့</td>
        <td>
          <img
            src="../districts/images/Pathein_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ကျုံပျော်ခရိုင်</td>
        <td>၃</td>
        <td>ကျုံပျော်မြို့</td>
        <td>
          <img
            src="../districts/images/Kyonpyaw_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဟင်္သာတခရိုင်</td>
        <td>၃</td>
        <td>ဟင်္သာတမြို့</td>
        <td>
          <img
            src="../districts/images/Hinthada_district_2022.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မြန်အောင်ခရိုင်</td>
        <td>၃</td>
        <td>မြန်အောင်မြို့</td>
        <td>
          <img
            src="../districts/images/Myanaung_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မအူပင်ခရိုင်</td>
        <td>၄</td>
        <td>မအူပင်မြို့</td>
        <td>
          <img
            src="../districts/images/Maubin_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>မြောင်းမြခရိုင်</td>
        <td>၃</td>
        <td>မြောင်းမြမြို့</td>
        <td>
          <img
            src="../districts/images/Myaungmya_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>ဖျာပုံခရိုင်</td>
        <td>၄</td>
        <td>ဖျာပုံမြို့</td>
        <td>
          <img
            src="../districts/images/Pyapon_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
      <tr>
        <td>လပွတ္တာခရိုင်</td>
        <td>၂</td>
        <td>လပွတ္တာမြို့</td>
        <td>
          <img
            src="../districts/images/Labutta_tsp_in_Labutta_district.svg.png"
            alt="Logo"
            style="width: auto; height: auto"
          />
        </td>
      </tr>
    </tbody>
  </table>
</div>

<div>
  <h2>
    <img
      src="../districts/images/Flag_of_Naypyidaw_Union_Territory.svg.png"
      alt="Logo"
      style="width: auto; height: auto"
    />
    နေပြည်တော် ပြည်ထောင်စုနယ်မြေ
    
  </h2>

  <table>
    <tbody>
      <tr>
        <th>(၄)ခရိုင်</th>
        <th>မြို့နယ်အ​ရေအတွက်</th>
        <th>ခရိုင်ရုံးစိုက်ရာမြို့</th>
    
      </tr>
      <tr>
        <td>ဥတ္တရခရိုင်</td>
        <td>၂</td>
        <td>ပုသိမ်မြို့</td>
       
      </tr>
      <tr>
        <td>ဇေယျာသီရိခရိုင်</td>
        <td>၂</td>
        <td>ဇေယျာသီရိမြို့</td>
        
      </tr>
      <tr>
        <td>လယ်ဝေးခရိုင်</td>
        <td>၂</td>
        <td>လယ်ဝေးမြို့</td>
        
      </tr>
      <tr>
        <td>ပျဉ်းမနားခရိုင်</td>
        <td>၂</td>
        <td>ပျဉ်းမနားမြို့</td>
        
      </tr>
    </tbody>
  </table>
</div>


</div>
</div>
    <!----> 
     
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        Our district maps history
                    </div>
                </div>
                <div class="description">
                    <p>
                        ၁၉၉၆ ခုနှစ်မှစတင်ပြီး မြန်မာနိုင်ငံတစ်ဝှမ်းလုံးရှိ ကျေးရွာ၊ မြို့၊ လမ်းများကိုစတင်ပြုစုခဲ့ရာ ယခင်က မြန်မာနိုင်ငံတွင် ခရိုင်ပေါင်း (၇၅) ခရိုင်သာရှိခဲ့ပါသည်။
                        ထို့နောက် ၂၀၂၂ ခုနှစ် ဧပြီလ (၃၀) တွင် ခရိုင် (၄၆) ခရိုင်အား အသစ်ပြောင်းလဲဖွဲ့စည်းလိုက်ရာ စုစုပေါင်း (၁၂၁) ခရိုင်ဖြင့် ဖွဲ့စည်းခဲ့ပါသည်။
                        ယခင်က ရန်ကုန်(အရှေ့ပိုင်းခရိုင်)တွင် သင်္ကန်းကျွန်းမြို့နယ်ဟူ၍ရှိခဲ့ရာ ယခုအခါတွင် သင်္ကန်းကျွန်းမြို့နယ်သည် သင်္ကန်းကျွန်းခရိုင်ဟူ၍ဖြစ်လာပါသည်။
                        သင်္ကန်းကျွန်းခရိုင်တွင် သင်္ကန်းကျွန်းမြို့နယ်၊ ရန်ကင်းမြို့နယ်၊ တောင်ဥက္ကလာပမြို့နယ်၊ တာမွေမြို့နယ်တို့ပါဝင်ဖွဲ့စည်းထားပါသည်။
                    </p>
                </div>
            </div>
            <div class="map-gallery-container">
                
                <div class="custom-heading-container">
                    <div class="bar-left"></div>
                    <div class="custom-heading">
                        <div class="main-heading">
                            Districts
                        </div>
                    </div>
                    <div class="bar-right"></div>
                </div>

                <div class="map-gallery">
                    <div class="custom-row">
                        <?php $getMap('districts') ?>
                    </div>
                </div>

            </div>
        </div>

    </section>
   
    <div class="before-footer">
<div class="img-container">
<img src="../assets/images/Secreenshot.jpg" alt="before-footer" >
</div>
</div>

    <div class="before-footer">
        <div class="img-container">
            <img src="../assets/images/before-footer.jpg" alt="before-footer" />
        </div>
    </div>

     <div class="valued-clients">
            <div class="custom-heading">
                <div class="main-heading">
                    Our Valued Customer
                </div>
            </div>
            <div class="image-row">
                <div class="image-container">
                    <div class="custom-heading">
                    <div class="sub-heading">
                      <b>လမ်းဦးစီးဌာန</b></br>
                        (အင်းစိန်ခရိုင်)
                    </div>
                    </div>
                </div>

                <div class="image-container">
                    <div class="custom-heading">
                    <div class="sub-heading">
                        <b>လမ်းဦးစီးဌာန</b></br>
                          (မှော်ဘီခရိုင်)
                    </div>
                    </div>
                </div>

                <div class="image-container">
                     <div class="custom-heading">
                    <div class="sub-heading">
                 <b>အင်ဂျင်နီယာဌာန</b></br>
                    (လမ်းနှင့်တံတား)
                    </div>
                    </div>
                </div>

                <div class="image-container">
                     <div class="custom-heading">
                    <div class="sub-heading">
                  <b>အင်ဂျင်နီယာဌာန</b></br>
                    (ရေနှင့်သန့်ရှင်းမှု)
                    </div>
                    </div>
                </div>
                
                <div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>မရမ်းကုန်းခရိုင်</b></br>
(လမ်းဦးစီး)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>သင်္ဃန်းကျွန်းခရိုင်</b></br>
(လမ်းဦးစီး)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>မရမ်းကုန်းခရိုင်</b></br>
(ထွေအုပ်ဦးစီးမှုးရုံးဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>အင်းစိန်ခရိုင်</b></br>
(အထူးစုံစမ်းစစ်ဆေးရေးဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>အလုံခရိုင်</b></br>
(ရေနှင့်သန့်ရှင်းမှု အင်ဂျင်နီယာဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>ကျောက်တံတားခရိုင်</b></br>
(ရေနှင့်သန့်ရှင်းမှု အင်ဂျင်နီယာဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>ဗဟန်းခရိုင်</b></br>
(ရေနှင့်သန့်ရှင်းမှု အင်ဂျင်နီယာဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>သင်္ဃန်းကျွန်းခရိုင်</b></br>
(ရေနှင့်သန့်ရှင်းမှု အင်ဂျင်နီယာဌာန)
</div>
</div>
</div>

<div class="image-container">
<div class="custom-heading">
<div class="sub-heading">
<b>ရွှေပေါက်ကံ</b></br>
(ရေနှင့်သန့်ရှင်းမှု အင်ဂျင်နီယာဌာန)
</div>
</div>
</div>

                
            </div>
        </div>




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