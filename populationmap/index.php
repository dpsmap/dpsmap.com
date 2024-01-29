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

    <title> PopulationMap - DPS </title>
    <style>
    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
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
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  margin-top: 120px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 300px;
  height: 652px;
  /*width: 80%;
  max-width: 700px;*/
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
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

    <section id="body">
    <div class="main-content">
     <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            
            <span class="sub-heading">Population Map with Shop Database Sample Data</span>
          </div>
          <div class="about-us-row">
            <div class="about-us-left">
              <div class="description-container">
                <span class="description">
                 Population Map များကို အများအားဖြင့် ရွေးကောက်ပွဲ မဲဆန္ဒနယ်ပယ်များတွင် မဲပေးနိုင်သူဦး‌ရေကိုကြိုတင်တွက်ဆရာတွင်အသုံးပြုပြီး စီးပွားရေးနယ်ပယ်များတွင်မူ ဝယ်လိုအားခန့်မှန်းခြင်း၊ ဝယ်နိုင်သူများကို အမျိုးအစားခွဲခြားသော demographic များနှင့် Target audience များ၏ infographic များရေးဆွဲရာတွင် အသုံးပြုလေ့ရှိပါတယ်။</br></br>
                        အောက်ပါမြေပုံတွင်ပါရှိသော population data များသည် ပြည်ထောင်စု သမ္မတ မြန်မာနိုင်ငံတော် အစိုးရ၏ ၂၀၁၄ ခုနှစ် တွင် လူဝင်မှုကြီးကြပ်ရေးနှင့်ပြည်သူ့အင်အားဦးစီးဌာနမှ ထုတ်ပြန်ထားသော Population and Housing Census of Myanmar, 2014 – Provisional Results Vloume 1 မှကောက်နုတ်ထားခြင်းဖြစ်ပါသည်။ </br></br>
                        DPS ၏ Retail Outlet Database အကြောင်းကိုစိတ်ဝင်စားသော လုပ်ငန်းရှင်မိတ်ဆွေများအတွက် မြေပုံပေါ်တွင် လူနေထူထပ်သောမြို့နယ်များတွင် Business POI များကိုLat / Long အတိအကျဖြင့်ဖော်ပြပေးထားပါတယ်..
                </span>
              </div>
            </div>
            <div class="about-us-right">
              <div class="bg-art-container" style="width: 200px;">
                <img src="../assets/images/populationmap.jpg" alt="Population_Map" style="height: 400px;width: 200px;" id="myImg" />
              </div>
              <div id="myModal" class="modal">
                                <span class="close">&times;</span>
                                <img class="modal-content" id="img01">
                                <div id="caption"></div>
                            </div>
            </div>
          </div>
        </div>
      </div>
</div>
        <div>
            <style>
                .embed-container {
                    position: relative;
                    padding-bottom: 41%;
                    height: 100%;
                    max-width: 100%;
                }

                .embed-container iframe,
                .embed-container object,
                .embed-container iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                }

                small {
                    position: absolute;
                    z-index: 40;
                    bottom: 0;
                    margin-bottom: 0px;
                }
            </style>
            <div class="embed-container"><small><a href="//dpsmm.maps.arcgis.com/apps/Embed/index.html?webmap=ea9e4131e8184784b399e77116c2d42c&extent=95.6878,16.5773,96.6773,17.1418&home=true&zoom=true&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=false&theme=light" style="color:#0000FF;text-align:left" target="_blank">
                        <h1 style="text-align:center;">View larger map</h1>
                    </a></small><br><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="Client Presentation Map" src="//dpsmm.maps.arcgis.com/apps/Embed/index.html?webmap=ea9e4131e8184784b399e77116c2d42c&extent=95.6878,16.5773,96.6773,17.1418&home=true&zoom=true&previewImage=false&scale=true&search=true&searchextent=true&details=true&legendlayers=true&active_panel=details&basemap_gallery=true&disable_scroll=false&theme=light"></iframe></div>
        </div>
    </section>
    </br>
    <div>
        <h3 style="text-align:center;">
            Source : Department of Population,
            Ministry Of Labour,Immigration and Population
        </h3>
    </div>
    </br></br>
    
    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
    
    <!-- footer area -->

    <section id="footer">
        <?php require_once('../widgets/footer.php') ?>
    </section>
    
    
    <center>
    <!-- Start of StatCounter Code for Dreamweaver -->
    <script type="text/javascript">
    var sc_project=310175;
    var sc_invisible=0;
    var sc_security="df515d3d";
    var scJsHost = (("https:" == document.location.protocol) ?
    "https://secure." : "http://www.");
    document.write("<sc"+"ript type='text/javascript' src='" +
    scJsHost+
    "statcounter.com/counter/counter.js'></"+"script>");
    </script>
    <noscript><div class="statcounter"><a title="web counter"
    href="http://statcounter.com/" target="_blank"><img
    class="statcounter"
    src="//c.statcounter.com/310175/0/df515d3d/0/" alt="web
    counter"></a></div></noscript>
    </center>
    <!-- End of StatCounter Code for Dreamweaver -->

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