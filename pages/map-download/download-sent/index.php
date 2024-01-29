<?php
require_once('../config/init.php');
require_once('../../../config/urlConfig.php');
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
  <link rel="stylesheet" href="../assets/css/download-sent.css" />
  <link rel="stylesheet" href="../assets/css/form.css" />

  <!-- Fontawesome -->
  <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.min.css" />

  <title>Download Sent!</title>
  
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
      
    <!-- Main content -->
    <div class="main-content">
      <span>
        Great!, We have sent the download link to your email :
        <a href="http://gmail.com" target="_blank">
          <?php echo $_GET['email'] ?>
        </a>
      </span>
    </div>
    <div class="download-form-container">
            <div class="tutorial">
            <div class="custom-heading">
                <div class="main-heading">
                    Tutorial
                </div>
            </div>
            <ul class="steps">
                        <li>
                            download link ကို Gmail ရဲ့ All inboxes(or)Spam ထဲတွင် download ဆွဲနိုင်ပါပြီ။
                        </li>
                        <li>
                            inboxes ထဲတွင် Gmail မတွေ့ပါက Spam ထဲတွင် စစ်ကြည့်ပါ။
                        </li>
            </ul>
            </div>
        </div>
    <!---->
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