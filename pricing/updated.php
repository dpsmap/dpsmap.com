<?php
include 'connection.php';
$id=$_GET['id'];
session_start();
if($_SESSION["user"]=="admin" && $_SESSION["pass"]=="12qwaszxQWER")
{
$id=mysqli_real_escape_string( $conn, $_GET['id'] );
$sql="SELECT * FROM  pricing WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$no=$row["no"];
$item=$row["item"];
$price_1=$row["1pcs_price"];
$price_10=$row["10pcs_price"];
$price_20=$row["20pcs_price"];
$price_50=$row["50pcs_price"];
$reseller=$row["reseller"];
$server=$row["server"];
$remark=$row["remark"];
if(isset($_GET['no'])){
$id=$_GET['id'];
$no=$_GET['no'];
$item=$_GET['item'];
$price_1=$_GET['price_1'];
$price_10=$_GET['price_10'];
$price_20=$_GET['price_20'];
$price_50=$_GET['price_50'];
$reseller=$_GET['reseller'];
$server=$_GET['server'];
$remark=$_GET['remark'];
$update="UPDATE pricing 
SET no='$no',item='$item',1pcs_price='$price_1',10pcs_price='$price_10',20pcs_price='$price_20',50pcs_price='$price_50',reseller='$reseller',server='$server',remark='$remark' 
WHERE id='$id' ";
if(mysqli_query($conn, $update))
header("Location: dashboard.php");
else 
echo mysqli_error($conn);
}
else{
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
     <table border="1">
        <tr>
                <th>No</th>
                <th>Item</th>
                <th> 1pcs Price</th>
                <th> Above 10pcs Price</th>
                <th> Above 20pcs Price</th>
                <th> Above 50pcs Price</th>
                <th> Reseller</th>
                <th> Server</th>
                <th> Remark</th>
                <th> Update</th>
        </tr>
        <tr>
            <td><input type="text" id="no" name="no" value='<?php echo $no;?>'></td>
            <td><input type="text" id="item" name="item" value='<?php echo $item;?>'></td>
            <td><input type="text" id="price_1" name="price_1" value='<?php echo $price_1;?>'></td>
            <td><input type="text" id="price_10" name="" value='<?php echo $price_10;?>'></td>
            <td><input type="text" id="price_20" name="price_20" value='<?php echo $price_20;?>'></td>
            <td><input type="text" id="price_50" name="price_50" value='<?php echo $price_50;?>'></td>
            <td><input type="text" id="reseller" name="reseller" value='<?php echo $reseller;?>'></td>
            <td><input type="text" id="server" name="server" value='<?php echo $server;?>'></td>
            <td><input type="text" id="remark" name="remark" value='<?php echo $remark;?>'></td>
            <td><input type="submit" value="Comfirm Now"</td>
        </tr>
        
     </table>
    </form>
<?php
}   
}
else
echo "something wrong!please contact Htet Aung Shane!09793923895";
?>