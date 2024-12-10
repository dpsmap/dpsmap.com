<!---->
<style>
    .blink {
    background-color: white;
            animation: blinker 3.5s linear infinite;
            color: black;
            text-shadow: 0.4px 0.3px black;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
        /**/
        /* Custom dropdown styles */
.custom-dropdown {
    position: relative;
    background: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

.dropdown-item {
    position: relative;
}

.sub-dropdown {
    display: none; /* Initially hidden */
    position: absolute;
    top: 0; /* Align with the parent dropdown */
    left: 100%; /* Positioned to the right */
    background: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    /*padding: 10px;*/
    z-index: 1000;
    min-width: 200px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Show sub-dropdown on hover */
.dropdown-item:hover .sub-dropdown {
    display: block;
}

/* General styling for navbar */
.navbar {
    list-style: none;
    padding: 0;
    margin: 0;
}

.navbar li {
    display: inline-block;
    margin-right: 20px;
}

.navbar a {
    text-decoration: none;
    color: #333;
    padding: 8px 12px;
    display: inline-block;
    transition: all 0.3s ease;
}

.navbar a:hover {
    background: #f4f4f4;
    border-radius: 4px;
}

/* Dropdown toggle arrow styles */
.dropdown-toggle .angle-right {
    float: right;
    border: solid #333;
    border-width: 0 2px 2px 0;
    display: inline-block;
    padding: 3px;
    transform: rotate(-45deg);
    margin-left: 5px;
    margin-bottom: 10px;
}


        @keyframes blinker {
            50% {
                                /*opacity: 0;*/

                /*opacity: 0;*/
            }
        }
</style>
<!---->
<div class="navbar-container">
    <!---->
    <div>
              <!--<marquee class="blink" scrollamount="4"> <span style="color:red;margin:-10px auto;">Breaking News:</span>(Unicode): Free map တွေ download ပေးနေတဲ့အစီအစဉ်က၂၀၂၄ အောက်တိုဘာလကုန်မှာပြီးတော့မှာဖြစ်လို့ အမြန်ဆုံးကိုယ်လိုအပ်တဲ့မြေပုံတွေdownloadရယူထားကြပါရန်... |  (English): The free map download program will end at the end of October 2024, so download the maps you need as soon as possible. </marquee>-->
              
             <marquee class="blink" scrollamount="4">
            <!-- <span style="color:red;margin:-10px auto;">Breaking News:</span> -->
            Free Maps များ Download ဆွဲရန် ဒီလင့်ကို <a href="https://dpsmap.com/pages/map-download/">Free Download Link</a> နှိပ်ပါ ...
            <!-- | (English): The free map download program will end at the end of October 2024, so download the maps you need as soon as possible.  -->
        </marquee>

    </div>
    <!---->
    <div class="header-contact">
        <div class="header-contact-far-left"></div>
        <div class="header-contact-left">
            <div class="contact">
                <span class="contact-icon">
                    <i class="fa-solid fa-phone"></i>
                </span>
                <a href="tel:+959775204020">+959 775204020</a>
            </div>

            <div class="contact">
                <span class="contact-icon">
                    <i class="fa-solid fa-envelope"></i>
                </span>
                <a href="mailto:dpsmap@gmail.com">dpsmap@gmail.com</a>
            </div>
        </div>
        <div class="header-contact-center">
            <!-- spacer -->
        </div>
        <div class="header-contact-right">
            <div class="contact">
                <span class="contact-icon" style="background:#0000ff">
                    <a href="https://www.facebook.com/DPSMyanmar" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </span>
            </div>

            <div class="contact">
                <span class="contact-icon" style="background:#0a66c2;">
                    <a href="https://www.linkedin.com/company/dpsmyanmar/" target="_blank" >
                        <i class="fa-brands fa-linkedin-in text-white" ></i>
                    </a>
                </span>
            </div>
            
             <div class="contact">
                <span class="contact-icon" style="background:red;">
                    <a href="https://www.youtube.com/@dpsco.ltd.3105" target="_blank">
                        <i class="fa-brands fa-youtube text-white"></i>
                    </a>
                </span>
            </div>
        </div>
        <div class="header-contact-far-right">
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
    </div>

    <div class="nav">
        <div class="logo-container">
            <a class="logo" href="https://dpsmap.com/"><img src="<?php echo $http . $domain ?>/assets/favicon/favicon-512x512.png" loading="lazy" alt="dpsmap" />
            </a>
            <div class="heading">
                <span class="main-heading">DPSMAP.COM </span>
                <span class="sub-heading">Design Printing Services</span>
            </div>
        </div>
        <ul class="navbar">
    <li><a href="<?php echo $http . $domain ?>/">Home</a></li>
    <li><a href="<?php echo $http . $domain ?>/pages/about-us/">About Us</a></li>
    <li>
        <a class="dropdown-toggle">Product & Services
            <span class="angle-down"></span></a>
        <div class="custom-dropdown">
            <!--<div class="dropdown-item" class="margin:-20px">-->
            <!--    <a href="<?php echo $http . $domain ?>/yangon/" class="dropdown-toggle">-->
            <!--        Yangon Map-->
            <!--    </a>-->
            <!--    <div class="sub-dropdown ms-1">-->
            <!--        <a href="https://yangontownshipmapbook.dpsmap.com/">Yangon Map Book</a>-->
            <!--    </div>-->
            <!--</div>-->
                        <a href="<?php echo $http . $domain ?>/yangon/">Myanmar Map</a>

            <a href="<?php echo $http . $domain ?>/myanmar/">Myanmar Map</a>
            <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>
            <a href="<?php echo $http . $domain ?>/naypyitaw/">Naypyitaw Map</a>
            <a href="<?php echo $http . $domain ?>/b1go/">Bago Map</a>
            <a target="_blank" href="https://dpsmap.com/districts/">District</a>
            <a href="<?php echo $http . $domain ?>/1sqft/">1 SQFT</a>
            <a href="<?php echo $http . $domain ?>/mapplotting.php">Map Plotting</a>
            <a href="<?php echo $http . $domain ?>/printing-services/">Printing Service</a>
            <a href="<?php echo $http . $domain ?>/gis/">GIS Map</a>
            <a href="<?php echo $http . $domain ?>/tracking/">Tracking</a>
            <a href="<?php echo $http . $domain ?>/website-services/">Website Service By DPS</a>
        </div>
    </li>
    <li>
        <a class="dropdown-toggle">Locations
            <span class="angle-down"></span></a>
        <div class="custom-dropdown">
            <a target="_blank" href="https://address.dpsmap.com/login.php">Address DPS Map</a>
            <a target="_blank" href="https://dpsmap.com/industrial/">Industrial</a>
        </div>
    </li>
    <li>
        <a href="https://shop.dpsmap.com/" target="_blank">Shop</a>
    </li>
    <li>
        <a href="<?php echo $http . $domain ?>/contact/">Contact Us</a>
    </li>
</ul>

        <!--<ul class="navbar">-->
        <!--    <li><a href="<?php echo $http . $domain ?>/">Home</a></li>-->
        <!--    <li><a href="<?php echo $http . $domain ?>/pages/about-us/">About Us</a></li>-->
        <!--    <li>-->
        <!--        <a class="dropdown-toggle">Product & Services-->
        <!--            <span class="angle-down"></span></a>-->
        <!--        <div class="custom-dropdown">-->
        <!--            <a href="<?php echo $http . $domain ?>/yangon/">Yangon Map</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/myanmar/">Myanmar Map</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/naypyitaw/">Naypyitaw Map</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/bago/">Bago Map</a>-->
        <!--                            <a target="_blank" href="https://dpsmap.com/districts/">district</a>-->

        <!--            <a href="<?php echo $http . $domain ?>/1sqft/">1 SQFT</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/mapplotting.php">Map Plotting</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/printing-services/">Printing Service</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/gis/">GIS Map</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/tracking/">Tracking</a>-->
        <!--            <a href="<?php echo $http . $domain ?>/website-services/">Website Service By DPS</a>-->
                    
        <!--        </div>-->
        <!--    </li>-->
        <!--       <li>-->
        <!--        <a class="dropdown-toggle">Locations-->
        <!--            <span class="angle-down"></span></a>-->
        <!--        <div class="custom-dropdown">-->
        <!--        <a target="_blank" href="https://address.dpsmap.com/login.php">address.dpsmap</a>-->
        <!--        <a target="_blank" href="https://dpsmap.com/districts/">district</a>-->
        <!--        <a target="_blank" href="https://dpsmap.com/industrial/">industrial</a>-->
            
        <!--        </div>-->
        <!--    </li>-->
        <!--     <li>-->
        <!--        <a href="https://shop.dpsmap.com/" target="_blank">Shop-->
        <!--            </a>-->
        <!--    </li>-->
        <!--    <li>-->
        <!--        <a href="<?php echo $http . $domain ?>/contact/">Contact Us</a>-->
        <!--    </li>-->
         
            
        <!--    <li>-->
        <!--        <a target="_blank" href="https://address.dpsmap.com/login.php">address.dpsmap</a>-->
        <!--    </li>-->
            
        <!--      <li>-->
        <!--        <a target="_blank" href="https://dpsmap.com/districts/">district</a>-->
        <!--    </li>-->
        <!--       <li>-->
        <!--        <a target="_blank" href="https://dpsmap.com/industrial/">industrial</a>-->
        <!--    </li>-->
            
        <!--</ul>-->
    </div>
</div>