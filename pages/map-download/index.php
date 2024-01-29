<?php
require_once('config/init.php');
require_once('../../config/urlConfig.php');
require_once('functions/sendMail.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="DPS Map download, Free Map Download, Yangon Map Free Download, Myanmar Map Free Download, Mandalay Map Free Download, Naypyitaw Map Free Download, Bagan Map Free Download">
    <META NAME="description" content="Map Download, DPS Map Download">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../../manifest.json">
    <link rel="stylesheet" href="../../assets/css/common.css" />
    <link rel="stylesheet" href="../../assets/css/responsive.css" />
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/custom-select.css">
    <title> Free Map Download - DPS Map </title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.min.css" />
</head>
    
    <style>
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
    
<body>

    <!-- header area -->
    <section id="header">
        <?php require_once('../../widgets/pc-nav-bar.php') ?>
        <?php require_once('../../widgets/mobile-nav-bar.php') ?>
    </section>

    <div id="body">
        <div class="custom-download-heading">
            <div class="main-heading">
                Download Your Desired Map
            </div>
        </div>

        <div class="download-form-container">
            <center>
                <div class="errors">
                    <?php if (!empty($logs)) {
                        $outputLogs($logs);
                    }
                    ?>
                </div>
            </center>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <div class="custom-row">
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-signature"></i></span>
                        </div>
                        <input type="text" name="first_name" id="first-name" placeholder="First Name" required />
                    </div>
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-signature"></i></span>
                        </div>
                        <input type="text" name="last_name" id="last-name" placeholder="Last Name" />
                    </div>
                </div>
                <div class="custom-row">
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" id="email" placeholder="Email" required />
                    </div>
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <input type="text" name="phone" placeholder="Phone Number" required />
                    </div>

                </div>
                <div class="custom-row">
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-comments"></i></span>
                        </div>
                        <input type="text" name="reason" for="reason" placeholder="Reason you download this map." required />
                    </div>
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-comments"></i></span>
                        </div>
                        <input type="text" name="where_did_you_learn" id="where-did-you-learn" placeholder="Where did you learn about this map?" required />
                    </div>
                </div>
                <div class="custom-row">
                    <div class="custom-select">
                        <select name="download_map">
                            <option>Choose Map (မြေပုံကို ရွေးပါ)</option>
                            <option value="Myanmar_MM">Myanmar (MM)</option>
                            <option value="Myanmar_EN">Myanmar (ENG)</option>
                            <option value="Yangon">Yangon</option>
                            <option value="Mandalay">Mandalay</option>
                            <option value="Naypyitaw">Naypyitaw</option>
                            <option value="Bagan">Bagan</option>
                            <option value="pyinoolwin">Pyin Oo Lwin</option>
                            <option value="shan">Shan State</option>
                            <option value="sagaing">Sagaing</option>
                            <option value="inlay">Inlay</option>
                            <option value="taunggyi">Taunggyi</option>
                            <option value="chin">Chin State</option>
                            <option value="kachin">Kachin State</option>
                            <option value="magway">Magway State</option>
                            <option value="rakhine">Rakhine State</option>
                            <option value="kyaiktiyo">Kyaiktiyo</option>
                            <option value="mrauku">Mrauku</option>
                            <option value="mon">Mon</option>
                            <option value="sittwe">Sittwe</option>
                            <option value="ayeyarwaddy">Ayeyarwaddy</option>
                            <option value="amarapura">Amarapura</option>
                        </select>
                    </div>

                    <div class="custom-input">
                        <input type="submit" name="form_submit_btn" class="custom-btn" />
                    </div>
                    
        <!-- (30.5.2023)-Tutorial update -->          
        <div class="tutorial">
            <div class="custom-heading">
                <div class="main-heading">
                    Tutorial
                </div>
            </div>
            <ul class="steps">
                        <li>
                            Choose Map နေရာတွင် မိမိ Download ဆွဲမည့် Map ကို ရွေးပါ။
                        </li>
                        <li>
                            လိုအပ်သော အချက်အလက်များကို မှန်ကန်စွာ ဖြည့်ပြီး Submit နှိပ်ပါ။
                        </li>
                        <li>
                            Submit နှိပ်ပြီးပါက OTP Code ကို Gmail ရဲ့ All inboxes
                            (or)Spam ထဲတွင် ကြည့်ပြီး မှန်ကန်စွာ ဖြည့်ပါ
                        </li>
                        <li>
                            OTP Code မဝင်သေးပါက ခနစောင့်ပေးပါ။(၅မိနစ်ခန့်)
                        </li>
            </ul>
        </div>
        <!---->
                </div>

            </form>
            
        </div>
            <!--
            <div>
                <img src="assets/images/map_plotting_ads_for_web_copy.jpg" class="responsive" alt="map_plotting_ads photo">
            </div>
            -->
            <!--
            <div>
                <a href="https://shop.dpsmap.com/index.php/product-category/hard-copy/">
                    <img src="../../assets/images/Happy_New_Year_2024.png" class="responsive" alt="Happy_New_Year_2024.png" style="padding-bottom: 30px;padding-left: 30px;padding-right: 30px;" >
                </a>
            </div>
            -->
    </br></br>
            
    </div>
    
   
    <!-- footer area -->

    <section id="footer">
        <?php require_once('../../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script src="../../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="../../assets/js/script.js" type="text/javascript"></script>
    <script src="../../assets/js/jsResponsive.js" type="text/javascript"></script>
    <script src="assets/js/custom-select.js" type="text/javascript"></script>

    <!-- App -->
    <script src="../../assets/js/app.js" type="text/javascript"></script>

    <!-- Analytics -->
    <script src="../../assets/js/analytics.js" type="text/javascript"></script>

</body>

</html>