    <?php

   session_start();
   if(!isset($_SESSION['dps_id']) || !isset($_SESSION['dps_email']))
   {header("Location: login.php");}
   
include('db.php');

$dps_email=$_SESSION['dps_email'];
  $sqli="SELECT * FROM `users` WHERE email = '$dps_email' && (role = 'User' || role = 'Admin')";
  $result_ = mysqli_query($conn, $sqli);
 if (mysqli_num_rows($result_) != 1) {
            echo "<script>alert('Sorry, admin suspend you.');</script>";
     header("Location: logout.php");
 }


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




    if(isset($_POST['Submit'])){
        $string = $_POST['Address'];

//$str_arr = preg_split ("/\|/", $string);  
$str_arr = explode(" | ", $string);
$Address=$str_arr[0];
$DPS_ID=$str_arr[1];
            
    


        $Contact_Name=$_POST['Contact_Name'];
        $Contact_No=$_POST['Contact_No'];
        $Contact_Source=$_POST['Contact_Source'];
        $Owner_Price=$_POST['Owner_Price'];
        $Owner_Price_Date=$_POST['Owner_Price_Date'];
        $Buyer_Price=$_POST['Buyer_Price'];
        $Buyer_Price_Date=$_POST['Buyer_Price_Date'];
        $Broker_Price=$_POST['Broker_Price'];
        $Broker_Price_Date=$_POST['Broker_Price_Date'];
        $Online_Price=$_POST['Online_Price'];
        $Online_Price_Date=$_POST['Online_Price_Date'];
        $Similar_Sold_Price=$_POST['Similar_Sold_Price'];
        $Similar_Sold_Price_Date=$_POST['Similar_Sold_Price_Date'];
        $Govt_Price=$_POST['Govt_Price'];
        $Govt_Price_Date=$_POST['Govt_Price_Date'];
        $Other_Price=$_POST['Other_Price'];
        $Other_Price_Date=$_POST['Other_Price_Date'];
        
       
        
        $X=$_POST['Lon'];$Y=$_POST['Lat'];
        $Type=$_POST['Type'];
        
        $Remark=$_POST['Remark'];
        
        $Survey_Name=$_POST['user_hidden'];
         
        $sql="INSERT INTO property (Contact_Name, Contact_No,Contact_Source,Owner_Price, 
 Owner_Price_Date, Buyer_Price, Buyer_Price_Date, Broker_Price, Broker_Price_Date, Online_Price, 
 Online_Price_Date, Similar_Sold_Price, Similar_Sold_Price_Date, Govt_Price, Govt_Price_Date, Other_Price, 
 Other_Price_Date, X, Y, Address,Type,Remark,DPS_ID,Survey_Name) 
 VALUES ('$Contact_Name', '$Contact_No','$Contact_Source','$Owner_Price','$Owner_Price_Date','$Buyer_Price','$Buyer_Price_Date','$Broker_Price','$Broker_Price_Date','$Online_Price',
 '$Online_Price_Date','$Similar_Sold_Price'
 ,'$Similar_Sold_Price_Date','$Govt_Price','$Govt_Price_Date','$Other_Price','$Other_Price_Date','$X','$Y','$Address','$Type','$Remark','$DPS_ID',
 '$Survey_Name')";  
 

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  
  
  if(is_array($_FILES['image'])){
    $errors= "";
    $file_name = $_FILES['image']['name'];
    $ff=explode('.',$file_name);
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end($ff));
    //echo "<script>alert('".$file_ext."');</script>";
    //echo "<script>alert('".$file_tmp."');</script>";
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false && $file_name!=""){
       $errors="Extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152){
       $errors='File size must be excately 2 MB';
    }
    
    if($errors==""){
      $f_name=$last_id.'.'.$file_ext;
      $didUpload=move_uploaded_file($file_tmp,"images/".$f_name);
        if ($didUpload) {
       $sqls = "UPDATE property SET Photo_Name_1='$f_name' WHERE no='$last_id'";
}



if ($conn->query($sqls) === TRUE) {

} else {
    
}
       
       
    }
    else{
       echo "<script>alert('".$errors."');</script>";
    }
 }

 





  echo "<script>alert('New record created successfully');</script>";
}
else {
    $err="Error: " . $sql . "<br>" . $conn->error;
     echo "<script>alert('".$err."');</script>";
}

 
    }
$conn->close();
?>
 
    
    



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Property Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>

 
 


 
  
  <script>
var x = document.getElementById("GPS_Location");

function getLocation() { 
  if (navigator.geolocation) { 
    navigator.geolocation.getCurrentPosition(showPosition);;
    
  } else {
    x.value = "Geolocation is not supported by this browser.";
    // x.innerHTML 
  }
}

function showPosition(position) {

  y = position.coords.latitude;
  x=  position.coords.longitude;
  document.getElementById("Lon").value =x;
  document.getElementById("Lat").value =y;

}


    $('.date').datepicker({
       format: 'dd-mm-yyyy'
     });

$('.datepicker').datepicker({
    format: 'dd/mm/yyyy'

});

function sub(){
  var a=document.getElementById("a").value; 
  var b=document.getElementById("b").value; 
  var c=document.getElementById("c").value; 
  var d=document.getElementById("d").value; 
  var e=document.getElementById("e").value; 
  var f=document.getElementById("f").value; 
    if(a!='')    {        a=1;    }else {a=0;}
    if(b!='')    {        b=1;    }else {b=0;}
    if(c!='')    {        c=1;    }else {c=0;}
    if(d!='')    {        d=1;    }else {d=0;}
    if(e!='')    {        e=1;    }else {e=0;}
    if(f!='')    {        f=1;    }else {f=0;}
    var g=a+b+c+d+e+f;

    if(g>0){
        return;
          }
    else {
        alert('Please type one of the price.');
      }
     return false;
}

function fun(dd){

if(dd.length>='4'){
$.ajax({
  type: "POST",
  url: "server.php",
   data: {id : dd},
  cache: false,
  success: function(data){ 
    document.getElementById("searchresultss").innerHTML = data;
    //  $('#Address').editableSelect();
    // $("#log").html(data);
  }
});
}else{document.getElementById("searchresultss").innerHTML = '';}
}


</script>


</head>
<body>

<div class="container mt-3">
 <center>
    
    <img src="../images/dpsmap_title_.png"  style="padding-top:5px;width:270px;" alt="DPS Logo" align="center" />
<h4 style="color:gray;">Property Database</h4>
  </center>

 <a  href="logout.php" style="text-align:right;background-color:white;" align="right">Logout</a>
  <form action="" method="POST" enctype="multipart/form-data" onsubmit="return sub();">
      
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Address</span>
      </div>
      <input type="text" class="form-control" id="Address" name="Address" placeholder="Address .." onkeyup="fun(this.value)"  
      list="searchresults" autocomplete="off" required>
        
       
 <datalist id="searchresults">
<option id="searchresultss" value=""></option>
</datalist>


    </div>  
    
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Type</span>
      </div>
      
      <div style="padding-left:10px;padding-right:10px;padding-top:5px;">
          
     <div class="form-check-inline">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="Type" value="sell" required>Sell 
    </label>
   </div>
   
   <div class="form-check-inline">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="Type" value="buy" required>Buy  
    </label>
   </div>
   
    <div class="form-check-inline">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="Type" value="rent" required>Rent  
    </label>
    </div>
    
    </div>
    
    </div> 
    
    
    
  
  
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Cont...Name</span>
      </div>
      <input type="text" class="form-control" name="Contact_Name" placeholder="Contact_Name .." >
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Cont...No</span>
      </div>
      <input type="tel" class="form-control" name="Contact_No" placeholder="Contact_No .." >
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Cont...Source</span>
      </div>
  <input type="text" class="form-control" name="Contact_Source" placeholder="Contact_Source .." >
    </div>
      
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Owner_Price</span>
      </div>
      <input type="number" class="form-control" name="Owner_Price" id="a" placeholder="Owner_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Owner_Price_Date" >
   </div>
    </div>  
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Buyer_Price</span>
      </div>
      <input type="number" class="form-control" name="Buyer_Price" id="b" placeholder="Buyer_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Buyer_Price_Date" >
   </div>
    </div>  
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Broker_Price</span>
      </div>
      <input type="number" class="form-control" name="Broker_Price" id="c" placeholder="Broker_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Broker_Price_Date" >
   </div>
    </div>  
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text"  style="width:110px;">Online_Price</span>
      </div>
      <input type="number" class="form-control" name="Online_Price" id="d" placeholder="Online_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Online_Price_Date" >
   </div>
    </div>  
    
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Similar.S.Price</span>
      </div>
      <input type="number" class="form-control" name="Similar_Sold_Price" id="e" placeholder="Similar_Sold_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Similar_Sold_Price_Date" >
   </div>
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Govt_Price</span>
      </div>
      <input type="number" class="form-control" name="Govt_Price" id="f" placeholder="Govt_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Govt_Price_Date" >
   </div>
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Other_Price</span>
      </div>
      <input type="number" class="form-control" name="Other_Price" placeholder="Other_Price .." >
   <div class="input-group-append">
    <input type="date" class="form-control" name="Other_Price_Date" >
   </div>
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">GPS_Loc...</span>
      </div>
      <input type="number" class="form-control" name="Lat" id="Lat" placeholder="Lat .."  value="" step="any" >
      <input type="number" class="form-control" name="Lon" id="Lon" placeholder="Lon .."  value="" step="any" >
   <div class="input-group-append">
      <button class="btn btn-primary" type="button" onclick="getLocation()">Get</button>
   </div>
    </div> 
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Photo</span>
      </div>
      <input type="file" accept="image/*" class="form-control" name="image" placeholder="Photo" capture>
    </div>
    
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <span class="input-group-text" style="width:110px;">Remark</span>
      </div>
      <input type="text" name="Remark" class="form-control" placeholder="Remark..">
    </div>
    <input type="hidden" name="user_hidden" value="<?php echo $_SESSION['dps_email']; ?>">
     <input type="submit" name="Submit" class="btn btn-primary" placeholder="Submit..">
     
  </form>
  

</div>
<br>
</body>
</html>
