<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('config/databaseConnection.php');
require_once('config/urlConfig.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <META NAME="keywords" content="dpsmap,DPS Map, Map Download, Free Map Download">
  <META NAME="description" content="DPS Map, Free Map Download">
  <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#222">

  <link rel="shortcut icon" href="assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="assets/css/common.css" />
  <link rel="stylesheet" href="../assets/css/division.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/home.css" />
  <link rel="stylesheet" href="assets/css/yangon.css" />
  <link rel="stylesheet" href="/assets/css/about-us.css" />
  <!-- Fontawesome 
  <link rel="stylesheet" href="assets/libs/fontawesome/css/all.min.css" />
  -->
  <link rel="canonical" href="https://www.dpsmap.com/">
  
  <title>HOME - DPS Map</title>
  
  <style>
  .banner {
    background-color: black;
  }
  .responsive {
          width: 100%;
          max-width: 960px;
          height: auto;
          filter: drop-shadow(10px 10px 7px #13566f);
          border-radius: 8px;
           max-width: 100%;
         max-height: 100%;
}

  </style>
  
  <script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57336593-1', 'auto');  ga('send', 'pageview');</script>

</head>

<body>

  <!-- header area -->
  <section id="header">
    <?php require_once('widgets/pc-nav-bar.php') ?>
    <?php require_once('widgets/mobile-nav-bar.php') ?>
  </section>

  <!-- body area -->
  <section id="body">
    <div class="banner-container">
      <div class="banner-img-container-cropper ">
        <div class="banner-img-container slideshow">
          <img src="assets/images/banner-2.jpg" alt="banner" />
          <div class="banner-img-overlay">
            <div class="banner-content">
              <span class="heading">DPS MAP</span>
              <span class="sub-heading">Myanmar's Only Mapping Company with the Address Database for Cities.</span>
              <div class="banner-btn-container">
                <a href="https://address.dpsmap.com" class="one-square-feet">ADDRESS</a>
                <a href="districts/" class="one-square-feet">ခရိုင်၂၀၂၂</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="banner">
        <a href="https://m.facebook.com/story.php?story_fbid=pfbid02uQ6w8ozS3dBGVoGJ8LrNpKn2kcTuaz7PvE92oAD3SnhZCTgBqtWnviVPVUx8WJF1l&id=100064820825786&mibextid=Nif5oz" style="color:white;" target="_blank" >
            <marquee style="margin-top: 0px;line-height:20px;font-size: 15px !important;margin-bottom: 0px;color:white;text-align:center;">
                လယ်ယာမြေဝယ်ယူပြီးတော့ ပုံစံ ၁၀၅ ပါမြေပုံလက်ခံကို မြေပြင်အနေအထား Google Earth ပေါ်မှာထပ်ကြည့်ဖို့ လိုအပ်လာပြီဆိုရင် DPS ကိုသာသတိရလိုက်ပါ!
            &nbsp;&nbsp;
           Read More >>>
            </marquee>
        </a>
    </div>
      
    <div class="main-content">
        <!--
        <div class="before-footer" style="padding-top: 30px;">
            <div class="img-container">
                <a href="https://shop.dpsmap.com/index.php/product/yangon-map-hard-copy/">
                    <img src="/assets/images/Happy_New_Year_2024.png" alt="Happy_New_Year_2024" />
                </a>
            </div>
       </div>
        -->
       <div class="mission" style="padding-top: 30px;">
        <div class="heading">
          <span class="main-heading">DPS MAP</span>
        </div>
        <div class="description-container">
          <p class="description">

            DPS aims to be the Best Guide in Town with its mapping and guide
            business started back in 1996. Armed with knowledge in
            Geographical Information System from Global Oil and Gas company
            Royal Dutch Shell and with deep local knowledge, a group of young
            men set out to get ground data for Yangon Map, Mandalay Map and
            Naypyitaw Map.
            Their work was soon recognized by such organizations as UNESCO,
            United States Government, ESRI, TomTom, HERE, GrabTaxi.
            DPS is now the only company in Myanmar with Address Database and
            No. 1 Mapping and GIS company in Myanmar.
          </p>
        </div>
      </div>
        
    <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            <a href="https://dpsmap.com/districts/images/The_District_Map_of_Myanmar_Update_2022_A0_Size.pdf" target="_blank">
            <span class="sub-heading">ခရိုင်၂၀၂၂The District Map of Myanmar</span>
            </a>
          </div>
           
              <div class="about-us-row">
                   <a href="https://dpsmap.com/districts/images/The_District_Map_of_Myanmar_Update_2022_A0_Size.pdf" target="_blank">
                    <img src="districts/images/The_District_Map_of_Myanmar.jpg" alt="The District Map of Myanmar" class="responsive"/>
                    </a>
              </div>
        
        </div>
     </div>    
    
     <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            <a href="https://dpsmap.com/form105/">
            <span class="sub-heading">ပုံစံ(၁၀၅)၊ပုံစံ(၇) လယ်ယာမြေလုပ်ကိုင်ခွင့်မြေပုံအကြောင်း</span>
            </a>
          </div>
              <div class="about-us-row">
                   <a href="https://dpsmap.com/form105/">
                    <img src="assets/images/bg-arts/about_map_update.jpg" alt="form105 photo" class="responsive"/>
                    </a>
              </div>
        </div>
      </div>
    
      <div class="about-us-container">
        <div class="about-us">
          <div class="heading">
            <span class="main-heading">About Us</span>
            <span class="sub-heading">Who are we?</span>
          </div>
          <div class="about-us-row">
            <div class="about-us-left">
              <div class="description-container">
                <p class="description">
                  DPS Design Printing Services Company Limited incorporated in 1995 published its landmark Map of Yangon a.k.a
                  “Street Directory of Yangon” in 1996. At that time, the government was the only organization which has the authority to print maps.
                  DPS started digitizing the map of Yangon (Rangoon) with Garmin and Magellan GPS.
                  <br />
                  DPS build Yangon Geographical Information System (GIS) data warehouse complete with streets,
                  schools, clinics, government offices, water and river, and last but not least a Business Points of Interest (POIs).
                  Our strong point is thus in creating and updating GIS database digitization and data entry, GPS survey and map publishing.
                  We have also developed Vehicle Tracking System using GPS and Compatible maps to manage transport fleets.
                </p>
              </div>
            </div>
            <div class="about-us-right">
              <div class="bg-art-container">
                <img src="assets/images/bg-arts/bg-art-map.png" alt="bg-art-map" />
              </div>
            </div>
          </div>
        </div>
      </div>
 
      <div class="our-services-container">
        <div class="our-services">
          <div class="heading">
            <span class="main-heading">Our Services</span>
          </div>
          <div class="our-services-row">
            <div class="our-services-left">
              <div class="description-container">
                <p class="description">

                  DPS aims to be the Best Guide in Town with its mapping and guide
                  business started back in 1996. Armed with knowledge in
                  Geographical Information System from Global Oil and Gas company
                  Royal Dutch Shell and with deep local knowledge, a group of young
                  men set out to get ground data for Yangon Map, Mandalay Map and
                  Naypyitaw Map.
                </p>
              </div>
            </div>
            <div class="our-services-right">

              <div class="custom-card">
                <div class="custom-card-title">Map Plotting</div>
                <div class="custom-card-description">
                  Decorate your meeting rooms, office or other areas with our high resolution, customisable maps
                </div>
                <a href="mapplotting.shtml">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->

              <div class="custom-card">
                <div class="custom-card-title">GIS Map</div>
                <div class="custom-card-description">
                  We at DPS have been involved in Map making and data warehousing with Geographical Information System (GIS) from day one. Our first project is to acquire Satellite Maps in 1998.
                </div>
                <a href="gis/">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->

              <div class="custom-card">
                <div class="custom-card-title">GPS Tracker</div>
                <div class="custom-card-description">
                  DPS has varieties of GPS trackers that will match your needs. Starting from Tracking System with basic functions to Vehicle Tracker with Camera which you can view videos in real-time
                </div>
                <a href="tracking/">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->

              <div class="custom-card">
                <div class="custom-card-title">Data Collection Service</div>
                <div class="custom-card-description">
                  We offer Point of Address data collection, shop database collection for distribution services, address data collection.
                </div>
                <a href="https://address.dpsmap.com/">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->

              <div class="custom-card">
                <div class="custom-card-title">Design & Printing Service</div>
                <div class="custom-card-description">
                  Get your customised design and printed materials with our in-house designers. Our products range cover colour leaflets, business cards, promotion materials, brand materials which give our customers high satisfaction.
                </div>
                <a href="printing-services/">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->

              <div class="custom-card">
                <div class="custom-card-title">Website Service</div>
                <div class="custom-card-description">
                  We offer professional website design service with reasonable rates. Get your branded company website or any idea of yours such as online shop and blogs .
                </div>
                <a href="website-services/">Read More <span><i class="fa-solid fa-angle-right"></i></span></a>
              </div>

              <!-- card end -->
            </div>
          </div>
        </div>

      </div>
  
      <div class="fast-facts-container">
        <div class="fast-facts">
          <span class="main-heading">Fast Facts DPS</span>
          <div class="stats-container">
            <div class="stats address-points">
              <span class="points">511,181</span>
              <span>Address Points</span>
            </div>
            <div class="stats categories-of-poi">
              <span class="points">34</span>
              <span>Categories of POI</span>
            </div>
            <div class="stats years-of-experience">
              <span class="points">27</span>
              <span>Years of Experience</span>
            </div>
          </div>
        </div>
      </div>
   
      <!-- facebook post -->
        <div class="our-services-container">
        <div class="our-services">
          <div class="heading">
            <span class="main-heading">Latest Posts</span>
          </div>
          <div class="our-services-row">

            <div class="our-services-right">

              <div class="custom-card">
                  
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FDPSMyanmar%2Fposts%2Fpfbid02uf5f7WhP8qav8taQbKBVnjXZ1F6EcvzoTmD6ANzXhtbNkJuVK8Xkm2EynW7wJAJ6l&show_text=true&width=500" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                </iframe>
                
              </div>

              <div class="custom-card">
                  
               <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FDPSMyanmar%2Fposts%2Fpfbid029vTVGuq24GK2UQasRnhh42BiAko6yUCfKYiPp9QzAAeczmRsFvEMAjPyZzmcKdRbl&show_text=true&width=500" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
               </iframe>
               
              </div>

              <div class="custom-card">
                  
              <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FDPSMyanmar%2Fposts%2Fpfbid027yKJ8BZc794Z7spZf4PHB6maSNw8ziiXKdNLywgAhj5SNaR295sMi1v3BQJkGBQml&show_text=true&width=500" width="100%" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
              </iframe>
              </div>

            </div>
          </div>
        </div>

      </div>
      <!-- facebook post -->
    
        <div class="valued-clients" style="margin-bottom: 0px;">
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
        
                <div class="about-us-row" style="margin-top: 30px;">
                    <a href="https://dpsmap.com/valuedclients/">
                    <img src="/assets/images/about-us/valueclients.jpg" alt="valuedclients">
                    </a>
              </div>
            </div>
        </div>
           
    <div class="custom-spacer">
            <div class="custom-hr"></div>
    </div>
    </br>
      <div class="download-section">
        <div class="map-download">
          <div class="download">
            <div class="heading">
              <span class="download-heading">Free Maps Download</span>
            </div>
            <div class="btn-container">
              <a href="pages/map-download/">
                <span class="text">
                  Download Now
                  <span class="icon">
                    <i class="fa-solid fa-download"></i>
                  </span>
                </span>
              </a>
              <a href="https://dpsmap.com/map/">
                <span class="text">
                  Learn About Map
                  <span class="icon">
                    <i class="fa-brands fa-leanpub"></i>
                  </span>
                </span>
              </a>
            </div>
          </div>

          <div class="available-now">
            <div class="heading">
              <span class="download-heading"> Available Now! </span>
            </div>
            <div class="description">
              <p>
                The Updated District Maps of 2022 are available at DPS right
                now!
              </p>
              <p>
                View our most popular maps -
                <a href="districts/">Botahtaung District Map</a>,
                <a href="districts/">Insein District Map</a>,
                <a href="districts/">Mingalardon District Map</a>,
                <a href="districts/">Thingangyun District Map.</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="gmaps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122220.27416060296!2d96.15441902422998!3d16.807317136443555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ec87aa67d8a3%3A0xfc0601241550cd7c!2sDesign%20Printing%20Services%20(DPS%20Map)!5e0!3m2!1sen!2smm!4v1659685248661!5m2!1sen!2smm" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>


  <!-- footer area -->

  <section id="footer">
    <?php require_once('widgets/footer.php') ?>
  </section>
  
  <!-- Fontawesome -->
  <script src="assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

  <!-- Jquery -->
  <script src="assets/libs/jquery-3.5.1/js/jquery-3.5.1.js"></script>

  <!-- Custom js -->
  <script src="assets/js/script.js" type="text/javascript"></script>
  <script src="assets/js/jsResponsive.js" type="text/javascript"></script>

  <script type="text/javascript">
    $(document).ready(() => {
      var slideImage = $('.slideshow').find('img').first();
      var images = [
        'assets/images/banner-2.jpg',
        'assets/images/banner-1.jpg',
      ];

      var i = 0;
      setInterval(function() {
        i = (i + 1) % images.length;
        slideImage.fadeOut(750, function() {
          $(this).attr('src', images[i]);
          $(this).fadeIn(750);
        })
      }, 4000);

    })
  </script>
 
  <!-- App -->
  <script src="assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="assets/js/analytics.js" type="text/javascript"></script>
  
</center>
  

</body>

</html>