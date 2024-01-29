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

			$mailSub = 'Myanmar Map Myanmar Version Download (http://dpsmap.com/myanmar/index.shtml)'; // the subject of the email which you can change


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
				$header2 .= "bcc: $BCCMail \r\n";				
				$mailsub2="Thank You for inquiring about downloading free myanmar map (myanmar version)";
$mailbody3="Thanks for your download.
We received your map download inquiry with many thanks. You click this link for download.

http://bit.ly/myanmarmly (7.83 MB)

If you wish to get betters images quality, you can purchase in following link

http://www.dpsmap.com/online_map_shop

Thanks & Best Regards
DPS Co., Ltd.


If you have any difficulties, kindly contact to this tel : 09 774 204020, 09 775 204020 and email : dpsmap@gmail.com.
";
				$sendRem2 = mail($email , $mailsub2 ,$mailbody3 , $header2);
				
				if($sendRem && $sendRem2){	
						header('location:../thank.html');
					exit;
				}else{
					print '<h3>Failed to send your query.</h3>';
					print '<h4>Please Try Later.</h4>';
				}
					
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