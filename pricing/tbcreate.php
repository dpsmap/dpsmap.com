 <?php
$servername = "mysql2001.my-virtual-panel.com";
$username = "dps_pricing";
$password = "12qwaszx";
$dbname = "dps_pricing";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
echo "Connected successfully";

// guide
/*$sql = "CREATE TABLE `guide` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `current_grade` varchar(30) NOT NULL,
  `current_subject` varchar(30) NOT NULL,
  `e_device` varchar(30) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)"; */
//teacher
/*$sql="CREATE TABLE `mmc_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `edu` varchar(30) NOT NULL,
  'edu_subject' varchar(30),
  `edu_year` varchar(30),
  `school` varchar(30),
  `dob` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `learn_course` varchar(30) NOT NULL,
  `learn_subject` varchar(30),
  `e_device` varchar(30) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))";
*/
//student
//$sql="DROP TABLE IF EXISTS `pricing`";
$sql="CREATE TABLE `pricing` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no` varchar(10) NOT NULL,
  `item` varchar(30) NOT NULL,
  `1pcs_price` varchar(100) NOT NULL,
  `10pcs_price` varchar(100) NOT NULL,
  `20pcs_price` varchar(100) NOT NULL,
  `50pcs_price` varchar(100) NOT NULL,
  `reseller` varchar(100) NOT NULL,
  `server` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `date` timestamp  DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))";
 
if (mysqli_query($conn, $sql)) {
    echo "Table DownloadLink created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

