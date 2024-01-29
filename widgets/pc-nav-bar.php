<div class="navbar-container">
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
                <span class="contact-icon">
                    <a href="https://www.facebook.com/DPSMyanmar" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </span>
            </div>

            <div class="contact">
                <span class="contact-icon">
                    <a href="https://www.linkedin.com/company/dpsmyanmar/" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </span>
            </div>
            
             <div class="contact">
                <span class="contact-icon">
                    <a href="https://www.youtube.com/@dpsco.ltd.3105" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
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
                    <span class="angle-down"><i class="fa-solid fa-angle-down"></i></span></a>
                <div class="custom-dropdown">
                    <a href="<?php echo $http . $domain ?>/yangon/">Yangon Map</a>
                    <a href="<?php echo $http . $domain ?>/myanmar/">Myanmar Map</a>
                    <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>
                    <a href="<?php echo $http . $domain ?>/naypyitaw/">Naypyitaw Map</a>
                    <a href="<?php echo $http . $domain ?>/bago/">Bago Map</a>
                    <a href="<?php echo $http . $domain ?>/1sqft/">1 SQFT</a>
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
                <a target="_blank" href="https://address.dpsmap.com/login.php">address.dpsmap</a>
            </li>
        </ul>
    </div>
</div>