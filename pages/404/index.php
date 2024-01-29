<?php require_once('../../config/urlConfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="<?php echo "{$http}{$domain}" ?>/assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="<?php echo "{$http}{$domain}" ?>/manifest.json">
    <link rel="stylesheet" href="<?php echo "{$http}{$domain}" ?>/assets/css/common.css" />
    <link rel="stylesheet" href="<?php echo "{$http}{$domain}" ?>/assets/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo "{$http}{$domain}" ?>/assets/css/404.css" />


    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo "{$http}{$domain}" ?>/assets/libs/fontawesome/css/all.min.css" />

    <title>404- DPS Map</title>
</head>

<body>
    <!-- header area -->
    <section id="header">
        <?php require_once('../../widgets/pc-nav-bar.php') ?>
        <?php require_once('../../widgets/mobile-nav-bar.php') ?>
    </section>


    <!-- Main Content -->
    <div class="main-content">
        <div class="custom-row not-found">
            <div class="custom-row-left">
                <div class="image-container">
                    <img src="<?php echo "{$http}{$domain}" ?>/assets/images/bg-arts/bug-fixing.svg" alt="bug-fixing" />
                </div>
            </div>
            <div class="custom-row-right">
                <div class="custom-heading">
                    <div class="main-heading">
                        404
                    </div>
                </div>
                <div class="description">
                    <p class="main-description">Well, you are lucky to find this link.</p>
                    <p class="sub-description">Why not try again by going</p>
                    <a href="<?php echo "{$http}{$domain}" ?>">Back home</a>
                </div>
            </div>
            <div class="custom-row-far-right">
            </div>
        </div>
        <div class="google-search-box">
            <div class="gcse-search"></div>
        </div>
        <div class="custom-row-suggestion-container">
            <div class="custom-row suggestion">
                <div class=custom-heading>
                    <div class="main-heading">
                        Or would you rather try these instead?
                    </div>
                </div>
                <div class="url-suggestion-slider">
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/yangon/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_yangon.jpeg" alt="suggestion_yangon" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Yangon Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/myanmar/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_myanmar.jpeg" alt="suggestion_myanmar" />
                            </div>
                        </div>

                        <div class="custom-heading">
                            <div class="main-heading">
                                Myanar Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/mandalay/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_mandalay.jpeg" alt="suggestion_mandalay" />
                            </div>
                        </div>

                        <div class="custom-heading">
                            <div class="main-heading">
                                Mandalay Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/naypyitaw/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_naypyitaw.jpeg" alt="suggestion_naypyitaw" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Naypyitaw Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/bagan/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_bagan.jpeg" alt="suggestion_bagan" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Bagan Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/mrauku/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_mrauku.jpeg" alt="suggestion_mrauku" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Mrauku Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/pyinoolwin/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_pyin_oo_lwin.jpeg" alt="suggestion_pyin_oo_lwin" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Pyin Oo Lwin Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/mawlamying/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_mawlamyaing.jpeg" alt="suggestion_mawlamyaing" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Mawlamyaing Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/amarapura/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_amarapura.jpeg" alt="suggestion_amarapura" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Amarapura Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/inlay/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_inlay.jpeg" alt="suggestion_inlay" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Inlay Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/taunggyi/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_taunggyi.jpeg" alt="suggestion_taunggyi" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Taunggyi Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/kyaiktiyo/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_kyaiktiyo.jpeg" alt="suggestion_kyaiktiyo" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Kyaiktiyo Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/sittwe/" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_sittwe.jpeg" alt="suggestion_sittwe" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Sittwe Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/downloadmap/chin.html" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_chin.jpeg" alt="suggestion_chin" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Chin Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/downloadmap/kachin.html" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_kachin.jpeg" alt="suggestion_kachin" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Kachin Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                    <div class="custom-card">
                        <div class="overlay">
                            <a href="https://dpsmap.com/downloadmap/rakhine.html" class="icon-container">
                                <i class="fa-solid fa-link"></i>
                            </a>
                        </div>
                        <div class="image-cropper">
                            <div class="image-container">
                                <img src="<?php echo "{$http}{$domain}" ?>/assets/images/404/suggestion_rakhine.jpeg" alt="suggestion_rakhine" />
                            </div>
                        </div>
                        <div class="custom-heading">
                            <div class="main-heading">
                                Rakhine Map
                            </div>
                        </div>
                    </div>
                    <!-- card end -->
                </div>
            </div>

        </div>
    </div>






    <!-- footer area -->

    <section id="footer">
        <?php require_once("../../widgets/footer.php") ?>
    </section>

    <!-- Fontawesome -->
    <script src="<?php echo "{$http}{$domain}" ?>/assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="<?php echo "{$http}{$domain}" ?>/assets/js/script.js" type="text/javascript"></script>
    <script src="<?php echo "{$http}{$domain}" ?>/assets/js/jsResponsive.js" type="text/javascript"></script>
    <!-- Google Search Box -->
    <script async src="https://cse.google.com/cse.js?cx=8587971c6f7cd492d"></script>

    <!-- App -->
    <script src="<?php echo "{$http}{$domain}" ?>/assets/js/app.js" type="text/javascript"></script>
</body>

</html>