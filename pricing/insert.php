<?php
include 'connection.php';
session_start();
if($_SESSION["user"]=="admin" && $_SESSION["pass"]=="12qwaszxQWER")
{
if (isset($_GET["no"])){
    $no=$_GET["no"];
    //echo 'No'.$no.'<br>';
    $item=$_GET["item"];
    //echo 'Item'.$item.'<br>';
    $price_1=$_GET["1_price"];
    //echo 'Price'.$price_1.'<br>';
    $price_10=$_GET["10_price"];
    //echo 'price_10'.$price_10.'<br>';
    $price_20=$_GET["20_price"];
    //echo 'price_10'.$price_20.'<br>';
    $price_50=$_GET["50_price"];
    //echo 'price_50'.$price_50.'<br>';
    $reseller=$_GET["reseller"];
    //echo 'Reseller'.$reseller.'<br>';
    $server=$_GET["server"];
    //echo 'Server'.$server.'<br>';
    $remark=$_GET["remark"];
    //echo 'Remark'.$remark.'<br>';
    $sql="INSERT INTO pricing (no, item, 1pcs_price, 10pcs_price, 20pcs_price, 50pcs_price, reseller, server, remark) VALUES ('$no', '$item', '$price_1', '$price_10', '$price_20', '$price_50', '$reseller','$server', '$remark')";
     if (mysqli_query($conn, $sql)) {
        header("Location: dashboard.php");
    }
    else
    echo mysqli_error($conn);
    
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DPS Pricing Insert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data Insert Form</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
      <label for="no">No:</label>
      <input type="text" class="form-control" id="no" placeholder="Enter Item No" name="no">
    </div>
    <div class="form-group">
      <label for="no">Item:</label>
      <input type="text" class="form-control" id="item" placeholder="Enter Item Name" name="item">
    </div>
    <div class="form-group">
      <label for="no">1pcs Price:</label>
      <input type="text" class="form-control" id="1_price" placeholder="Enter 1pcs Price" name="1_price">
    </div>
    <div class="form-group">
      <label for="no">Above 10pcs Price:</label>
      <input type="text" class="form-control" id="10_price" placeholder="Enter Above 10pcs Price" name="10_price">
    </div>
    <div class="form-group">
      <label for="no">Above 20pcs Price:</label>
      <input type="text" class="form-control" id="20_price" placeholder="Enter Above 20pcs Price" name="20_price">
    </div>
    <div class="form-group">
      <label for="no">Above 50pcs Price:</label>
      <input type="text" class="form-control" id="50_price" placeholder="Enter Above 50pcs Price" name="50_price">
    </div>
    <div class="form-group">
      <label for="no">Reseller:</label>
      <input type="text" class="form-control" id="reseller" placeholder="Enter email" name="reseller">
    </div>
    <div class="form-group">
      <label for="no">Server:</label>
      <input type="text" class="form-control" id="server" placeholder="Enter Server" name="server">
    </div>
    <div class="form-group">
      <label for="no">Remark:</label>
      <input type="text" class="form-control" id="remark" placeholder="Enter Remark" name="remark" value=" ">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
<?php
}
}
?>