<?php
require_once('../config/init.php');
require_once('../../../config/urlConfig.php');
require_once('../functions/userRelatedFuns.php');
if (!isset($_SESSION['user_id'])) {
    require_once('../functions/loginFun.php');
}
if (isset($_SESSION['user_id'])) {
    $sessionUserId = $_SESSION['user_id'];
    $getSessionUserData = $getUserData($sessionUserId);
    $_SESSION['username'] = $getSessionUserData['username'];
    $_SESSION['email'] = $getSessionUserData['email'];
    $_SESSION['password'] = $getSessionUserData['password'];
    require_once('../functions/exportToExcelFun.php');
    require_once('../functions/deleteCustomerFun.php');
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
    <link rel="stylesheet" href="../assets/css/custom-select.css">
    <link rel="stylesheet" href="../assets/css/dps-admin.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="../../../assets/libs/fontawesome/css/all.min.css" />

    <!-- Datatable -->
    <link rel="stylesheet" href="../../../assets/libs/datatables-1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="../../../assets/libs/datatable-responsive-2.3.0/css/responsive.dataTables.min.css" />


    <title>DPS Admin - DPS Map</title>
    
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


    <!-- body area -->
    <div id="body">
        <?php if (!isset($_SESSION['user_id'])) { ?>

            <div class="custom-download-heading admin-login">
                <div class="main-heading">
                    Admin Login
                </div>
            </div>

            <div class="download-form-container">
                <center>
                    <div class="errors">
                        <?php
                        if (!empty($logs)) {
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
                            <input type="text" name="username" placeholder="Username" required />
                        </div>
                        <div class="custom-input">
                            <div class="icon-container">
                                <span class="icon"><i class="fa-solid fa-key"></i></span>
                            </div>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                    </div>


                    <div class="custom-row">
                        <div class="custom-input">
                            <input type="submit" name="login_btn" class="custom-btn" />
                        </div>
                    </div>
                </form>
            </div>

        <?php } else { ?>

            <div class="overlay-form">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <center>
                        <div class="errors">
                            <?php
                            if (!empty($logs)) {
                                $outputLogs($logs);
                            }

                            ?>
                        </div>
                    </center>
                    <div class="icon-container" onclick="confirmFormClose()">
                        <i class="fa-regular fa-circle-xmark"></i>
                    </div>
                    <input class="session-user-id" type="hidden" value="<?php echo $sessionUserId ?>" name="session_user_id" />
                    <input class="customer-number" type="hidden" value="" name="customer_no" />
                    <input class="confirm-password" type="password" name="confirm_password" required placeholder="Password" />
                    <div class="custom-spacer">

                    </div>
                    <button type="submit" class="confirm-btn" name="confirm_btn">
                        Confirm
                    </button>
                </form>
            </div>



            <div class="custom-download-heading">
                <div class="main-heading">
                    Today's Downloader
                </div>
            </div>
            <div class="button-container">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input type="hidden" name="date" value="<?php echo date('Y-m-d') ?>" />
                    <button class="export-btn" type="submit" name="export_to_excel">Excel</button>
                </form>
            </div>
            <div class="customer-table-container">
                <center>
                    <div class="errors">
                        <?php
                        if (!empty($logs)) {
                            $outputLogs($logs);
                        }
                        if (isset($_GET['delSuccess'])) {
                            echo "<p class='success' style='color:green'>Successfully deleted!</p>";
                        }
                        ?>
                    </div>
                </center>
                <div class="preloader">

                </div>
                <table id="customer-table" class="display hide" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $listCustomerDataToday() ?>
                        <!--  -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <div class="custom-download-heading">
                <div class="main-heading">
                    Yesterday's Downloader
                </div>
            </div>
            <div class="button-container">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input type="hidden" name="date" value="<?php echo date('Y-m-d', strtotime('-1 days')) ?>" />
                    <button class="export-btn" type="submit" name="export_to_excel">Excel</button>
                </form>
            </div>
            <div class="customer-table-container">
                <center>
                    <div class="errors">
                        <?php
                        if (!empty($logs)) {
                            $outputLogs($logs);
                        }
                        if (isset($_GET['delSuccess'])) {
                            echo "<p class='success' style='color:green'>Successfully deleted!</p>";
                        }
                        ?>
                    </div>
                </center>
                <div class="preloader">

                </div>
                <table id="customer-table" class="display hide" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $listCustomerDataYesterday() ?>
                        <!--  -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </tfoot>
                </table>
            </div>


            <div class="custom-download-heading">
                <div class="main-heading">
                    Customer Data
                </div>
            </div>
            <div class="button-container">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input type="hidden" name="date" value="" />
                    <button class="export-btn" type="submit" name="export_to_excel">Excel</button>
                </form>
            </div>
            <div class="customer-table-container">
                <center>
                    <div class="errors">
                        <?php
                        if (!empty($logs)) {
                            $outputLogs($logs);
                        }
                        if (isset($_GET['delSuccess'])) {
                            echo "<p class='success' style='color:green'>Successfully deleted!</p>";
                        }
                        ?>
                    </div>
                </center>
                <div class="preloader">

                </div>
                <table id="customer-table" class="display hide" style="width: 100%">
                    <thead>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $listCustomerData() ?>
                        <!--  -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Customer Number</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Reason</td>
                            <td>Where they learned.</td>
                            <td>Downloaded Map</td>
                            <td>Requested Date</td>
                            <td>Email Status</td>
                            <td>Final Status</td>
                            <td>Action</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        <?php } ?>
    </div>

    <!-- footer area -->

    <section id="footer">
        <?php require_once('../../../widgets/footer.php') ?>
    </section>

    <!-- Fontawesome -->
    <script src="../../../assets/libs/fontawesome/js/all.min.js" type="text/javascript"></script>

    <!-- jquery -->
    <script src="../../../assets/libs/jquery-3.5.1/js/jquery-3.5.1.js" type="text/javascript"></script>

    <!-- datatables-->
    <script type="text/javascript" src="../../../assets/libs/datatables-1.12.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../../../assets/libs/datatable-responsive-2.3.0/js/dataTables.responsive.min.js"></script>


    <!-- Custom js -->
    <script src=" ../../../assets/js/script.js" type="text/javascript"></script>
    <script src="../../../assets/js/jsResponsive.js" type="text/javascript"></script>
    <script src="../assets/js/custom-select.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            if (document.querySelector(".preloader") !== null) {
                document.querySelectorAll(".preloader").forEach((element) => {
                    element.style.display = "none";
                });
            }

            document.querySelectorAll("table").forEach((element) => {
                element.classList.remove("hide");
            });

            var table = $("table").DataTable({
                responsive: true,
            });
        });
        setTimeout(() => {
            if (document.querySelector('.success') !== null) {
                document.querySelector('.success').style.display = "none"
            }
        }, 3000)

        function deleteCustomer(e) {
            var customerNumber = e.target.parentElement.children[0].value;
            document.querySelector('.overlay-form').style.display = "flex";
            document.querySelector('.overlay-form form .customer-number').value = customerNumber;
        }

        function confirmFormClose() {
            document.querySelector('.overlay-form').style.display = "none";
            document.querySelector('.overlay-form form .customer-number').value = "";
        }
    </script>

    <!-- App -->
    <script src="../../../assets/js/app.js" type="text/javascript"></script>

</body>

</html>