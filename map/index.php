<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../functions/mapOutput.php');
require_once('../config/urlConfig.php') ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title> Design Printing Services - DPS </title>
	<META NAME="keywords" content="myanmar, burma, myanmar map, burma map, the map of myanmar, pyinmana map, naypyidaw map, bagan map, mandalay map, inlay map, mrauk-u map, amarapura map, kyaikhtiyo map, sittwe map, pyinoolwin map, taunggyi map, myanmar photogallery, myanmar travel, myanmar news, beaches in myanmar, myanmar festival, thingyan festival, myanmar free magazines, online myanmar map shop, printing services, Design Printing Service, business card, PRINTING SERVICE, www.dpsmap.com, SERVICE, BUSINESS CARD, SERVICE, WWW.DPSMAP.COM, Service, Business">
	<META NAME="description" content="Design Printing Services, DPS Map">
	<meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="../css/zerogrid.css">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/responsiveslides.css">
	<link rel="stylesheet" href="../css/new_style.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/lightbox.min.css">
	<link rel="shortcut icon" type="image/x-icon"  href="../favicon.ico" />
	<link href="../css/ninja-slider.css" rel="stylesheet" type="text/css" />
	
  <link rel="manifest" href="../manifest.json">
  <link rel="stylesheet" href="../assets/css/common.css" />
  <link rel="stylesheet" href="../assets/css/responsive.css" />
  <link rel="stylesheet" href="../assets/css/division.css" />
  <link rel="stylesheet" href="../assets/css/yangon.css" />
  <link rel="stylesheet" href="../assets/css/custom_has.css" />
  <link rel="stylesheet" href="../assets/css/1SQFT.css" />
  <!-- Fontawesome -->
  <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />
  
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
	
	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57336593-1', 'auto');  ga('send', 'pageview');</script>
	<script src="../js/jquery-latest.min.js"></script>
	<script src="../js/script.js"></script>
    <script src="../js/jquery183.min.js"></script>
	<script src="../js/ninja-slider.js" type="text/javascript"></script>
    <script src="../js/responsiveslides.min.js"></script>
	<script src="../js/lightbox-plus-jquery.min.js"></script>

    <script>
		// You can also use "$(window).load(function() {"
		$(function () {
		  // Slideshow 
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function () {
			  $('.events').append("<li>before event fired.</li>");
			},
			after: function () {
			  $('.events').append("<li>after event fired.</li>");
			}
		  });
		});
	</script>

</head>
<body>
      <!-- header area -->
    <section id="header">
      <?php require_once('../widgets/pc-nav-bar.php') ?>
      <?php require_once('../widgets/mobile-nav-bar.php') ?>
    </section>
    
<script async src="https://static.addtoany.com/menu/page.js"></script>
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right:0px; top:350px;">
     <a style="background-color:#333;border-color:#2e6da4;color:#fff;line-height:18px;" class="btn btn-primary" href="../contact.html" role="button">Order Map !</a>
</div>
<div class="wrap-body">



<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div id="main-content">
			
				<div class="zerogrid">
				
					<div class="wrap-col">
						<div class="header">
							<div class="row">
								<div class="col-4-5">
									<h1 style="font-size:20px;line-height:20px;letter-spacing:0px;">Map</h1>
								</div>
								<div class="col-1-5">
									<a class="map_order_btn" href="../#Direct" role="button">Free Map Order</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-full">
						<div style="background:#fff;" class="wrap-col">
							<div class="row">
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/telecom_tower_b.jpg" alt="Telecom Tower Data Set" data-lightbox="example-set" data-title=""><img src="images/telecom_tower.jpg" alt="Telecom Tower Data Set"></a>
									</div>
								</div>
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/gis_towns_b.jpg" alt="GIS Towns Data Set" data-lightbox="example-set" data-title=""><img src="images/gis_towns.jpg" alt="GIS Towns Data Set"></a>
									</div>
								</div>
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/gis_villages_b.jpg" alt="GIS Villages Data Set" data-lightbox="example-set" data-title=""><img src="images/gis_villages.jpg" alt="GIS Villages Data Set"></a>
									</div>
								</div>
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/oil_gas_b.jpg" alt="Oil & Gas Blocks Data Set" data-lightbox="example-set" data-title=""><img src="images/oil_gas.jpg" alt="Oil & Gas Blocks Data Set"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-full">
						<div style="background:#fff;" class="wrap-col">
							<div class="row">
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/water_pipe_b.jpg" alt="Photo" data-lightbox="example-set" data-title=""><img src="images/water_pipe.jpg" alt="Photo"></a>
									</div>
								</div>
								<div class="col-1-4">
									<div id="map_content">
										<a class="example-image-link" href="images/tower_location_b.jpg" alt="Tower Location" data-lightbox="example-set" data-title=""><img src="images/tower_location.jpg" alt="Tower Location"></a>
									</div>
								</div>
								<div class="col-2-4">
									<div id="map_content">
										<a class="example-image-link" href="images/fibre_b.jpg" alt="Fibre" data-lightbox="example-set" data-title=""><img src="images/fibre.jpg" alt="Fibre"></a>
									</div>
								</div>
							</div>
						</div>
					</div>				
					
				</div>
			
		</div>
	</div>
</section>

    <section id="footer">
      <?php require_once('../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script
      src="../assets/libs/fontawesome/js/all.min.js"
      type="text/javascript"
    ></script>

    <!-- Custom js -->
    <script src="../assets/js/script.js" type="text/javascript"></script>
    <script src="../assets/js/jsResponsive.js" type="text/javascript"></script>

    <!-- App -->
    <script src="../assets/js/app.js" type="text/javascript"></script>

    <!-- Analytics -->
    <script src="../assets/js/analytics.js" type="text/javascript"></script>


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
<!-- End of StatCounter Code for Dreamweaver -->
</center>

</div>
</body></html>