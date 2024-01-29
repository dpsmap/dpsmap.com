<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/urlConfig.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="GIS, DPS GIS,">
    <META NAME="description" content="DPS GIS, GIS">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/gis.css" />
    <link rel="stylesheet" href="../assets/css/1SQFT.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <!-- Datatable -->
    <link rel="stylesheet" href="../assets/libs/datatables-1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../assets/libs/datatable-responsive-2.3.0/css/responsive.dataTables.min.css" />

    <!-- Swiper JS -->
    <link rel="stylesheet" href="../assets/libs/swiper-8.3.2/css/swiper-bundle.min.css">
    <title> GIS - DPS Map </title>
    
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

        <div class="custom-heading gis">
            <div class="main-heading">
                GIS MAP
            </div>
        </div>

        <div class="gis-card-view">
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        What is GIS?
                    </div>
                </div>
                <div class="description">
                    <p>
                        A geographic information system (GIS) is a framework for gathering, managing, and analyzing location data.
                        Rooted in the science of geography, GIS integrates many types of data.
                        It analyzes spatial location and organizes layers of information into visualizations using maps and 3D scenes.
                    </p>
                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        DPS GIS
                    </div>
                </div>
                <div class="description">
                    <div class="description-left">
                        <p>
                            We at DPS have been involved in Map making and data warehousing with Geographical Information System (GIS) from day one.
                            Our first project is to acquire Satellite Maps in 1998 (that time satellite maps are reversed for military
                            and oil and gas exploration only in Burma).
                            Then we set up Ground Control Points using Trimble Pro XR survey GPS.
                            We have completed Yangon Streets in UTM in 1998.
                            At that time our major customer includes US Government, MEGA Life Sciences.
                            Now our GIS Data includes the whole Myanmar Road Network, Villages Points, Address Points (AP) and Points of Interest (POI).
                            APs are mainly used by Ride Hailing Applications and Navigation such as Grab Taxi and Tom Tom. DPS has some 300,000 APs for Yangon
                            and Mandalay and other major cities. POIs are used by City Guide Maps, Ride Hailing and Distribution companies (Retail Outlets).
                            DPS has 60,000 POI with rich attributes for Distribution and Retail companies as well as Bank/Insurance application.
                            DPS Future rely on its expertise to collect rich attribute data for future use of Retail, Navigation and Autonomous Vehicles.
                        </p>
                    </div>
                    <div class="description-right">
                        <div class="image-container">
                            <img src="../assets/images/gis/dpsgis-1-768x576.jpg" alt='arc-gis' />
                        </div>
                    </div>
                </div>
                <div class="text-dropdown">
                    <div class="text-dropdown-left">
                        <details>
                            <summary>
                                Do you want to build your own database for your company? (Our services)
                            </summary>
                            <ul>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Data Collection & Survey Service.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>GIS Map and Database consulting Service.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Utility Mapping Services.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Telecom Mapping and GIS Service.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Banks</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Distribution Services</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Internet Service Providers</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Internet Service Providers</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Video Record Data Survey for Lane, Street, Road within the restricted area (POI, AOI)</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>House Number Data Collect Survey Services within the restricted area (POI, AOI)</li>
                                <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Ground Survey Services within the restricted area (POI, AOI)</li>
                            </ul>
                        </details>
                    </div>
                    <div class="text-dropdown-right">
                        <details>
                            <summary>
                                Yangon GIS Map Soft Copy ( Existing Data )
                            </summary>
                            <ul>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>2021 updated data extends to Yangon Region Boundaries.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Address Database with House numbers guaranteed to exceed any available online data.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Village Tracts</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Villages</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Township Boundary</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Towns</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Railways</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Industrial Zones</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Points of Interest – POI Layer</li>
                                <li>Bus Stops ( 2000+ ), Government Offices ( 370+ ), Schools ( 340+ ),</li>
                                <li>Factory, Bank, Condominium,</li>
                                <li>Hotel, Restaurant, Monastery & Religious Building, Pagoda,</li>
                                <li>Railway Station,</li>
                                <li>Super Market, Office Building, Hospital & Clinic,</li>
                                <li>Church, Gas Station, Stadium, Park, Embassy included.</li>
                            </ul>
                        </details>
                    </div>
                </div>
                <div class="btn-container">
                    <a href="https://dpsmap.com/contact/">Contact Now</a>
                </div>

            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        GEOGRAPHIC INFORMATION SYSTEM
                    </div>
                </div>
                <!-- Slider main container -->
                <div class="swiper-container">
                    <span class="icon-container close" onclick="swiperFullScr()">
                        <i class="fa-solid fa-minimize"></i>
                    </span>
                    <div class="swiper">
                        <span class="icon-container open" onclick="swiperFullScr()">
                            <i class="fa-solid fa-expand"></i>
                        </span>

                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">

                                <img src="../assets/images/gis/drone.jpg" alt="slide-1" />

                            </div>
                            <div class="swiper-slide">

                                <img src="../assets/images/gis/garden.jpg" alt="slide-2" />

                            </div>
                            <div class="swiper-slide">

                                <img src="../assets/images/gis/nancho-slider.jpg" alt="slide-3" />

                            </div>
                            <div class="swiper-slide">

                                <img src="../assets/images/gis/retail-outlet-slider.jpg" alt="slide-4" />

                            </div>
                            <div class="swiper-slide">

                                <img src="../assets/images/gis/ward.jpg" alt="slide-5" />

                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Our Current Activity 
                    <h6><i>Since 2018, we have been collecting the POIs for Yangon and Naypyidaw, APs for Yangon, Mandalay, and Naypyidaw which is mainly for Grab Taxi.</i></h6>
                    </div>
                </div>
                <div class="for-home-number">
                    <div class="for-home-number-left">
                        <div class="image-container">
                            <img src="../assets/images/gis/APs-Coverage-Map.jpg" alt='mapillary' />
                            <h1 text-align="center">Yangon POIs Coverage Map</h1>
                        </div>
                    </div>
                    <div class="for-home-number-right">
                        <div class="image-container">
                            <img src="../assets/images/gis/POIs-Coverage-Map.jpg" alt='flowchart' />
                            <h1>Yangon APs Coverage Map</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Step by Step Demonstration of How to List House Number Data
                    </div>
                </div>
                <div class="house-number">
                    <div class="image-container">
                        <img src="../assets/images/gis/house-number-data-survey.jpg" alt='house-number' />
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Shop Data and Retail Outlet
                    </div>
                </div>
                <div class="retail-outlet-image">
                    <div class="image-container">
                        <img src="../assets/images/gis/shop-data.jpg" alt='shop-data' />
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Shop Data and Retail Outlet Video
                    </div>
                </div>
                <div class="retail-outlet-video">
                    <div class="video-container">
                        
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/fsjWb_WEWW8?si=LyuvIJMbnxhOZhZz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                        </iframe>
                        
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Counting High Condo
                    </div>
                </div>
                <div class="high-condo">
                    <div class="image-container">
                        <img src="../assets/images/gis/ygn-condo-2048x1448.jpg" alt='ygn-condo' />
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        360 Photos
                    </div>
                </div>
                <div class="three60-photos">
                    <div class="custom-row">
                        <div class="three60-image-container">
                            <iframe class="momentopress-embed" src="https://momento360.com/e/u/affb7bf2d200485cb8bc8cc8bf917a5c?utm_campaign=embed&amp;utm_source=other&amp;heading=0&amp;pitch=0&amp;field-of-view=75" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="three60-image-container">
                            <iframe class="momentopress-embed" src="https://momento360.com/e/u/75f06de8f204431499a859083c197c78?utm_campaign=embed&amp;utm_source=other&amp;heading=0&amp;pitch=0&amp;field-of-view=75" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="three60-image-container">
                            <iframe class="momentopress-embed" src="https://momento360.com/e/u/affb7bf2d200485cb8bc8cc8bf917a5c?utm_campaign=embed&amp;utm_source=other&amp;heading=0&amp;pitch=0&amp;field-of-view=75" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <div class="three60-image-container">
                            <iframe class="momentopress-embed" src="https://momento360.com/e/u/3d0e3867756a483286127893c3c55f76?utm_campaign=embed&amp;utm_source=other&amp;heading=0&amp;pitch=0&amp;field-of-view=75" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Services for Fiber Optic Cable
                    </div>
                </div>
                <div class="fiber-optic-cable">
                    <div class="fiber-optic-cable-left">
                        <div class="text-dropdown">
                            <details open>
                                <summary>
                                    Many Fiber services company are using GIS MAP for following cases:
                                </summary>
                                <ul>
                                    <li><span class="icon-container">1.</span>Fiber Services need to design the network of fiber to be laid out before actual ground work. GIS is essential to estimate the length, allocation of work, location of trails to dig and avoid the obstacles.</li>
                                    <li><span class="icon-container">2.</span>Can store database in GIS Map, for example man-holes and hand-holes, junction boxes, cabinets or what kind of fiber cable used.</li>
                                    <li><span class="icon-container">3.</span>According to the stored database, you can also know the end date of the fiber line and easily maintain if it is damaged.</li>
                                </ul>
                                #Why should use GIS MAP?
                                <ul>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>2021 updated data extends to Yangon Region Boundaries.</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Address Database with House numbers guaranteed to exceed any available online data.</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Village Tracts</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Villages</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Township Boundary</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Towns</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Railways</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Industrial Zones</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Points of Interest – POI Layer</li>
                                </ul>
                            </details>
                        </div>
                    </div>
                    <div class="fiber-optic-cable-right">
                        <div class="image-container">
                            <img src="../assets/images/gis/fiberoptic-768x567.jpg" alt='fiberoptic' />
                        </div>
                    </div>

                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        For home number (database), the GPS camera have to be installed in motorbikes and bicycles to carry out the survey.
                        In front of every home, the GPS points and photos have to be taken along with collecting the details.
                    </div>
                </div>
                <div class="for-home-number">
                    <div class="for-home-number-left">
                        <div class="image-container">
                            <img src="../assets/images/gis/mapillary-768x566.jpg" alt='mapillary' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/house-number-map-768x504.jpg" alt='house-number-map' />
                        </div>
                    </div>
                    <div class="for-home-number-right">
                        <div class="image-container">
                            <img src="../assets/images/gis/flowchart-546x1024.jpg" alt='flowchart' />
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Update Aerial Photo taken with Drone Farm Land and Land,how to get a site plan image by using Drone?
                    </div>
                </div>
                <div class="description">
                    <p>
                        Own property, land and land Aerial Photo Terrain Digital Elevation Model (DEM) Contour maps,
                        If you want to create a site plan, you can use high quality aerial photos by Drone to produce high quality site maps and compute site plans.
                        It also calculates currents and floods in the Site Plan Area;
                        Where should the Site Plan Area be built? How should a drain be constructed?
                        How should plants be planted? Data is available about the altitude, topography, etc.
                    </p>
                </div>
                <div class="update-aerial">
                    <div class="text-dropdown">
                        <details open>
                            <summary>
                                The Benefits of using Drone Aerial Photo when printing map.
                            </summary>
                            <ul>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Up to date Aerial photo of your property.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Digital Elevation Model (DEM) is available.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>Contour Maps are available to know altitude map.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>You can find out about the number of plants growing on your property or the nature of the plants and the conditon of the plants.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>The right decision can be made for the construction of drainage pipes and the drainage of pipelines in their own land.</li>
                                <li><span class="icon-container"><i class="fa-solid fa-minus"></i></span>The low altitude and flood situation can be seen clearly, so it can make the right decisions for residential and other important building.</li>
                            </ul>
                        </details>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">
                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Sample photo take by Drone and print out by aerial photo.
                    </div>
                </div>
                <div class="aerial-photo">
                    <div class="custom-row">
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/1-150x150.jpg" alt='aerial-photo-1' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/2-150x150.jpg" alt='aerial-photo-2' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/3-150x150.jpg" alt='aerial-photo-3' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/4-150x150.jpg" alt='aerial-photo-4' />
                        </div>
                    </div>
                    <div class="custom-row">
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/5-150x150.jpg" alt='aerial-photo-5' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/6-150x150.jpg" alt='aerial-photo-6' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/7-150x150.jpg" alt='aerial-photo-7' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/8-150x150.jpg" alt='aerial-photo-8' />
                        </div>
                    </div>
                    <div class="custom-row">
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/9-150x150.jpg" alt='aerial-photo-9' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/10-150x150.jpg" alt='aerial-photo-10' />
                        </div>
                        <div class="image-container">
                            <img src="../assets/images/gis/aerial-photo/11-150x150.jpg" alt='aerial-photo-11' />
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">
                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Mergui Archipelago Island Finder
                    </div>
                </div>
                <div class="archipelago">
                    <div class="custom-row">
                        <div class="custom-card">
                            <div class="custom-heading">
                                <div class="main-heading">
                                    Myanmar GIS
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="../assets/images/gis/myanmargis.jpg" alt='myanmargis' />
                            </div>
                        </div>

                        <div class="custom-card">
                            <div class="custom-heading">
                                <div class="main-heading">
                                    Yangon GIS
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="../assets/images/gis/yangongis.jpg" alt='yangongis' />
                            </div>
                        </div>

                    </div>
                    <div class="custom-row">
                        <div class="custom-card">
                            <div class="custom-heading">
                                <div class="main-heading">
                                    Yangon City Digital Map
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="../assets/images/gis/yangon-city-digital-map-768x576.jpg" alt='yangon-city-digital-map' />
                            </div>
                        </div>

                        <div class="custom-card">
                            <div class="custom-heading">
                                <div class="main-heading">
                                    Yangon City Digital Map
                                </div>
                            </div>
                            <div class="image-container">
                                <img src="../assets/images/gis/mergui-768x464.png" alt='mergui-768x464' />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="block">
                <div class="description">
                    <p>
                        The Yangon City Digital Map is a Geographic Information System (GIS) using Intergraph’s Geomedia Professional software. Base map is digitized from Satellite Imagery – IRS Panchromatic at 5.8 meter resolution.
                        It was calibrated with Trimble’s Pro XR GPS for on ground reference.
                    </p>
                </div>
            </div>
            <div class="block">
                <div class="tabs-container">
                    <div class="tab">
                        <button id="defaultOpen" class="tablinks" onclick="openTab(event, 'Main-Dataset')">Main Dataset</button>
                        <button class="tablinks" onclick="openTab(event, 'Available-Datasets')">Available Datasets</button>
                        <button class="tablinks" onclick="openTab(event, 'Available-Format')">Available Format</button>
                        <button class="tablinks" onclick="openTab(event, 'Price-and-License')">Price and License</button>
                        <button class="tablinks" onclick="openTab(event, 'Category-(A)')">Category (A)</button>
                        <button class="tablinks" onclick="openTab(event, 'Category-(B)')">Category (B)</button>
                        <button class="tablinks" onclick="openTab(event, 'Category-(C)')">Category (C)</button>
                        <button class="tablinks" onclick="openTab(event, 'Category-(D)')">Category (D)</button>
                    </div>

                    <div id="Main-Dataset" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Street map</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Street names</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Landmarks / Places (Moderated by DPS)</li>
                        </ul>
                    </div>

                    <div id="Available-Datasets" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Township Demographics (33 Townships + Thanlyin)</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Banks</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Healthcare Centers</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Government offices</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Hotels and restaurants</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Retail Shops (Customized survey)</li>
                        </ul>
                    </div>

                    <div id="Available-Format" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>DXF</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Shape file (Arc Info)</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>MapInfo/ MIF</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Geomedia</li>
                        </ul>
                    </div>
                    <div id="Price-and-License" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Prices varies according to the following categories.</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Please contact us for your specific requirements and we will prepare a quote for you.</li>
                        </ul>
                    </div>

                    <div id="Category-(A)" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Lanmadaw</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Kyauktada</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Pabedan</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Latha</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Botahtaung</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Pazundaung</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Dagon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Seikkan</li>
                        </ul>
                    </div>
                    <div id="Category-(B)" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Kyeemyindaing</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Ahlone</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Bahan</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Sanchaung</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Mingalar Taungnyunt</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Tarmwe</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Kamayut</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Yankin</li>
                        </ul>
                    </div>
                    <div id="Category-(C)" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Kyeemyindaing</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Hlaing</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>South Okkalapa</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>North Okkalapa</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Mayangone</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Insein</li>
                        </ul>
                    </div>
                    <div id="Category-(D)" class="tabcontent">
                        <ul>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Thaketa</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Dawbon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Dagon Seikkan</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>South Dagon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>North Dagon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>East Dagon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Shwe Paukkan</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Mingalardon</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Hlaing Tharyar</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Shwe Pyithar</li>
                            <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Dala</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Benefits of GIS
                    </div>
                </div>
                <div class="description">
                    <ul>
                        <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Cost savings resulting from greater efficiency.</li>
                        <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Better decision making.</li>
                        <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Improved communication.</li>
                        <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Better geographic information recordkeeping.</li>
                        <li><span class='icon-container'><i class="fa-solid fa-asterisk"></i></span>Managing geographically.</li>
                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">

                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        Create a customized map with your choice of data layers!
                    </div>
                </div>
                <div class="customized-map">
                    <div class="customized-map-left">
                        <div class="text-dropdown">
                            <details open>
                                <summary>
                                    Natural geographical features:
                                </summary>
                                <ul>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Rivers and lakes</li>
                                </ul>
                            </details>
                        </div>
                        <div class="text-dropdown">
                            <details open>
                                <summary>
                                    Man - made features:
                                </summary>
                                <ul>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Airfields and Lighthouses</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Cities</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Railways</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Roads</li>
                                </ul>
                            </details>
                        </div>
                        <div class="text-dropdown">
                            <details>
                                <summary>
                                    Political features:
                                </summary>
                                <ul>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Township Boundaries</li>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>State and Region Boundaries</li>
                                </ul>
                            </details>
                        </div>
                        <div class="text-dropdown">
                            <details>
                                <summary>
                                    Plus:
                                </summary>
                                <ul>
                                    <li><span class="icon-container"><i class="fa-solid fa-asterisk"></i></span>Latitude and Longitude Grids</li>
                                </ul>
                            </details>
                        </div>
                    </div>
                    <div class="customized-map-right">
                        <div class="image-container">
                            <img src="../assets/images/gis/twin-map.jpg" alt='twin-map' />
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="custom-hr">
                </div>
            </div>
            <div class="block">
                <div class="custom-heading">
                    <div class="main-heading">
                        GIS MAP
                    </div>
                </div>
                <div class="table-container">
                    <table id="" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <td>Map</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DPS-GIS-01</td>
                                <td>7,000 USD</td>
                            </tr>
                            <tr>
                                <td>DPS-GIS-02</td>
                                <td>3500 USD</td>
                            </tr>
                            <tr>
                                <td>DPS-GIS-03_MmTsp</td>
                                <td>5000 USD</td>
                            </tr>
                            <tr>
                                <td>DPS-GIS-04_Mandalay</td>
                                <td>5000 USD</td>
                            </tr>
                            <tr>
                                <td>DPS-GIS-05_Bagan</td>
                                <td>5000 USD</td>
                            </tr>
                            <tr>
                                <td>DPS-GIS-10_Naypyidaw</td>
                                <td>5000 USD</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Map</td>
                                <td>Price</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="custom-heading">
                    <div class="main-heading">
                        Paper Map
                    </div>
                </div>
                <div class="table-container">
                    <table id="" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <td>Map</td>
                                <td>Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MyanmarGuidemap</td>
                                <td>10 USD</td>
                            </tr>
                            <tr>
                                <td>TouristMapsmap</td>
                                <td>7 USD</td>
                            </tr>
                            <tr>
                                <td>YangonMapWallSheet</td>
                                <td>10 USD</td>
                            </tr>
                            <tr>
                                <td>YangonStreetDirectory</td>
                                <td>29 USD</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Map</td>
                                <td>Price</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="block">
                    <div class="custom-hr">

                    </div>
                </div>
                <div class="custom-heading">
                    <div class="main-heading">
                        Digital Maps : Myanmar
                    </div>
                </div>
                <div class="table-container">
                    <table id="" class="display" style="width: 100%">
                        <thead>
                            <tr>
                                <td>DPS Code</td>
                                <td>SNO</td>
                                <td>DATA DESCRIPTION</td>
                                <td>File Name</td>
                                <td>Entry</td>
                                <td>Type</td>
                                <td>Attribute1</td>
                                <td>Attribute2</td>
                                <td>Attribute3</td>
                                <td>Attribute4</td>
                                <td>Attribute5</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>DPSGIS01</td>
                                <td>1</td>
                                <td>Yangon City Complete Set(08)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.1</td>
                                <td>Yangon Streets</td>
                                <td>Yan_St_UTM_08</td>
                                <td>23210</td>
                                <td>Line</td>
                                <td>st.name_E</td>
                                <td>st.name_M</td>
                                <td>Tsp</td>
                                <td>Condition</td>
                                <td>Width</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.2</td>
                                <td>Yangon Township Boundary</td>
                                <td>Yan_Township_boundary</td>
                                <td> 33</td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.3</td>
                                <td>Yangon Water Body</td>
                                <td>Yan_water</td>
                                <td></td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.4</td>
                                <td>Yangon Place of Interest</td>
                                <td>Yan_places_08</td>
                                <td></td>
                                <td>Point/Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>1.5</td>
                                <td>Grid of Street Directory Book Pages</td>
                                <td>MOYgrid</td>
                                <td></td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Delivery Method</h5>
                                    <h5>After we received the payment, we will send the file with mail.</h5>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS02</td>
                                <td></td>
                                <td>Yangon City Major Roads set</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2.1</td>
                                <td>Yangon Major Streets only</td>
                                <td></td>
                                <td></td>
                                <td>Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2.2</td>
                                <td>Yangon Township Boundary</td>
                                <td> Yan_Township_boundary</td>
                                <td> 33</td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2.3</td>
                                <td> Yangon Water Body</td>
                                <td> Yan_water</td>
                                <td></td>
                                <td> Area/Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>2.4</td>
                                <td>Yangon selected Places of Interest</td>
                                <td></td>
                                <td></td>
                                <td>Point/Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS03</td>
                                <td>3</td>
                                <td>Myanmar Townships Set</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.1</td>
                                <td> Myanmar International Border</td>
                                <td></td>
                                <td></td>
                                <td>Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.2</td>
                                <td>Myanmar Town Points</td>
                                <td></td>
                                <td>926</td>
                                <td> Point</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.3</td>
                                <td> Myanmar Township Areas</td>
                                <td></td>
                                <td> 325</td>
                                <td> Area</td>
                                <td>Name</td>
                                <td> MIMUcode</td>
                                <td>StateDiv</td>
                                <td>Othername</td>
                                <td> Mname</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.4</td>
                                <td>Myanmar Major Rivers</td>
                                <td></td>
                                <td></td>
                                <td> Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.5</td>
                                <td> Railway</td>
                                <td></td>
                                <td></td>
                                <td> Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.6</td>
                                <td>Myanmar Major Road</td>
                                <td></td>
                                <td> 175</td>
                                <td>Line</td>
                                <td> Name</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>3.7</td>
                                <td> States and Divisions</td>
                                <td></td>
                                <td> 14</td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS04</td>
                                <td>4</td>
                                <td>Mandalay Dataset</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4.1</td>
                                <td>Mandalay Streets 2008</td>
                                <td></td>
                                <td></td>
                                <td>Line</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4.2</td>
                                <td>Mandalay Township Boundary</td>
                                <td></td>
                                <td></td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4.3</td>
                                <td>Mandalay Water Body</td>
                                <td></td>
                                <td></td>
                                <td>Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>4.4</td>
                                <td>Mandalay Place of Interest</td>
                                <td></td>
                                <td></td>
                                <td>Point/Area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS05</td>
                                <td>5</td>
                                <td>Bagan Dataset</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5.1</td>
                                <td>Bagan Streets</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5.2</td>
                                <td>Bagan Township Boundary</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5.3</td>
                                <td>Bagan Water Body</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>5.4</td>
                                <td>Bagan Place of Interest</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS06</td>
                                <td>6</td>
                                <td> Bagan Pagodas</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS07</td>
                                <td>7</td>
                                <td>Taunggyi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS08</td>
                                <td>8</td>
                                <td>Mawlamyaing</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS09</td>
                                <td>9</td>
                                <td> Kawthaung</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS10</td>
                                <td>10</td>
                                <td>Naypyidaw</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>NPD Streets 2007</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>NPD Township Boundary</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>NPD Water Body</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>NPD Place of Interest</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS11</td>
                                <td>11</td>
                                <td>Myanmar Airports</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Myanmar Drainage</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS12</td>
                                <td>12</td>
                                <td>Countrywide Roads tracks trails</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS13</td>
                                <td>13</td>
                                <td>Myeik</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS14</td>
                                <td>14</td>
                                <td>Mergui Detail (Planned)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td> Islands</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Townships area (population)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Townpoints</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Divesite</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Villages (Is. tourist attractions)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Rubber Plantation area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Palm Oil Plantation area</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Hydro Power</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS15</td>
                                <td>15</td>
                                <td>Bago</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS16</td>
                                <td>16</td>
                                <td> Pathein</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>DPSGIS17</td>
                                <td>17</td>
                                <td>Ayerwaddy Detail - Nargis (Planned)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>DPS Code</td>
                                <td>SNO</td>
                                <td>DATA DESCRIPTION</td>
                                <td>File Name</td>
                                <td>Entry</td>
                                <td>Type</td>
                                <td>Attribute1</td>
                                <td>Attribute2</td>
                                <td>Attribute3</td>
                                <td>Attribute4</td>
                                <td>Attribute5</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="custom-heading">
                    <div class="main-heading">
                        Technical Information For Ordering Data
                    </div>
                </div>
                <div class="table-container">
                    <table id="" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Company</td>
                                <td> : </td>
                                <td>Design Printing Services</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td> : </td>
                                <td>165/167, Room 4, 1st Floor, 35th Street, Kyauktada Tsp., Yangon, Myanmar</td>
                            </tr>
                            <tr>
                                <td>Point of Contact</td>
                                <td> : </td>
                                <td>Aye Min Oo (Mr.)</td>
                            </tr>
                            <tr>
                                <td>Telephone/Fax</td>
                                <td> : </td>
                                <td>951- 245230</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td> : </td>
                                <td>sonnyamo@gmail.com</td>
                            </tr>
                            <tr>
                                <td>Data Title</td>
                                <td> : </td>
                                <td>Myanmar Countrywide and Yangon City Digital Mapsets</td>
                            </tr>
                            <tr>
                                <td>Scale</td>
                                <td> : </td>
                                <td>Myanmar Countrywide dataset- 1:2,000,000 Yangon City dataset- 1:30,000</td>
                            </tr>
                            <tr>
                                <td>Data Layers</td>
                                <td> : </td>
                                <td>Myanmar Countrywide dataset layers: Town Points and Names, Township Areas, Rivers, Highways. Yangon City dataset layers: Townships, Banks, Healthcare Centers, Government Offices, Hotels and Restaurants, Streets, Landmarks, Points of Interest.</td>
                            </tr>
                            <tr>
                                <td>Data Format</td>
                                <td> : </td>
                                <td>Shapefile, MapInfo</td>
                            </tr>
                            <tr>
                                <td>Data Projection</td>
                                <td> : </td>
                                <td>Lat/Long (Decimal Degrees)</td>
                            </tr>
                            <tr>
                                <td>Datum</td>
                                <td> : </td>
                                <td>WGS 84</td>
                            </tr>
                            <tr>
                                <td>Ellipsoid</td>
                                <td> : </td>
                                <td>WGS 84</td>
                            </tr>
                            <tr>
                                <td>Primary Language</td>
                                <td> : </td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>Required Documentation</td>
                                <td> : </td>
                                <td>All Available Metadata</td>
                            </tr>
                            <tr>
                                <td>Data Dictionary</td>
                                <td> : </td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Database Design</td>
                                <td> : </td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td>Other Documentation</td>
                                <td> : </td>
                                <td>All available technical documentation. Data is to be seamlessly integrated and topologically correct.</td>
                            </tr>
                            <tr>
                                <td>Documentation Language</td>
                                <td> : </td>
                                <td>English</td>
                            </tr>
                            <tr>
                                <td>License Type</td>
                                <td> : </td>
                                <td>CLIENT <put no.="" of="" license="" here...=""> Quantity Seats/Users</put>
                                </td>
                            </tr>
                            <tr>
                                <td>Delivery Media</td>
                                <td> : </td>
                                <td>FTP</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="block">
                    <div class="custom-hr">

                    </div>
                </div>
                <div class="custom-heading">
                    <div class="main-heading">
                        Enquiry for GIS Map
                    </div>
                </div>
                <div class="description">
                    <p>
                        Order your set of DPS's GIS DATA MYNMAR CD today!
                        <br>DPS's GIS DATA MYANMAR is available in both Mapinfo format and ArcView (Shapefile) format.
                    </p>
                </div>
                <div class="btn-container">
                    <a href="https://shop.dpsmap.com/index.php/product/map-editing-service/">Click Here</a>
                </div>

            </div>
        </div>

    </section>
        
        <div class="custom-heading arc">
            <div class="main-heading">
                The Pizza Company location,Yangon
            </div>
        </div>
        <div class="arc-gis-container">
             <style>.embed-container {position: relative; padding-bottom: 100%; height: 0; max-width: 1000%;} .embed-container iframe, .embed-container object, .embed-container iframe{position: absolute; top: 0; left: 0; width: 100%; height: 100%;} small{position: absolute; z-index: 40; bottom: 0; margin-bottom: -15px;}</style><div class="embed-container"><iframe width="500" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" title="EFG Competitors Analysis Map" src="//dpsmm.maps.arcgis.com/apps/Embed/index.html?webmap=b67c832ebd664c39b6541f947250764c&extent=96.1198,16.7639,96.221,16.8163&zoom=true&previewImage=false&scale=true&disable_scroll=true&theme=light"></iframe></div>
        </div>
    <!-- footer area -->

    <section id="footer">
        <?php require_once('../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script src="../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Swiper JS -->
    <script src="../assets/libs/swiper-8.3.2/js/swiper-bundle.min.js" type="text/javascript"></script>

    <!-- jquery -->
    <script src="../assets/libs/jquery-3.5.1/js/jquery-3.5.1.js" type="text/javascript"></script>

    <!-- datatables-->
    <script type="text/javascript" src="../assets/libs/datatables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/libs/datatable-responsive-2.3.0/js/dataTables.responsive.min.js"></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).ready(function() {
                $('table.display').DataTable({
                    responsive: true
                });
            });
        });
        const swiper = new Swiper('.swiper', {
            // // Optional parameters
            // direction: 'landscape',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // autoplay
            autoplay: {
                delay: 3000,
            },

            // And if we need scrollbar
            // scrollbar: {
            //     el: '.swiper-scrollbar',
            // },
        });

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
        }
        document.getElementById("defaultOpen").click();
    </script>


    <!-- App -->
    <script src="../assets/js/app.js" type="text/javascript"></script>


    <!-- Analytics -->
    <script src="../assets/js/analytics.js" type="text/javascript"></script>
</body>

</html>