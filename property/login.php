    <?php

   session_start();
   //echo $_SESSION['dps_id']; echo $_SESSION['dps_email'];
   if(isset($_SESSION['dps_id']) && isset($_SESSION['dps_email']))
   {header("Location: index.php");}
   
else{
  
include('db.php');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
        }




    if(isset($_POST['submit']) && isset($_POST['uname'])){
        $uname = $_POST['uname'];
        $psw = $_POST['psw'];
$psw=md5($psw);
   //     echo "<script>alert('hello');</script>";

        
          if (!empty($uname) && !empty($psw)) {
            $query = "SELECT * FROM users WHERE email = '$uname' && password = '$psw'  && (role = 'User' || role = 'Admin')";
            $res = mysqli_query($conn, $query);
     
            if (mysqli_num_rows($res) == 1) {
                $row = mysqli_fetch_array($res);
                $_SESSION['dps_id'] = $row['id'];
                $_SESSION['dps_email'] = $row['email'];
                setcookie('dps_id', $row['id'], time() + (60 * 60 * 24 * 30), "/");

                header("Location: index.php");
               
            } else {
       echo "<script>alert('Sorry, admin suspended or you must enter a valid username and password to log in.');</script>";
               // $error_msg = 'Sorry, you must enter a valid username and password to log in. <a href="Signup.php">Please sign up!</a>';
            }
        }
        
        
        
        
        
        
        
        
        
        }
    
    }
        ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #3486eb;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #3486eb;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<br>
<center>
<img src="../images/dpsmap_title_.png"  style="padding-top:5px;width:270px;" alt="DPS Logo" align="center"   /> 
<br>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
<h4 style="color:gray;">You need to login.</h4>
</center>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   <!--   <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    

    </div>

    <div class="container">
      <label for="uname"><b>Username / Email</b></label>
      <input type="text" placeholder="Enter Username / Email" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="submit" value="submit">Login</button>
      
  <!--    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     <!-- <span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>