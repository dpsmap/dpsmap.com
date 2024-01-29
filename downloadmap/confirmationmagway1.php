<?php
include("db.php");

$passkey = $_GET['passkey'];//passkey that got from link
$tbl_name1 = "temp";

$sql1 = "SELECT * FROM $tbl_name1 WHERE confirm_code='$passkey'";//retrieve from table where row that match this 
$result1 = mysqli_query($conn,$sql1);
if($result1)//if successfully queried
{
	$count = mysqli_num_rows($result1);//count how many row has this passkey
	if($count==1)//if found this passkey in our database,retrieve data from table "temp_members_db"
	{
		$rows=mysqli_fetch_array($result1);
		$Name=$rows['Name'];
		$Email=$rows['Email'];
		$Phone=$rows['Phone'];
		$Reason=$rows['Reason'];
		$Wherefrom=$rows['Wherefrom'];
		$tbl_name2="register";
		
		$sql2="INSERT INTO $tbl_name2(Name, Email, Phone, Reason,Wherefrom)VALUES('$Name', '$Email', '$Phone', '$Reason','Wherefrom')";// Insert data that retrieves from "temp_members_db" into table "registered_members" 
		$result2=mysqli_query($conn,$sql2);
	}//end if $count
	else//if not found passkey,display message"wrong confirmation code
	{
		echo "Wrong Confirmation Code";
	}
// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
	if($result2)
	{
		echo "Your account has been activated!!!!!!!!!!!!!! "; ?>
        <button  onclick="window.location.href='images/Magway.zip';this.disabled=true; this.value='Please Wait...';" name="btndownload">Download Here</button>
<?php
		$sql3="DELETE FROM $tbl_name1 WHERE confirm_code='$passkey'";// Delete information of this user from table "temp_members_db" that has this passkey 
		$result3=mysqli_query($conn,$sql3);
	}//end if $result2
}//end if $result1
?>
