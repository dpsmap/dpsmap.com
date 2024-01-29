<?php
include("../db.php");

	if(isset($_POST['btnMrauku']))//Start btnMrauku
	{
	//$tbl_name = temp_members_db;//table name
	$confirm_code = md5(uniqid(rand()));//Random Confirmation Code
	
	$Name = check_input($_POST['Name']);//values sent from form
	$Email =  check_input($_POST['Email']);
	$Phone =  check_input($_POST['Phone']);
	$Reason =  check_input($_POST['Reason']);
	$Wherefrom =  check_input($_POST['Wherefrom']);
        $Page=  "Mrauku";

	$sql = "INSERT INTO temp(confirm_code,Name,Email,Phone,Reason,Wherefrom,Page)VALUES('$confirm_code','$Name','$Email','$Phone','$Reason','$Wherefrom','$Page')";
	
	$result = mysqli_query($conn,$sql);

	
	if($result)//if sucessfully inserted data into database,send confirmation linl to email
	{ 
	/*************Send email to Owner Start***************************/
		$toMail = 'dpsmap@gmail.com'; // your email address     dpsmap@gmail.com
		//$toMail = 'shweyee@dpsmap.com'; 
		$CCMail = 'sonnyamo@gmail.com'; //sonnyamo@gmail.com,  BCC (Crbon copy) also send the email to this address (leave empty if you don't use it)
		$thanksPage = 'http://www.dpsmap.com'; // the URL of the thank you page, You can modify the url and make it yours.
		$mailSub = 'Mrauku Map Download (http://dpsmap.com/download/Mrauku Map.html)'; // the subject of the email which you can change


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

				$headers = "From: $Email \r\n";
				$headers .= "cc: $CCMail \r\n";
				$headers .= "Content-type: text/html\r\n";
				//$sendRem = mail($toMail, $mailSub, $mailBody, $headers);
				$sendRem = mail($toMail, $mailSub, $mailBody, $headers);
		
		/**************Send email to Owner End*************************/
		
		/**************Send email to customer start**********************/
		
		$to = $Email; // send email to...
		$subject = "Your confirmation link here";//your subject
		$header = "From:dpsmap@gmail.com";//$header = "from:your name <your email>";//from
		$message="Your Confirmation link \r\n";//your message
		$message.="Click on this link to activate your account \r\n";
		//$message.="http://www.xinrei.com/mapdownload/confirmationmagway.php?passkey=$confirm_code \r \n";
		$message.="http://www.dpsmap.com/mrauku/confirmationmrauku.php?passkey=$confirm_code \r \n";
		
		$sentmail = mail($to,$subject,$message,$header);//send email
		
		/***************Send email to customer end*********************/
		if($sentmail){	
						//header('location:../thank.html');
						print"<script>location.replace('../thank.html'); </script>";
					exit;
				}else{
					print '<h3>Failed to send your query.</h3>';
					print '<h4>Please Try Later.</h4>';
				}
		
	} 
		//if not found
	else {
		echo "Not found your email in our database";
	}
	//if your email successfully sent
	if($sentmail)
	{
		echo "Your Confirmation link has been sent to your email address.";
	} 
	else
	{
		echo "Cannot sent Confirmation link to your email address";
	}
}//end btnMrauku


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