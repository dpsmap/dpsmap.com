<?php

require_once('../../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$logs = [];
$outputLogs = function ($logs) {
    for ($i = 0; $i < count($logs); $i++) {
        echo "<p style=\"color:red\">{$logs[$i]}</p> ";
    }
};


$insertIntoDatabaseCustomers = function ($dataToInsert) use ($link, $sanatization) {

    array_walk($dataToInsert, $sanatization);
    $fieldNames = '`' . implode('`,`', array_keys($dataToInsert)) . '`';
    $dataToInsert = '\'' . implode('\',\'', $dataToInsert) . '\'';
    $query =  "INSERT INTO `customers` ({$fieldNames}) VALUES ({$dataToInsert})";
    mysqli_query($link, $query);
    return true;
};


$checkEmailExistOTP = function ($email) use ($link) {

    $query = "SELECT `customer_email` FROM `otp` WHERE `customer_email` = '{$email}'";
    $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
};


$checkIfEmailVerified = function ($email) use ($link) {
    $query = "SELECT * FROM `otp` WHERE `customer_email` = '{$email}'";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        $row = mysqli_fetch_assoc($queryResult);
        if ($row['email_status'] === 'verified') {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
};

$getCustomerNumberWithEmail = function ($email) use ($link) {

    $query = "SELECT MAX(`customer_no`), `email` FROM `customers` WHERE `email` ='{$email}'";
    $queryResult = mysqli_query($link, $query);
    if (mysqli_num_rows($queryResult) > 0) {
        $row = mysqli_fetch_assoc($queryResult);
        return (int)($row['MAX(`customer_no`)']);
    }
};


$mailTemplate = function ($mailSubject, $mailContent, $value) {
    return ("<!doctype html>
    <html>
    
    <head>
      <meta name='viewport' content='width=device-width'>
      <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
      <title>Simple Transactional Email</title>
      <style>
        /* -------------------------------------
            INLINED WITH htmlemail.io/inline
        ------------------------------------- */
        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
          table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
          }
    
          table[class=body] p,
          table[class=body] ul,
          table[class=body] ol,
          table[class=body] td,
          table[class=body] span,
          table[class=body] a {
            font-size: 16px !important;
          }
    
          table[class=body] .wrapper,
          table[class=body] .article {
            padding: 10px !important;
          }
    
          table[class=body] .content {
            padding: 0 !important;
          }
    
          table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
          }
    
          table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
          }
    
          table[class=body] .btn table {
            width: 100% !important;
          }
    
          table[class=body] .btn a {
            width: 100% !important;
          }
    
          table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
          }
        }
    
        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
          .ExternalClass {
            width: 100%;
          }
    
          .ExternalClass,
          .ExternalClass p,
          .ExternalClass span,
          .ExternalClass font,
          .ExternalClass td,
          .ExternalClass div {
            line-height: 100%;
          }
    
          .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
          }
    
          .btn-primary table td:hover {
            background-color: #34495e !important;
          }
    
          .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
          }
        }
      </style>
    </head>
    
    <body class=''
      style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
      <table border='0' cellpadding='0' cellspacing='0' class='body'
        style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;'>
        <tr>
          <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
          <td class='container'
            style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;'>
            <div class='content'
              style='box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;'>
    
              <!-- START CENTERED WHITE CONTAINER -->
              <span class='preheader'
                style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'> {$mailSubject}</span>
              <table class='main'
                style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;'>
    
                <!-- START MAIN CONTENT AREA -->
                
                <tr>
                    <td class='wrapper'
                      style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                      <table border='0' cellpadding='0' cellspacing='0'
                        style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                        <tr>
                          <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                            <p
                              style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>
                              Hi there,</p>
                            <p
                              style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>
                              Take a moment to our DPS Shop App! Browse our GPS Trackers, access soft copies of our detailed maps, and effortlessly decorate your office with our Map Plotting. Download now and experience the ultimate shopping and address map convenience in one app! <br/></br> DPS Shop App တွင် DPS ရဲ့ လိပ်စာရှာဖွေနိုင်တဲ့ address map နဲ့ မြေပုံများ၊ gps tracker များကို လွယ်ကူစွာ ကြည့်ရှုနိုဖို့ အခုပဲ အခမဲ့ download ရယူလိုက်ပါ!!
                            </p>
                            <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary'
                              style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;'>
                              <tbody>
                                <tr>
                                  <td align='left'
                                    style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;'>
                                    <table border='0' cellpadding='0' cellspacing='0'
                                      style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                      <tbody>
                                        <tr>
                                          <td
                                            style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center;'>   
                                          <a target='_blank'
            style='display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;' href='https://play.google.com/store/apps/details?id=appinventor.ai_mywork0070.DPS_MAP&pli=1'>Download</a>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>

                <tr>
                  <td class='wrapper'
                    style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;'>
                    <table border='0' cellpadding='0' cellspacing='0'
                      style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                      <tr>
                        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>
                          
                          <p
                            style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;'>
                            {$mailSubject} <br/> {$mailContent}
                          </p>
                          <table border='0' cellpadding='0' cellspacing='0' class='btn btn-primary'
                            style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;'>
                            <tbody>
                              <tr>
                                <td align='left'
                                  style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;'>
                                  <table border='0' cellpadding='0' cellspacing='0'
                                    style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                    <tbody>
                                      <tr>
                                        <td
                                          style='font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center;'>   
                                        {$value}
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
    
                <!-- END MAIN CONTENT AREA -->
              </table>
              <!-- START FOOTER -->
                <div class='footer' style='clear: both; Margin-top: 10px; text-align: center; width: 100%;'>
                    <table border='0' cellpadding='0' cellspacing='0'
                    style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;'>
                    <tr>
                        <td class='content-block powered-by'
                        style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;'>
                        Powered by <a href='https://dpsmap.com'
                            style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>DPS Map</a>.
                        </td>
                    </tr>
                    </table>
                </div>
                <!-- END FOOTER -->
              <!-- END CENTERED WHITE CONTAINER -->
            </div>
          </td>
          <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;'>&nbsp;</td>
        </tr>
      </table>
    </body>
    
    </html>");
};



if (isset($_POST['form_submit_btn'])) {

    $required_fileds = ['first_name', 'email', 'phone', 'reason', 'where_did_you_learn'];
    $email = $_POST['email'];
    $username = "{$_POST['first_name']} {$_POST['last_name']}";

    foreach ($_POST as $key => $value) {
        if (empty($value) and in_array($key, $required_fileds)) {
            $logs[] = "{$key} is required! <br/><br/>";
        }
    }

    if (empty($logs)) {

        //Save User data in database
        $dataToInsert = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
            'reason' => $_POST['reason'],
            'where_did_you_learn' => $_POST['where_did_you_learn'],
            'download_map' => $_POST['download_map'],
            'download_date' => date('Y-m-d h:i:s'),
        ];
        $insertIntoDatabaseCustomers = $insertIntoDatabaseCustomers($dataToInsert);

        // Set map to download
        $mapFile =  $_SESSION['map_to_download'] = $_POST['download_map'];
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        $currentCustomerNumber = $_SESSION['customer_number'] = (int)$getCustomerNumberWithEmail($email);

        // Send OTP if not verified

        if ($checkIfEmailVerified($email) === false) {
            //Send Email
            $OTP = mt_rand(10000, 99999);
            $mailSubject = 'Verify your email.';
            $mailContent = 'Your OTP Code is: ';

            if ($checkEmailExistOTP($email) === false) {
                $query = "INSERT INTO `otp` (`otp_code`,`customer_email`) VALUES ($OTP, '{$email}')";
                mysqli_query($link, $query);
            } else if ($checkEmailExistOTP($email) === true) {
                $query = "UPDATE `otp` SET `otp_code` = $OTP WHERE `customer_email`= '{$email}'";
                mysqli_query($link, $query);
            }

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";

            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "info@dpsmap.com";
            $mail->Password   = "infoadmin11181";

            $mail->IsHTML(true);
            $mail->AddAddress($email, $username);
            $mail->SetFrom("info@dpsmap.com", "DPS MAP");
            $mail->Subject = "Account Ownership Confirmation";
            $content = $mailTemplate($mailSubject, $mailContent, '<b>' . $OTP . '<b/>');
            $mail->MsgHTML($content);
            if (!$mail->Send()) {
                $logs[] = "Error while sending Email.";
            } else {
                $query = "UPDATE `customers` SET `email_status` = 'pending' WHERE `email`= '{$email}'";
                mysqli_query($link, $query);
                header("Location:thank-you/");
                exit();
            }
        }
        // When already verified
        else if ($checkIfEmailVerified($email) === true) {
            $token = sha1(uniqid(mt_rand(), true));
            $downloadLink = "<a target='_blank'
            style='display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;' href='{$http}{$domain}/pages/map-download/download/?{$mapFile}&user={$currentCustomerNumber}&token={$token}'>Download</a>";
            $mailSubject = 'Your download link is ready!';
            $mailContent = 'Here is your download link: ';

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";

            $mail->SMTPDebug  = 0;
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "info@dpsmap.com";
            $mail->Password   = "infoadmin11181";

            $mail->IsHTML(true);
            $mail->AddAddress($email, $username);
            $mail->SetFrom("info@dpsmap.com", "DPS MAP");
            $mail->Subject = "Map Download Link ({$mapFile})";
            $content = $mailTemplate($mailSubject, $mailContent, $downloadLink);
            $mail->MsgHTML($content);
            if (!$mail->Send()) {
                $logs[] = "Error while sending Email.";
            } else {
                $query = "UPDATE `customers` SET `merge_status` = 'mail sent', `email_status` = 'verified'  WHERE `email`= '{$email}' AND `customer_no` = {$getCustomerNumberWithEmail($email)}";
                mysqli_query($link, $query);
                $query = "INSERT INTO `token` (`activation_code`, `customer`) VALUES ('{$token}', {$getCustomerNumberWithEmail($email)})";
                mysqli_query($link, $query);
                session_destroy();
                header("Location:download-sent/?email={$email}");
            }
        }
    }
}
