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

    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo "{$http}{$domain}" ?>/assets/libs/fontawesome/css/all.min.css" />

    <title>Comming Soon!- DPS Map</title>

    <style type="text/css">
           
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
        <?php require_once('../../widgets/pc-nav-bar.php') ?>
        <?php require_once('../../widgets/mobile-nav-bar.php') ?>
    </section>


    <!-- Main Content -->
    <div class="main-content">
        <h1>Comming Soon!</h1>
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
    <script src="../assets/js/custom-select.js" type="text/javascript"></script>

    <!-- App -->
    <script src="<?php echo "{$http}{$domain}" ?>/assets/js/app.js" type="text/javascript"></script>
</body>

</html>