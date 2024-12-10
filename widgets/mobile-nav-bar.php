<style>
    .blink {
    background-color: white;
            animation: blinker 3.5s linear infinite;
            color: black;
            text-shadow: 0.4px 0.3px black;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }

        @keyframes blinker {
            50% {
                /*opacity: 70;*/
            }
        }
</style>
<div class="mobile-header">
    <!-- <div>-->
    <!--          <marquee class="blink" scrollamount="4"> <span style="color:red">Breaking News:</span>(Unicode): Free map တွေ download ပေးနေတဲ့အစီအစဉ်က၂၀၂၄ အောက်တိုဘာလကုန်မှာပြီးတော့မှာဖြစ်လို့ အမြန်ဆုံးကိုယ်လိုအပ်တဲ့မြေပုံတွေdownloadရယူထားကြပါရန်... |  (English): The free map download program will end at the end of October 2024, so download the maps you need as soon as possible. </marquee>-->

    <!--</div>-->
    <div class="mobile-header-left">
        <div class="mobile-nav-open">
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
    <div class="mobile-header-center">
        <?php if (isset($_SESSION['user_id'])) { ?>
            <div class="avatar-container">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="username">
                <span class="dropdown-toggle">
                    <?php echo $_SESSION['username']; ?>
                    <span class="angle-down"><i class="fa-solid fa-caret-down"></i></span>
                </span>
                <div class="custom-dropdown">
                    <a href="<?php echo $http . $domain ?>/pages/map-download/dps-admin/">Panel</a>
                    <a href="<?php echo $http . $domain ?>/pages/map-download/functions/logout.php">Logout</a>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="mobile-header-right">
        
        <div class="contact">
            <span class="contact-icon">
                <a href="tel:+959775204020">
                    <i class="fa-solid fa-phone"></i>
                </a>
            </span>
        </div>
        
        <div class="contact">
            <span class="contact-icon">
                <a href="mailto:dpsmap@gmail.com" target="_blank">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </span>
        </div>
        
    </div>
</div>
<div class="mobile-navbar-container">
    <div class="logo-container">
        <a class="logo" href="https://dpsmap.com/"><img src="<?php echo $http . $domain ?>/assets/favicon/favicon-512x512.png" loading="lazy" alt="dpsmap" />
        </a>
        <div class="heading">
            <span class="main-heading">DPSMAP.COM </span>
            <span class="sub-heading">Design Printing Services</span>
        </div>
    </div>
    <ul class="mobile-navbar">
        <li><a href="<?php echo $http . $domain ?>/">Home</a></li>
        <li><a href="<?php echo $http . $domain ?>/pages/about-us/">About Us</a></li>
        <li>
            <a class="dropdown-toggle">Product & Services
                <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span></a>
                
            <div class="custom-dropdown">
                    <a href="<?php echo $http . $domain ?>/yangon/">Yangon Map</a>
                    <a href="<?php echo $http . $domain ?>/myanmar/">Myanmar Map</a>
                    <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>
                    <a href="<?php echo $http . $domain ?>/naypyitaw/">Naypyitaw Map</a>
                    <a href="<?php echo $http . $domain ?>/bago/">Bago Map</a>
                    <a href="<?php echo $http . $domain ?>/1sqft/">1 SQFT</a>
                <!--<a target="_blank" href="https://dpsmap.com/districts/">District</a>-->
                <!--<a target="_blank" href="https://dpsmap.com/industrial/">Industrial</a>-->
                    <a href="<?php echo $http . $domain ?>/mapplotting.php">Map Plotting</a>
                    <a href="<?php echo $http . $domain ?>/printing-services/">Printing Service</a>
                    <a href="<?php echo $http . $domain ?>/gis/">GIS Map</a>
                    <a href="<?php echo $http . $domain ?>/tracking/">Tracking</a>
                    <a href="<?php echo $http . $domain ?>/website-services/">Website Service By DPS</a>
                    
                </div>
        </li>
        <li>
            <a href="https://shop.dpsmap.com/" class="dropdown-toggle" target="_blank">Shop
                <span class="angle-down"></span></a>
         
        </li>
        <li>
            <a href="<?php echo $http . $domain ?>/contact/">Contact Us</a>
        </li>
        
        <li>
            <a target="_blank" href="https://address.dpsmap.com/login.php">Address.dpsmap</a>
        </li>
        
          <!--27.11.2024-->
              <li>
                <a target="_blank" href="https://dpsmap.com/districts/">District</a>
            </li>
              <li>
                <a target="_blank" href="https://dpsmap.com/industrial/">Industrial</a>
            </li>
            <!--27.11.2024-->
        
        <li style="padding-bottom: 0px;">
        <div class="header-contact-left">
            <div class="contact">
                <span class="contact-icon" style="background:#0000ff">
                    <a href="https://www.facebook.com/DPSMyanmar" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </span>
                <span class="contact-icon" style="background:#0a66c2;">
                    <a href="https://www.linkedin.com/company/dpsmyanmar/" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </span>
                <span class="contact-icon" style="background:red;">
                    <a href="https://www.youtube.com/@dpsco.ltd.3105" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </span>
            </div>
        </div>
        </li>
    </ul>
    <div class="mobile-nav-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
</div>