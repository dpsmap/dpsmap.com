<?php
include("../db.php");
include("../globalfunction.php");

$passkey = $_GET['passkey'];//passkey that got from link
$tbl_name1 = "temp";

$sql1 = "SELECT * FROM $tbl_name1 WHERE confirm_code='$passkey'";//retrieve from table where row that match this 
$result1 = mysqli_query($conn,$sql1);

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Design Printing Services, Kachin Map</title>
	<META NAME="keywords" content="myanmar, burma, myanmar map, burma map, the map of myanmar, pyinmana map, naypyidaw map, bagan map, mandalay map, inlay map, mrauk-u map, amarapura map, kyaikhtiyo map, sittwe map, pyinoolwin map, taunggyi map, myanmar photogallery, myanmar travel, myanmar news, beaches in myanmar, myanmar festival, thingyan festival, myanmar free magazines, online myanmar map shop, printing services, Design Printing Service, business card, PRINTING SERVICE, www.dpsmap.com, SERVICE, BUSINESS CARD, SERVICE, WWW.DPSMAP.COM, Service, Business">
	<META NAME="description" content="Design Printing Services, Magway Map">
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
	<link type="text/css" rel="stylesheet" href="../css/lightbox-form.css">
	<link rel="stylesheet" href="form.css">
	
	<script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-57336593-1', 'auto');  ga('send', 'pageview');</script>
	<script src="../js/jquery-latest.min.js"></script>
	<script src="../js/script.js"></script>
    <script src="../js/jquery183.min.js"></script>
	<script src="../js/ninja-slider.js" type="text/javascript"></script>
    <script src="../js/responsiveslides.min.js"></script>
	<script src="../js/lightbox-plus-jquery.min.js"></script>
	<script src="../js/lightbox-form.js" type="text/javascript"></script>
	<script src="form.js"></script>
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
	
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right:0px; top:350px;">
     <a style="background-color:#333;border-color:#2e6da4;color:#fff;line-height:18px;" class="btn btn-primary" href="http://dpsmap.com/contact.html" role="button">Book Now !</a>
</div>
<div class="wrap-body">

<header class="bg-theme">
	<div class="wrap-header zerogrid">
		<div class="row">
			<a href='http://www.dpsmap.com' class="logo"><img class="img-responsive" src="../images/dpsmap_title.png" alt="Logo"></a>
			<div class="header_contact">
				<p class="translate_content">
				<!--a href="http://dpsmap.com/yangon/index.shtml"><img src="../images/eng_flag.jpg" alt="English_Flag"></a-->
				<a href="http://myanmar.dpsmap.com/yangon/index.shtml"><img src="../images/myn_flag.jpg" alt="Myanmar_Flag"></a></p>
				<p class="head_contact"><img src="../images/ph_icon.png" alt="Phone_Icon">&nbsp;&nbsp;CALL: +95 9 774204020
				<img src="../images/email_icon.png" alt="Email_Icon">&nbsp;&nbsp;dpsmap@gmail.com</p>
			</div>
		</div>
	</div>
</header>

<div class="bg-theme">
	<div class="filter zerogrid">
		<div class="row">
			<div class="col-full">
				
					<div id="cssmenu">
						<ul>
							<li class='active'><a href="http://dpsmap.com">Home</a></li>
							<li><a href="#">Our Service</a>
									<ul>
									<li><a href="http://dpsmap.com/map_plotting.shtml">Map Plotting</a></li>
									<li><a href="http://dpsmap.com/printing.html">Printing Service</a></li>
									<li><a href="#">Website Service</a></li>
									</ul>
							</li>
							<li><a href="#">Products & Prices</a>
								<ul>
									<li><a href="http://dpsmap.com/gis/index.shtml">GIS Map</a></li>
									<li><a href="http://dpsmap.com/gps/index.html">GPS</a></li>
								</ul>
							</li>
							<li><a href="http://dpsmap.com/map/index.shtml">Map</a>
								<ul>
									<li><a href="http://dpsmap.com/touristmap.shtml">Tourist Maps</a></li>
									<li><a href="http://dpsmap.com/moy.html">The Map of Yangon</a></li>
								</ul>
							</li>
							<li><a href="http://dpsmap.com/aboutus/index.htm">About Us</a></li>
							<li><a href="http://dpsmap.com/news/">News</a></li>
							<li><a href="http://dpsmap.com/contact.html">Contact Us</a></li>
						</ul>
						<FORM method=GET action="http://www.google.com/search" id="search">

							<input type=hidden name=sitesearch value="www.dpsmap.com" checked>

							<input type=hidden name=domains value="dpsmap.com">

							<input type=hidden name=oe value=UTF-8>									
	
							<input type="text" name="q" size="40" placeholder="Search..." >

						</form>
					</div>
				
			</div>
		</div>
	</div>
</div>



<!--////////////////////////////////////Container-->
<section id="container">
	<div class="wrap-container clearfix">
		<div id="main-content">
			
				<div class="zerogrid">
					<!---
					<div class="col-full">
						<div class="row">
							<div class="wrap-col">
								<div class="col-1-4">
									<div class="widget">
										<div class="wid-header">
											<h5>Map Information</h5>
										</div>
										<div class="wid-content">
											<li><a href="../myanmar/index.shtml">Myanmar Map (Burma Map)</a></li>
											<li><a href="../myanmar/asean_map.html">Asean Highway Map</a></li>
											<li><a href="index.shtml">Yangon Map</a></li>
											<li><a href="../mandalay/index.shtml">Mandalay Map</a></li>
											<li><a href="../bagan/index.shtml">Bagan Map</a></li>
											<li><a href="../mrauku/index.shtml">Mrauk-U Map</a></li>
											<li><a href="../amarapura/index.shtml">Amarapura Map</a></li>
											<li><a href="../taunggyi/index.htm">Taunggyi Map</a></li>
											<li><a href="../pyinoolwin/index.shtml">Pyin Oo Lwin Map (May Myo)</a></li>
											<li><a href="../inlay/index.shtml">Inlay Map</a></li>
											<li><a href="../sittwe/index.shtml">Sittwe Map</a></li>
											<li><a href="../pyinmana.shtml">Naypyitaw Map</a></li>
											<li><a href="../kyaiktiyo/index.shtml">Kyaikhtiyo - Golden Rock map</a></li>
										</div>
									</div>	
									
									<div class="widget">
										<div class="wid-content1">
											<h6><a href="../index.htm#Direct">Free Map Order</a></h6>
										</div>
									</div>
								</div>
								<div class="col-1-2">
									<div class="slider_content">
									<div class="callbacks_container">
										<ul class="rslides" id="slider">
														<li>
															<img src="../images/slider/007-Real-Time-Tracker.jpg" alt="Real-Time-Tracker">
														</li>
														<li>
															<img src="../images/slider/Bar-Graph.jpg" alt="Bar-Graph">
														</li>
														<li>
															<img src="../images/slider/Fule-Sensor.jpg" alt="Fule-Sensor">
														</li>
														<li>
															<img src="../images/slider/GPS.jpg" alt="GPS">
														</li>
														<li>
															<img src="../images/slider/Map-Plotting.jpg" alt="Map-Plotting">
														</li>
														<li>
															<img src="../images/slider/Online-GPS-Tracking-System.jpg" alt="Online-GPS-Tracking-System">
														</li>
														<li>
															<img src="../images/slider/Tourist-Map.jpg" alt="Tourist-Map">
														</li>
														<li>
															<img src="../images/slider/Tower-Location.jpg" alt="Tower-Location">
														</li>
														<li>
															<img src="../images/slider/GPS--Car-DVR.jpg" alt="GPS--Car-DVR">
														</li>
														<li>
															<img src="../images/slider/GPS-Watch.jpg" alt="GPS-Watch">
														</li>
														<li>
															<img src="../images/slider/photo1.jpg" alt="Image">
														</li>
										</ul>
									</div>	
									<div class="slider_footer">
													<div class="col-1-4">
														<a href="../myanmarmap.html"><img src="../images/tmm_home.png" alt="Tourist Map Of Myanmar"></a>
													</div>
													<div class="col-1-4">
													<a href="../yangon_touristmap.html"><img src="../images/ytm_home.png" alt="Yangon Tourist Map"></a>
													</div>
													<div class="col-1-4">
													<a href="../mapofbagan.html"><img src="../images/bagan_home.png" alt="Bagan Tourist Map"></a>
													</div>
													<div class="col-1-4">
													<a href="../naypyitawmap.html"><img src="../images/npt_home.png" alt="Naypyitaw Tourist Map"></a>
													</div>
												</div>
									</div>
								</div>			
							<div class="col-1-4">
								<div class="widget">
									<div class="wid-content">
										<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDPSMyanmar%2F&tabs=timeline&width=270&height=460&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
									width="270" height="460" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
									</div>
								</div>
							</div>
						</div>	
						</div>
					</div>
--->					
							
					<div class="row">
						<div class="wrap-col">
								<div class="header">
									<div class="row">
										<div class="col-4-5">
											<h1 style="font-size:20px;line-height:20px;letter-spacing:0px;">Kachin Map Download</h1>
										</div>
										<div class="col-1-5">
											<a class="map_order_btn" href="http://dpsmap.com/#Direct" role="button">Free Map Order</a>
										</div>
									</div>
								</div>
						</div>
						<div class="col-full">
							<div class="wrap-col">
								<div id="yangon_map_content">
									<div class="row">	
									<?php	
									if($result1)//if successfully queried
{
	$count = mysqli_num_rows($result1);//count how many row has this passkey
	if($count==1)//if found this passkey in our database,retrieve data from table "temp_members_db"
	{
		$rows=mysqli_fetch_array($result1);
		$Name=$rows['Name'];
		$Email=$rows['Email'];
		$Phone=$rows['Phone'];
		$Reason=$rows['Reason'];
		$Wherefrom=$rows['Wherefrom'];
                $Page=$rows['Page'];
                $Created_Date=GetCurrentDate();
		$tbl_name2="register";
		
		$sql2="INSERT INTO $tbl_name2(Name, Email, Phone, Reason,Wherefrom,Page,Created_Date)VALUES('$Name', '$Email', '$Phone', '$Reason','$Wherefrom','$Page','$Created_Date')";// Insert data that retrieves from "temp_members_db" into table "registered_members"  
		$result2=mysqli_query($conn,$sql2);
	}//end if $count
	else//if not found passkey,display message"wrong confirmation code
										{
											?> <p style="text-align:center; font-size:20px; color:red;"><?php echo "Wrong Confirmation Code";?></p> 
											<?php
										}
									// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
	if($result2)
	{
		?> 
		<p style="text-align:center; font-size:20px; color:#1d1463;"><?php echo "Your account has been activated! . Please Click on button to download file. "; ?></p>
       <p style="text-align:center;"> <button  onclick="window.location.href='images/Kachin.zip';this.disabled=true; this.value='Please Wait...';" name="btndownload">Download Here</button></p>
<?php
		$sql3="DELETE FROM $tbl_name1 WHERE confirm_code='$passkey'";// Delete information of this user from table "temp_members_db" that has this passkey 
		$result3=mysqli_query($conn,$sql3);
	}//end if $result2
}//end if $result1
?>
								
									</div>
									<!---
									<div class="row">
										<div class="col-lg-12">
											<p style="padding:10px;">DPS၏ေျမပံုမ်ားသည္ ၀န္ထမ္းအင္အား၊အခ်ိန္အားအဘက္ဘက္တို႕မွ အကုန္အက်ခံေရးဆြဲထားေသာ DPS၏မူပိုင္ေျမပံုမ်ားျဖစ္ပါသည္။ ယခုDownloadလုပ္ရန္ေပးထားေသာေျမပံုသည္တစ္ဦးတစ္ေယာက္အတြက္အသံုးျပဳရန္သာျဖစ္ျပီးကိုယ္က်ိဳးစီးပြားအလို႕ငွာပံုႏိွပ္ျဖန္႕ျဖဴးေရာင္းခ်ျခင္းႏွင့္မည္သည့္စီးပြားေရးလုပ္ငန္းမ်ိဳးတြင္မဆိုအသံုးျပဳျခင္းအားတားျမစ္ထားပါသည္။သို႕ျဖစ္ပါေသာေၾကာင့္မည္သည့္ေျမပံုမ်ားကိုမဆိုအသံုးျပဳလိုပါကခြင့္ျပဳခ်က္ေတာင္းခံရမည္ျဖစ္ျပီး DPS ဘက္မွလည္းမွန္ကန္တိက်ျပီးအရည္အေသြးေကာင္းမြန္စြာႏွင့္အခ်ိန္တိုအတြင္းလူၾကီးမင္းတို႕လုိအပ္ခ်က္ကိုကူညီေဆာင္ရြက္ေပးသြားမည္ျဖစ္ေၾကာင္းေလးစားစြာ အသိေပးအပ္ပါသည္။</p>
										</div>
									</div>
									--->
									
								</div>
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
</section>


<div class="wrap-box" id="first_footer"><!--Start Box-->
	<div class="zerogrid">
		<div class="row">
				<div class="col-1-4">
					<div class="wrap-col">
						<li><a href="http://dpsmap.com/myanmar/index.shtml">Myanmar Map (Burma Map)</a></li>
						<li><a href="http://dpsmap.com/myanmar/asean_map.html">Asean Highway Map</a></li>
						<li><a href="http://dpsmap.com/yangon/index.shtml">Yangon Map</a></li>
						<li><a href="http://dpsmap.com/mandalay/index.shtml">Mandalay Map</a></li>
						<li><a href="http://dpsmap.com/bagan/index.shtml">Bagan Map</a></li>
						<li><a href="http://dpsmap.com/mrauku/index.shtml">Mrauk-U Map</a></li>
						<li><a href="http://dpsmap.com/amarapura/index.shtml">Amarapura Map</a></li>
						<li><a href="http://dpsmap.com/taunggyi/index.htm">Taunggyi Map</a></li>
						<li><a href="http://dpsmap.com/pyinoolwin/index.shtml">Pyin Oo Lwin Map (May Myo)</a></li>
						<li><a href="http://dpsmap.com/inlay/index.shtml">Inlay Map</a></li>
						<li><a href="http://dpsmap.com/sittwe/index.shtml">Sittwe Map</a></li>
						<li><a href="http://dpsmap.com/pyinmana.shtml">Naypyitaw Map</a></li>
						<li><a href="http://dpsmap.com/kyaiktiyo/index.shtml">Kyaikhtiyo - Golden Rock map</a></li>
					</div>
				</div>
				
				<div class="col-1-4">
					<div class="wrap-col" id="popular_link">
						<li><a href="http://dpsmap.com/downloadmap/magway.html">Magway Map</a></li>
						<li><a href="http://dpsmap.com/downloadmap/sagaing.html">Sagaing Map</a></li>
						<li><a href="http://dpsmap.com/downloadmap/kachin.html">Kachin Map</a></li>
						<li><a href="http://dpsmap.com/downloadmap/rakhine.html">Rakhine Map</a></li>
						<li><a href="http://dpsmap.com/downloadmap/shan.html">Shan Map</a></li>
						<li><a href="http://dpsmap.com/gis/index.shtml">GIS Map</a></li>
						<li><a href="http://dpsmap.com/map/index.shtml">Map</a></li>
						<li><a href="http://dpsmap.com/online_map_shop/">Online Map Shop</a></li>
						<li><a href="http://dpsmap.com/map_plotting.shtml">Map Plotting</a></li>
						<li><a href="http://dpsmap.com/gps/index.html">GPS</a></li>
						<li><a href="http://dpsmap.com/aboutus/index.htm">About Us</a></li>
						<li><a href="http://dpsmap.com/ybs.html">YBS</a></li>
						<li><a href="http://dpsmap.com/contact.html">Contact Us</a></li>
						<li><a href="http://dpsmap.com/gis/oldgis.shtml">OLD GIS</a></li>
					</div>
				</div>
				
				
			<div class="col-2-4">
				<div class="wrap-col" style="padding:0px 10px;">
					<h5>Design Printing Services Co., Ltd. (D.P.S)</h5> 
					<p>Rm:307, Yae Kyaw Complex, Yae Kyaw Road, Pazundaung Township, Yangon, Myanmar (Burma)</p>
					<p>165/167, Rm.4, 1st Flr., 35th Street, Kyauktada Township, </br>Yangon, Myanmar (Burma).</p>
					 <p><img src="images/ph_icon.png" alt="Phone_Icon">&nbsp;(+95-9) 774 204020, 775 204020, 455 204020<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+95-1) 20 40 20, 245 230 </p>
					 <p><img src="images/email_icon.png" alt="Email_Icon">&nbsp;<a href="mailto:www.dpsmap@gmail.com">dpsmap@gmail.com</a></p>
					 <p>&nbsp;</p>
				</div>
			</div>
				
		</div>
	</div>
</div>

<!--////////////////////////////////////Footer-->
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-full">
					<div class="wrap-col">
						<p>Copyright © 2016 by D.P.S</p>
						<a target="_blank" href="https://www.facebook.com/DPSMyanmar"><img src="../images/facebook.png" alt="Facebook_Photo"></a>	
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

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