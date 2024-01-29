<?php
require_once('../config/init.php');
require_once('../../../config/urlConfig.php');

if (isset($_GET['Myanmar_MM'])) {
    $map = 'mm_myanmarmap.jpg';
}
if (isset($_GET['Myanmar_EN'])) {
    $map = 'eng_myanmarmap.jpg';
}
if (isset($_GET['Yangon'])) {
    $map = 'yangon.jpg';
}
if (isset($_GET['Mandalay'])) {
    $map = 'Mandalay.jpg';
}
if (isset($_GET['Bagan'])) {
    $map = 'bagan.jpg';
}
if (isset($_GET['Naypyitaw'])) {
    $map = 'naypyitaw.jpg';
}
if (isset($_GET['pyinoolwin'])) {
    $map = 'pyinoolwin.jpg';
}
if (isset($_GET['shan'])) {
    $map = 'Shan.jpg';
}
if (isset($_GET['sagaing'])) {
    $map = 'Sagaing.jpg';
}
if (isset($_GET['inlay'])) {
    $map = 'inlay_map.jpg';
}
if (isset($_GET['taunggyi'])) {
    $map = 'taunggyi.jpg';
}
if (isset($_GET['chin'])) {
    $map = 'Chin.jpg';
}
if (isset($_GET['kachin'])) {
    $map = 'Kachin.jpg';
}
if (isset($_GET['magway'])) {
    $map = 'Magway.jpg';
}
if (isset($_GET['rakhine'])) {
    $map = 'Rakhine.jpg';
}
if (isset($_GET['kyaiktiyo'])) {
    $map = 'kyaiktiyomap.jpg';
}
if (isset($_GET['mrauku'])) {
    $map = 'mraukumap.jpg';
}
if (isset($_GET['mon'])) {
    $map = 'Mon.jpg';
}
if (isset($_GET['sittwe'])) {
    $map = 'Sittwe.jpg';
}
if (isset($_GET['ayeyarwaddy'])) {
    $map = 'Ayeyarwaddy.jpg';
}
if (isset($_GET['amarapura'])) {
    $map = 'amarapura.jpg';
}


if (isset($_GET['token'])) {
    if (!empty($_GET['token'])) {
        $query = "SELECT * FROM `token` WHERE `activation_code` = '{$_GET['token']}' AND `customer` = {$_GET['user']}";
        $queryResult = mysqli_query($link, $query);
        if (mysqli_num_rows($queryResult) > 0) {
            $row = mysqli_fetch_assoc($queryResult);
            if ($row['code_status'] == 'unused') { ?>


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
                    <link rel="stylesheet" href="../assets/css/download.css">
                    <link rel="stylesheet" href="../assets/css/form.css">

                    <!-- Fontawesome -->
                    <link rel="stylesheet" href="../../assets/libs/fontawesome/css/all.min.css" />

                    <title>Map Download - DPS Map</title>
                    
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
                        <div class="download-container">
                            <div class="heading">
                                <h3>Thank you for downloading!</h3>
                            </div>
                            <div class="mail-body">
                                <h2>Dear Sir,</h2>
                                Thank for using dpsmap. It will take your device storage up to 10 mb.
                                Click "Download" to get your desired map : <?php echo $map ?>
                                <br />
                                <form method="post" action="../functions/downloadFun.php">
                                    <input type="hidden" name="file_to_download" value="<?php echo $map ?>">
                                    <input type="hidden" name="activation_code" value="<?php echo $row['activation_code'] ?>" />
                                    <input type="hidden" name="user" value="<?php echo $_GET['user'] ?>" />
                                    <button type="submit" name="download" class="download">Download</button>
                                </form>
                            </div>
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

<?php } else {

                header('Location:../../link-expired/');
                exit();
            }
        } else {

            header('Location:../../link-expired/');
            exit();
        }
    } else {

        header('Location:../../link-expired/');
        exit();
    }
} else {

    header('Location:../../link-expired/');
    exit();
}


?>