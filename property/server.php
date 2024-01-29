<?php
require_once ('db.php');
$q=$_POST["id"];  
    $va=str_replace(","," ",$q);
    $va=explode(" ",$va);
$sql = "SELECT * FROM `dps` WHERE english_name LIKE '%" . implode("%", $va) . "%'"." LIMIT 20";

   $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
 echo "<option value='".$row['english_name']." | ".$row['DPS_ID']."'>";
   }
   
   $conn->close();
/*$json=array();

while($row = mysqli_fetch_array($result)) {
  $json[]=array(
  'value'=> $row['english_name'],
  'ID'=> $row['DPS_ID']
   );
   }
   echo json_encode($json); */
   

  ?>