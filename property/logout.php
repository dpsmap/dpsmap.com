<?php
   session_start();
   unset($_SESSION["dps_id"]);unset($_SESSION["dps_email"]);
   	setcookie("adminname","");setcookie("adminemail","");
	setcookie("dps_id","","","");

   header("Location: login.php");
   
   ?>