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
  <!--<META NAME="keywords" content="dpsmap,DPS Map, Map Download, Free Map Download">-->
  <!--<META NAME="description" content="DPS Map, Free Map Download">-->
  <META NAME="keywords" content="dpsmap, Myanmar map, Free map download, Google map, မြန်မာမြေပုံ">
  <META NAME="description" content="DPS Map,best map for myanmar, မြန်မာနိုင်ငံ၏ မြေပုံများ၊ လမ်းညွှန်များ၊ နှင့် ခရီးသွားထောက်ပံ့မှုများ,free download map for myanmar map">

  <!---->
  <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#222">

  <link rel="shortcut icon" href="assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
  <link rel="manifest" href="manifest.json">
  <link rel="stylesheet" href="assets/css/common.css" />
  <link rel="stylesheet" href="assets/css/division.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/home.css" />
  <link rel="stylesheet" href="assets/css/yangon.css" />
  <link rel="stylesheet" href="assets/css/about-us.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    .hover-container {
      position: relative;
      display: inline-block;
    }

    .hover-container iframe {
      display: none;
      position: absolute;
      top: 100%;
      /* Position below the link */
      left: 0;
      width: 400px;
      height: 300px;
      border: 1px solid #ccc;
      z-index: 10;
    }

    .hover-container:hover iframe {
      display: block;
      /* Show iframe on hover */
    }

    a {
      text-decoration: none;
      color: blue;
      font-weight: bold;
    }

    /**/


    /*.container {*/
    /*    box-shadow: 0 1px 3px rgba(0, 0, 0, .1);*/
    /*    border: 1px solid rgba(0, 0, 0, .15);*/
    /*    background-color: #ffffff;*/
    /*    border-radius: 4px;*/
    /*    padding: 10px;*/
    /*    margin: auto;*/
    /*}*/
    /**/
  </style>

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-57336593-1', 'auto');
    ga('send', 'pageview');
  </script>

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M69RQZCW"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- header area -->
  <section id="header">
    <!---->
    <!--<marquee class="blink" scrollamount="4"> <span style="color:red">Breaking News:</span>(Unicode): Free map တွေ download ပေးနေတဲ့အစီအစဉ်က၂၀၂၄ အောက်တိုဘာလကုန်မှာပြီးတော့မှာဖြစ်လို့ အမြန်ဆုံးကိုယ်လိုအပ်တဲ့မြေပုံတွေdownloadရယူထားကြပါရန်... |  (English): The free map download program will end at the end of October 2024, so download the maps you need as soon as possible. </marquee>-->


    <!---->

    <!---->
    <?php require_once('widgets/pc-nav-bar.php') ?>
    <?php require_once('widgets/mobile-nav-bar.php') ?>

  </section>

  <!-- body area -->
  <section id="body">
    <div class="banner-container">

      <div class="banner-img-container-cropper ">
        <div class="banner-img-container slideshow">
          <!--<img src="assets/images/banner-1.jpg" alt="banner" style="object-fit:contain;background-size: contain;" />-->
          <img src="assets/images/YgnTwonship.png" alt="banner" style="object-fit:contain;background-size: contain;" />

          <!--'assets/images/mapBook 21.11.2024 ma yoon.jpg'-->
          <!--<img src="assets/images/YgnTwonship.png" alt="banner" style="object-fit:contain;background-size: contain;" />-->


          <!--<img src="assets/images/banner-2.jpg" alt="banner" />-->
          <div class="banner-img-overlay">
            <div class="banner-content">
              <span class="heading">DPS MAP</span>
              <span class="sub-heading fs-5">Myanmar's Only Mapping Company with the Address Database for Cities.</span>
              <div class="banner-btn-container">
                <a href="https://address.dpsmap.com" class="one-square-feet btn bg-success">ADDRESS</a>
                <a href="https://dpsmap.com/pages/map-download/" class="one-square-feet btn w-100 btn-primary shadow-md">Download Maps</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!--<div class="banner">-->
    <!--    <a href="https://m.facebook.com/story.php?story_fbid=pfbid02uQ6w8ozS3dBGVoGJ8LrNpKn2kcTuaz7PvE92oAD3SnhZCTgBqtWnviVPVUx8WJF1l&id=100064820825786&mibextid=Nif5oz" style="color:white;" target="_blank" >-->
    <!--        <marquee style="margin-top: 0px;line-height:20px;font-size: 15px !important;margin-bottom: 0px;color:white;text-align:center;">-->
    <!--            Explore the form 105 map for overlapping in google earth-->
    <!--        &nbsp;&nbsp;-->
    <!--       Read More >>>-->
    <!--        </marquee>-->
    <!--    </a>-->
    <!--</div>-->
    <!---->
    <div class="banner">
      <a href="https://m.facebook.com/story.php?story_fbid=pfbid02uQ6w8ozS3dBGVoGJ8LrNpKn2kcTuaz7PvE92oAD3SnhZCTgBqtWnviVPVUx8WJF1l&id=100064820825786&mibextid=Nif5oz" style="color:white;" target="_blank">
        <marquee style="margin-top: 0px;line-height:20px;font-size: 15px !important;margin-bottom: 0px;color:white;text-align:center;">
          Explore the form 105 map for overlapping in google earth
          &nbsp;&nbsp;
          Read More >>>
        </marquee>
      </a>
    </div>
    <!---->

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

        <div class="heading">
          <span class="main-heading">
            Vision:
          </span>
        </div>
        <div class="description-container">
          <p class="description">To establish DPS Map as the leading comprehensive geospatial resource for Myanmar, serving as a crucial tool, empowering informed decision-making and efficient operations for NGOs, city planners, government agencies, and the general public.</p>
          <div class="heading">
            <span class="main-heading">
              Mission:
            </span>
          </div>

          <p class="description">To provide accurate, up-to-date, and user-friendly geospatial information that facilitates informed decision-making, promotes sustainable development, and enhances the quality of life for all stakeholders.</p>


          <!--
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
            -->
          <div>

          </div>
        </div>

        <!--
      <div class="mission" >
            <div style="display: flex;justify-content: center;">
              <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe4Sk_BKEAxRq8hVDa9mbJvf7pKiL_tRC3LZWQj12BfhPkqMg/viewform?embedded=true" width="640" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
        -->
        <div class="about-us-container">
          <div class="about-us">
            <div class="heading">
              <a href="https://dpsmap.com/districts/images/The_District_Map_of_Myanmar_Update_2022_A0_Size.pdf" target="_blank">
                <span class="sub-heading">2022 The District Map of Myanmar</span>
              </a>
            </div>
          </div>
        </div>


        <div class="mission">
          <div class="heading">
            <span class="main-heading">
              <span class="sub-heading">
                Why Choose DPS?
              </span>
            </span>
          </div>
          <div>
            <div class="description-container">
              <p class="description">
                At DPS Map, we empower businesses across industries—including distribution, banking, and engineering consultancy—both locally and internationally. From producing the highly regarded Yangon Township Map Book 2024 in collaboration with YCDC to delivering customized map plotting services and comprehensive Geographic Information Systems (GIS) solutions, we transform complex data into actionable insights.

                Our GIS data covers the entirety of Myanmar’s road network, village points, address points (APs), and points of interest (POIs). Address Points (APs) are widely utilized by navigation and ride-hailing platforms like Grab Taxi and TomTom, with DPS maintaining a database of over 300,000 APs for cities such as Yangon, Mandalay, and other major urban centers. Additionally, our 60,000 POIs are rich with attributes designed to support city guide maps, ride-hailing services, distribution networks, retail outlets, and banking or insurance applications.

                Looking ahead, DPS continues to focus on collecting and enriching attribute data, driving advancements in retail, navigation, and autonomous vehicle technologies.

                Whether you're working on urban development projects for water management or road and bridge departments, developing transportation software, or creating maps for electricity distribution networks, DPS Map provides the tools, insights, and data you need. Discover our tailored maps, digital data layers, and innovative surveying solutions to bring precision and clarity to your projects.


                <!--   <ol>-->
                <!--    <li>Business Strategy:</li>-->
                <!--    <ol>-->
                <!--        <li>Data Collection and Integration:</li>-->
                <!--        <ul>-->
                <!--            <li>Aggressively gather diverse geospatial data from various sources, including -->
                <!--                government agencies, NGOs, research institutions, and crowd-sourced information.</li>-->
                <!--            <li>Integrate and harmonize data into a unified platform, ensuring consistency, accuracy, and interoperability.</li>-->
                <!--            <li>Develop robust data management systems for efficient storage, processing, and retrieval of information.</li>-->
                <!--        </ul>-->
                <!--        <li>Platform Development:</li>-->
                <!--        <ul>-->
                <!--            <li>Create a user-friendly, interactive web-based platform with intuitive navigation and customizable features.</li>-->
                <!--            <li>Offer a mobile application for on-the-go access and seamless data integration with GPS functionality.</li>-->
                <!--            <li>Ensure compatibility with various devices and operating systems to maximize accessibility.</li>-->
                <!--        </ul>-->
                <!--        <li>Value-Added Services:</li>-->
                <!--        <ul>-->
                <!--            <li>Provide advanced analytical tools and visualization capabilities for data interpretation and decision support. Mainly for Myanmar Districts and Permission-gained Myanmar Guide Map.</li>-->
                <!--            <li>Develop specialized thematic maps (e.g., Myanmar Guide Map, Yangon Streets Map, Myanmar Districts Map) catering to the specific needs of different user groups, such as disaster risk assessment, city planners, electricity, utility companies, infrastructure planning, and environmental monitoring.</li>-->
                <!--            <li>Offer customized consulting services for complex geospatial projects such as Bank’s KYC and Insurance Map, RideHailing, Delivery businesses, and tailored solutions.</li>-->
                <!--        </ul>-->
                <!--        <li>Partnership and Collaboration:</li>-->
                <!--        <ul>-->
                <!--            <li>Establish strategic partnerships with government agencies, NGOs, academic institutions, and private sector organizations.</li>-->
                <!--            <li>Foster collaborative initiatives for data sharing, knowledge exchange, and joint research projects.</li>-->
                <!--            <li>Engage with local communities to gather feedback, address concerns, and ensure the platform's relevance and effectiveness.</li>-->
                <!--        </ul>-->
                <!--        <li>Revenue Generation:</li>-->
                <!--        <ul>-->
                <!--            <li>Implement a tiered subscription model offering basic access for free and premium features for paying users.</li>-->
                <!--            <li>Explore potential revenue streams through data licensing, advertising, and sponsored content.</li>-->
                <!--            <li>Seek grants and funding from development agencies and philanthropic organizations to support specific projects and initiatives.</li>-->
                <!--        </ul>-->
                <!--    </ol>-->
                <!--</ol>-->

                <!--<ol>-->
                <!--    <li>5-Year Roadmap:</li>-->
                <!--    <ul>-->
                <!--        <li>Year 1: Data collection and integration, platform development, beta testing, and initial launch.</li>-->
                <!--        <li>Year 2: Expansion of data coverage, platform refinement, user acquisition, and marketing efforts.</li>-->
                <!--        <li>Year 3: Introduction of value-added services, partnership development, and revenue generation initiatives.</li>-->
                <!--        <li>Year 4: Scale-up operations, establish a sustainable business model, and expand market reach.</li>-->
                <!--        <li>Year 5: Continuous improvement, innovation, and exploration of new technologies, such as artificial intelligence and machine learning, to enhance the platform's capabilities.</li>-->
                <!--    </ul>-->
                <!--</ol>-->

                <!--<ol>-->
                <!--    <li>Target Audience:</li>-->
                <!--    <ul>-->
                <!--        <li>NGOs working in various sectors, including humanitarian aid, development, and environmental conservation.</li>-->
                <!--        <li>City planners and urban development professionals involved in infrastructure planning, zoning, and land use management.</li>-->
                <!--        <li>Government agencies responsible for disaster management, resource allocation, and policymaking.</li>-->
                <!--        <li>Researchers and academics conducting spatial analysis, environmental studies, and social impact assessments.</li>-->
                <!--        <li>The general public seeking information on local amenities, transportation routes, and points of interest.</li>-->
                <!--    </ul>-->
                <!--</ol>-->

                <!--<ol>-->
                <!--    <li>Marketing and Outreach:</li>-->
                <!--    <ul>-->
                <!--        <li>Develop a comprehensive marketing and communication strategy to raise awareness and promote the platform.</li>-->
                <!--        <li>Utilize various channels, including social media, online advertising, press releases, and presentations at conferences and events.</li>-->
                <!--        <li>Organize workshops and training sessions to educate users on the platform's features and functionalities.</li>-->
                <!--    </ul>-->
                <!--</ol>-->

                <!--<p>By adhering to this business strategy and roadmap, DPS Map is poised to become an indispensable -->
                <!--resource for Myanmar, empowering individuals and organizations with the knowledge and tools -->
                <!--needed to make informed decisions and contribute to the nation's sustainable development.</p>-->

            </div>
          </div>
        </div>

        <!--Form (7) Land Tenure-->
        <!--<div class="about-us-container">-->
        <!--   <div class="about-us">-->
        <!--     <div class="heading">-->
        <!--       <a href="https://dpsmap.com/form105/">-->
        <!--       <span class="sub-heading">Form (105), Form (7) Land Tenure-->
        <!--       </span>-->
        <!--       </a>-->
        <!--     </div>-->
        <!--         <div class="about-us-row">-->
        <!--              <a href="https://dpsmap.com/form105/">-->
        <!--               <img src="assets/images/bg-arts/about_map_update.jpg" alt="form105 photo" class="responsive"/>-->
        <!--               </a>-->
        <!--         </div>-->
        <!--   </div>-->
        <!-- </div>-->

        <div class="about-us-container">
          <div class="about-us">
            <div class="heading">
              <a href="https://yangontownshipmapbook.dpsmap.com/">
                <span class="sub-heading">Yangon Township Map Book
                </span>
              </a>
            </div>
            <!--<div class="about-us-row">-->
            <!--     <a href="https://yangontownshipmapbook.dpsmap.com/">-->
            <!--      <img src="assets/images/YgnTwonship.png" alt="yangontownshipmapbook image" class="responsive"/>-->
            <!--      </a>-->
            <!--</div>-->
            <div class="row">
              <div class="col-7">
                <a href="https://yangontownshipmapbook.dpsmap.com/">
                  <img src="assets/images/YgnTwonship.png" alt="yangontownshipmapbook image" class="responsive" />
                </a>
              </div>
              <div class="col-4 m-5 justify-content-center d-flex align-items-center mt-5">
                <p>
                  <strong>The only officially recognized Yangon Map Book in Myanmar</strong> is set to be distributed nationwide, reaching every city and destination.
                  This edition will feature <strong>exclusive Discount & Gift Vouchers</strong>, providing your business with an unparalleled opportunity to gain exposure and attract more customers.If you want to know details..<a href="https://yangontownshipmapbook.dpsmap.com/">visit here</a>
                  <!---->

                  <!--          <div class="hover-container">-->
                  <!--    <a href="https://yangontownshipmapbook.dpsmap.com/" target="_blank">-->
                  <!--        Visit Yangon Map Book-->
                  <!--    </a>-->
                  <!--    <iframe src="https://yangontownshipmapbook.dpsmap.com/" title="Yangon Map Book"></iframe>-->
                  <!--</div>-->
                  <!---->

                </p>

              </div>
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
              <a href="/valuedclients/tomtom.php">
                <img src="/assets/images/about-us/tomtom.png" alt="tomtom">
              </a>
            </div>

            <div class="image-container">
              <a href="/valuedclients/here.php">
                <img src="/assets/images/about-us/here.png" alt="here">
              </a>
            </div>

            <div class="image-container">
              <a href="/valuedclients/esri.php">
                <img src="/assets/images/about-us/esri.png" alt="esri">
              </a>
            </div>

            <div class="image-container">
              <a href="/valuedclients/grab.php">
                <img src="/assets/images/about-us/grab.png" alt="grab">
              </a>
            </div>

            <div class="image-container">
              <a href="/valuedclients/unilever.php">
                <img src="/assets/images/about-us/unileverlogo.png" alt="unileverlogo">
              </a>
            </div>

            <!--<div class="image-container">-->
            <!--    <a href="https://www.reuters.com/article/us-myanmar-bagan-factbox-idUSSP5445920061113" target="_blank">-->
            <!--    <img src="/assets/images/about-us/reuters.png" alt="reuters">-->
            <!--    </a>-->
            <!--</div>-->

            <div class="image-container">
              <a href="/valuedclients/redcross.php">
                <img src="/assets/images/about-us/redcrosslogo.png" alt="redcrosslogo">
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

  <center>
    <!-- Start of StatCounter Code for Dreamweaver -->

    <script type="text/javascript">
      var sc_project = 310175;
      var sc_invisible = 0;
      var sc_security = "df515d3d";
      var scJsHost = (("https:" == document.location.protocol) ?
        "https://secure." : "https://www.");
      document.write("<sc" + "ript type='text/javascript' src='" +
        scJsHost +
        "statcounter.com/counter/counter.js'></" + "script>");
    </script>
    <!-- End of StatCounter Code for Dreamweaver -->
  </center>

  <!-- Fontawesome -->
  <script src="assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

  <!-- Jquery -->
  <script src="assets/libs/jquery-3.5.1/js/jquery-3.5.1.js"></script>


  <!-- Custom js -->
  <script src="assets/js/script.js" type="text/javascript"></script>
  <script src="assets/js/jsResponsive.js" type="text/javascript"></script>
  <!--bootstrao-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!--<script type="text/javascript">-->
  <!--  $(document).ready(() => {-->
  <!--    var slideImage = $('.slideshow').find('img').first();-->
  <!--    var images = [-->
  <!--      'assets/images/mapBook 21.11.2024 ma yoon.jpg'.-->
  <!--      'assets/images/banner-1.jpg',-->
  <!--      'assets/images/banner-2.jpg',-->
  <!--// 'assets/images/bg-arts/about_map_update.jpg'-->
  <!--// edit-->
  <!--// 'assets/images/promotionTimeMapDownloadBanner.jpeg'-->

  <!--    ];-->

  <!--    var i = 0;-->
  <!--    setInterval(function() {-->
  <!--      i = (i + 1) % images.length;-->
  <!--      slideImage.fadeOut(750, function() {-->
  <!--        $(this).attr('src', images[i]);-->
  <!--        $(this).fadeIn(750);-->
  <!--      })-->
  <!--    }, 4000);-->

  <!--  })-->
  <!--</script>-->

  <script type="text/javascript">
    $(document).ready(() => {
      var slideImage = $('.slideshow').find('img').first();
      var images = [
        'assets/images/mapBook 21.11.2024 ma yoon.jpg', // Fixed syntax issue here
        'assets/images/banner-1.jpg',
        'assets/images/banner-2.jpg',
        'assets/images/YgnTwonship.png'
        // 'assets/images/bg-arts/about_map_update.jpg',
        // 'assets/images/promotionTimeMapDownloadBanner.jpeg'
      ];

      var i = 0;
      setInterval(function() {
        i = (i + 1) % images.length;
        slideImage.fadeOut(750, function() {
          $(this).attr('src', images[i]);
          $(this).fadeIn(750);
        });
      }, 4000);
    });
  </script>

  <!-- App -->
  <script src="assets/js/app.js" type="text/javascript"></script>

  <!-- Analytics -->
  <script src="assets/js/analytics.js" type="text/javascript"></script>

</body>

</html>