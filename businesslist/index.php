<?php
date_default_timezone_set('Asia/Yangon');
session_start();
require_once('../config/databaseConnection.php');
require_once('../functions/mapOutput.php');
require_once('../config/urlConfig.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <META NAME="keywords" content="Yangon Map, Map Download, Free Map Download">
    <META NAME="description" content="Yangon Map, Map Download">
    <meta name="google-site-verification" content="fLa8xgJoz3j8ameNlxUbDmu13GE2d0MSwVV3aD-rnwo" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#222">

    <link rel="shortcut icon" href="../assets/favicon/favicon-512x512.png" sizes="512x512" type="image/x-icon" />
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../assets/css/common.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link rel="stylesheet" href="../assets/css/division.css" />
    <link rel="stylesheet" href="../assets/css/yangon.css" />
    <link rel="stylesheet" href="../assets/css/home.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../assets/libs/fontawesome/css/all.min.css" />

    <!-- require meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Business List</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        td,
        th,
        tr {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            text-align: left;
        }

        #responsive {
            width: 100%;
            height: auto;
            filter: drop-shadow(10px 10px 7px #13566f);
    </style>

</head>

<body>

    <!-- header area -->
    <section id="header">
        <?php require_once('../widgets/pc-nav-bar.php') ?>
        <?php require_once('../widgets/mobile-nav-bar.php') ?>
    </section>
    <section id="body">
        <div class="main-content">
            <div class="map-description">
                <div class="custom-heading">
                    <div class="main-heading">
                        Business List
                    </div>
                </div>
                <div class="description">
                    </br>
                    <h6>
                        ယခုစာမျက်နှာသည် စီးပွားရေးလုပ်ငန်းရှင်များအတွက် BusinessList များကို ရှာဖွေကြည့်ရှုနိုင်သော စာမျက်နှာဖြစ်ပါသည်။ </br></br>
                        BusinessListဆိုသည်မှာ ရန်ကုန်မြို့ရှိ စေ◌ျးဆိုင်များ၊စားသောက်ဆိုင်များ၊ဆေးဆိုင်များ အစရှိသော data များကို တစ်စုတစည်းတည်းစုဆောင်းထားသော Database တစ်ခုဖြစ်ပါသည်။</br></br>
                         လူကြီးမင်းတို့အနေနှင့် ရှာဖွေလိုသော လုပ်ငန်းများ၊စားသောက်ဆိုင်များ၊စေ◌ျးဆိုင်များ၊ဆေးဆိုင်များ အစရှိသည်တို့၏ နာမည်ကို အောက်တွင်ရှိသော search bar တွင် ရိုက်ရှာလိုက်ရုံဖြင့် Database ထဲတွင် ရှိပါက မြို့နယ်၊ခရိုင်၊လမ်း၊Longitude၊Latitude အစရှိသည်တို့ကို ဖော်ပြပေးပါသည်။</br></br>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <div class="container" id="responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h3>Business List</h3>
                        
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if (isset($_GET['search'])) {
                                                                                                echo $_GET['search'];
                                                                                            }  ?>" class="form-control" placeholder="Search Data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

                            </div>
                            <div class="col-md-5">
                            <!--    <button type="button" class="btn btn-primary"> BusinessList = 39* * *  </button>--><figure class="text-end">
                             <blockquote class="blockquote">
                                <p> BusinessList ရဲ့ Database ထဲတွင် Data ပေါင်း</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                ၄သောင်းခန့် <cite title="Source Title">ရှိပါသည်။</cite>
                            </figcaption>
                            </figure>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <div>
                                        <!--<th>Sord-ID</th>-->
                                        <th>POI Name</th>
                                        <!--    <th>POI_N_Myn</th>-->
                                        <th>Type</th>
                                        <th>Sub-Type</th>
                                        <th>Street Name</th>
                                        <!--    <th>St-N-Myn</th>-->
                                        <th>Ward Name</th>
                                        <!--    <th>Ward-N-Myn</th>-->
                                        <th>Township Name</th>
                                        <!--    <th>Tsp-N-Myn</th>-->
                                    </div>
                                    <div>
                                        <th>Districts Name</th>
                                        <!--    <th>Dist_N_Myn3</th>-->
                                        <th>State Region Name</th>
                                        <!--    <th>S-R-N-Myn</th>-->
                                        <!--    <th>HN-Eng</th>
                                        <th>HN-Myn</th>-->
                                    <th>Longitude&Latitude</th>
                                    </div>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect("localhost", "business_list", "tsNp3SDMtw4ktTmZ", "business_list");

                                if (isset($_GET['search'])) {
                                    $filtervalues = $_GET['search'];
                                    $query = "SELECT * FROM db_business_list WHERE CONCAT(Sort_ID,POI_N_Eng,POI_N_Myn,Type,Sub_Type,St_N_Eng,St_N_Myn,Ward_N_Eng,Ward_N_Myn,Tsp_N_Eng,Tsp_N_Myn,S_R_N_Eng,S_R_N_Myn,HN_Eng,HN_Myn,Longitude,Latitude) LIKE '%$filtervalues%' ";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items) {
                                ?>
                                            <tr>
                                                <!--<td><?= $items['Sort_ID']; ?></td>-->
                                                <td><?= $items['POI_N_Eng']; ?></td>
                                                <!--<td><?= $items['POI_N_Myn']; ?></td>-->
                                                <td><?= $items['Type']; ?></td>
                                                <td><?= $items['Sub_Type']; ?></td>
                                                <td><?= $items['St_N_Eng']; ?></td>
                                                <!--    <td><?= $items['St_N_Myn']; ?></td>-->
                                                <td><?= $items['Ward_N_eng']; ?></td>
                                                <!--    <td><?= $items['Ward_N_Myn']; ?></td>-->
                                                <td><?= $items['Tsp_N_Eng']; ?></td>
                                                <!--    <td><?= $items['Tsp_N_Myn']; ?></td>-->
                                                <td><?= $items['Dist_N_Eng']; ?></td>
                                                <!--    <td><?= $items['Dist_N_Myn']; ?></td>-->
                                                <td><?= $items['S_R_N_Eng']; ?></td>
                                                <!--    <td><?= $items['S_R_N_Myn']; ?></td>-->
                                                <!--    <td><?= $items['HN_Eng']; ?></td>
                                                <td><?= $items['HN_Myn']; ?></td>-->
                    
                                                <td >
                                                    <a href="https://google.com/maps/search/">မြေပုံတွင်ကြည့်ရန် နှိပ်ပါ 
                                                        
                                                            <?= $items['Longitude']; ?>
                                                         
                                                        
                                                            <?= $items['Latitude']; ?>
  
                                                    </a>
                                                </td>
                                                
                                            </tr>
                                        <?php
                                        }
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="17"> No Data Found :( </td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </br></br></br></br></br></br></br>

    <!-- footer area -->

    <section id="footer">
        <div class="footer-container">
            <div class="footer">
                <div class="far-left footer-content">
                    <div class="heading">
                        <span>Maps</span>
                    </div>

                    <div class="far-left-links-container">
                        <div class="custom-links-column">
                            <a href="<?php echo $http . $domain ?>/pages/map-download/">Free Map Download</a>
                            <a href="<?php echo $http . $domain ?>/myanmar/#en">Myanmar Map (ENG)</a>
                            <a href="<?php echo $http . $domain ?>/myanmar/#mm">Myanmar Map (MM)</a>
                            <a href="<?php echo $http . $domain ?>/mandalay/">Mandalay Map</a>
                            <a href="<?php echo $http . $domain ?>/pyinoolwin/">Pyinoolwin Map</a>
                            <a href="<?php echo $http . $domain ?>/amarapura/index.shtml">Amarapura Map</a>
                            <a href="<?php echo $http . $domain ?>/taunggyi/">Taunggyi Map</a>
                            <a href="<?php echo $http . $domain ?>/sittwe/index.shtml">Sittwe Map</a>
                            <a href="https://shop.dpsmap.com">Shop</a>

                        </div>
                        <div class="custom-links-column">
                            <a href="<?php echo $http . $domain ?>/yangon/">Yangon Map</a>
                            <a href="<?php echo $http . $domain ?>/pyinmana.shtml">Naypyitaw Map</a>
                            <a href="<?php echo $http . $domain ?>/bagan/">Bagan Map</a>
                            <a href="<?php echo $http . $domain ?>/mrauku/index.shtml">Mrauk-U Map</a>
                            <a href="<?php echo $http . $domain ?>/mawlamying/index.shtml">Mawlamyaing Map</a>
                            <a href="<?php echo $http . $domain ?>/inlay/index.shtml">Inlay Map</a>
                            <a href="<?php echo $http . $domain ?>/kyaiktiyo/index.shtml">Kyaiktiyo Map</a>
                        </div>
                    </div>

                </div>
                <div class="left footer-content">
                    <div class="heading">
                        <span>For Our Client</span>
                    </div>
                    <a href="#">FAQ</a>
                    <a href="#">Support</a>
                    <a href="#">Give us feedback</a>

                    <div class="heading">
                        <span>Our Privacy & Policy</span>
                    </div>
                    <a href="<?php echo $http . $domain ?>/pages/privacy-and-policy/">Privacy and Policy</a>
                </div>

                <div class="right footer-content">
                    <div class="heading">
                        <span>Office Address</span>
                    </div>
                    <a href="https://g.page/DPSMAP?share" class="address-container">
                        <span class="icon">
                            <i class="fa-solid fa-location-pin"></i></span>
                        <span>
                            Rm:307, Yae Kyaw Complex, Yae Kyaw Road,<br />
                            Pazundaung Township, Yangon, Myanmar (Burma)
                        </span>
                    </a>
                    <div class="address-container">
                        <span class="icon"><i class="fa-solid fa-phone"></i></span>
                        <span>
                            <a href="tel:+959774204020">+95(09)774204020</a>
                            <br />
                            <a href="tel:+959775204020">+95(09) 775204020</a>
                        </span>
                    </div>
                    <a href="mailto:dpsmap@gmail.com" class="address-container">
                        <span class="icon">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <span> dpsmap@gmail.com </span>
                    </a>
                </div>

                <div class="far-right footer-content">
                    <div class="heading">
                        <span>Subscribe Here</span>
                        <div class="sub-heading">Your Present await…</div>
                    </div>
                    <form action="#" method="post" class="address-container">
                        <label> Email *</label>
                        <input type="email" name="email" required />
                        <button type="submit" name="btn_submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-credits">
            <div class="bg-img">
                <div class="backdrop">
                    <div>Copyright © 2022 DPS Map | All Rights Reserved | Powered by DPS Map | Updated by AMO(30.1.2023) with ATP</div>
                </div>
                <img src="<?php echo $http . $domain ?>/assets/images/footer.jpg" alt="footer-deco" />
            </div>
        </div>
    </section>
    
    <center>
    <!-- Start of StatCounter Code for Dreamweaver ကိုကြီးနှင့် ေအာင်သက်ပိုင် တို့ ၃၀.၁.၂၀၂၃ တွင် ထည့်သည် -->
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
    </center>
    <center>
        <script>
        document.write("ATP(30.1.2023)")
        </script>
        <noscript></noscript>
    </center>
    <!-- End of StatCounter Code for Dreamweaver -->
    
    <script>
        function searchingData($items) {
            map = 'https://google.com/maps/search/' + $items['Longitude']; + 'E,' + $items['Latitude']; + 'N';
        },
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>