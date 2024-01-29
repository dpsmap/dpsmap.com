<?php

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter name");
$email = check_input($_POST['email'], "Enter email");
$phone = check_input($_POST['phone'], "Enter phone");

/* Send the message using mail() function */
   if (count($errors) == 0) {		
		
		
			$toMail = 'dpsmap@gmail.com'; // your email address     dpsmap@gmail.com
			//$toMail = 'dpsmap@gmail.com';
			$BCCMail = 'sonnyamo@gmail.com'; //sonnyamo@gmail.com,  BCC (Crbon copy) also send the email to this address (leave empty if you don't use it)

			$thanksPage = 'http://www.dpsmap.com'; // the URL of the thank you page, You can modify the url and make it yours.

			$mailSub = 'Bagan Map Download (http://dpsmap.com/online_map_shop/index.shtml)'; // the subject of the email which you can change


			//================= DON'T EDIT BELOW THIS CODE ==============================

			$mailBody = '<font face="arial" size="12px" color="#000000">';
			foreach ($_POST as $field => $input) { 
				if( $field != "submit"  ){
					$mailBody .= '<tr><td style="font-size:12px"><b >'.ucfirst ($field) .'</b></td>
                                      <td style="font-size:12px"> : '. trim(strip_tags($input)) . '</td></tr>'; 
				}	
			}
				//===============================================================
				$mailBody .= '</table></font>';
				//===============================================================
		

				$headers = "From: $email \r\n";
				$headers .= "bcc: $BCCMail \r\n";
				$headers .= "Content-type: text/html\r\n";
				$sendRem = mail($toMail, $mailSub, $mailBody, $headers);
				
				
				$header2 = "From: www.dpsmap.com \r\n"; 
							
				$mailsub2="Thank You for your inquiry!";
$mailbody3="Have a nice day.

We have received your inquiry with many thanks. You can make the payment with your phone bill (MPT, Telenor) as following instruction. After making payment, we will sent you the download link to your email within 24-hours.

Please note that you will need to transfer the phone bill with the phone number you filled in the inquiry form.

MPT ျဖင့္ Phone Bill 10,000 ks ေငြလႊဲနည္း
*223*10000*09455204020# call ႏွိပ္ပါ

Telenor ျဖင့္ Phone Bill 10,000 ks ေငြလႊဲနည္း
၁။ *979# call ႏွိပ္ပါ
၂။ ေပၚလာတ့ဲ Box မွာ 4.Balance Help ဆိုတ့ဲ “4” လို႔႐ိုက္ပါ…… OK ႏွိပ္ပါ….
၃။ ေပၚလာတ့ဲ Box မွာ 1.Balance Transfer ဆိုတ့ဲ “1” လို႔႐ိုက္ပါ….. OK ႏွိပ္ပါ….
၄။ ေပၚလာတ့ဲ Box ထဲမွာ ဖုန္းနံပါတ္ 09774204020 ထည့္ပါ…. OK ႏွိပ္ပါ….
၅။ ေပၚလာတ့ဲ Box မွာ 10000 လို႔႐ိုက္ပါ….. OK ႏွိပ္ပါ…..
၆။ ေနာက္ထပ္ Box မွာ 1.Confirm ဆိုတ့ဲ “1” ကို႐ိုက္ပါ…. OK ႏွိပ္ပါ….
10,000 က်ပ္.ေငြလႊဲၿပီးပါၿပီ….ေငြလႊဲခ 10,000 က်ပ္ကို 500 က်ပ္က်ပါမယ္


Thanks & Best Regards
DPS Co., Ltd.


If you have any difficulties, kindly contact to this tel : 09 774 204020, 09 775 204020 and email : dpsmap@gmail.com.

DPS Co.,Ltd,
Thanks & Best Regards ";
				
				$sendRem2 = mail($email , $mailsub2 ,$mailbody3 , $header2);
				
				if($sendRem && $sendRem2){	
						header('location:../thank.html');
					exit;
				}else{
					print '<h3>Failed to send your query.</h3>';
					print '<h4>Please Try Later.</h4>';
				}
					
	}
if(empty($_POST['agree']) || $_POST['agree'] != 'agree') {
    echo 'Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy';
}	


/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>