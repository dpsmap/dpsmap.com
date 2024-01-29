<?php
require_once('../config/init.php');
require_once('../../../config/urlConfig.php');
error_reporting(0);
require_once('../functions/verifyFun.php');
if (empty($_SESSION['email'])) {
    header("Location:../404/");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">
    <link rel="shortcut icon" href="../../../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../../../manifest.json">
    <link rel="stylesheet" href="../../../assets/css/common.css" />
    <link rel="stylesheet" href="../../../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/form.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.min.css" />

    <title>Verification - DPS Map</title>
    
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
</head>

<body>

    <!-- header area -->
    <section id="header">
        <?php require_once('../../../widgets/pc-nav-bar.php') ?>
        <?php require_once('../../../widgets/mobile-nav-bar.php') ?>
    </section>

    <div id="body">
        <div class="custom-download-heading">
            <div class="main-heading">
                Confirm Your OTP
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
                            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="Your Email" required />
                    </div>
                    <div class="custom-input">
                        <div class="icon-container">
                            <span class="icon"><i class="fa-solid fa-key"></i></span>
                        </div>
                        <input type="text" name="otp" placeholder="OTP" required />
                    </div>
                </div>


                <div class="custom-row">
                    <div class="custom-input">
                        <input type="submit" name="verify_btn" class="custom-btn" />
                    </div>
                </div>
                
        <div class="tutorial">
            <div class="custom-heading">
                <div class="main-heading">
                    Tutorial
                </div>
            </div>
            <ul class="steps">
                        <li>
                            OTP Code မဝင်သေးပါက ခနစောင့်ပေးပါ။
                        </li>
                        <li>
                            OTP Code ကို Gmail ရဲ့ All inboxes(or)Spam ထဲတွင် ကြည့်ပြီး မှန်ကန်စွာ ဖြည့်ပါ
                        </li>
                        <li>
                            inboxes ထဲတွင် Gmail မတွေ့ပါက Spam ထဲတွင် စစ်ကြည့်ပါ။
                        </li>
            </ul>
        </div>
                
            </form>
        </div>
        
        
        
    </div>


    <!-- footer area -->

    <section id="footer">
        <?php require_once("../../../widgets/footer.php") ?>
    </section>

    <!-- Fontawesome -->
    <script src="../../../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- Custom js -->
    <script src="../../../assets/js/script.js" type="text/javascript"></script>
    <script src="../../../assets/js/jsResponsive.js" type="text/javascript"></script>
    <script src="../assets/js/custom-select.js" type="text/javascript"></script>

    <!-- App -->
    <script src="../../../assets/js/app.js" type="text/javascript"></script>


</body>

</html>