<?php
  session_start();
  $user = 'root';
  $pass = '';
  $db = 'ecart';

  $con = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($con,'ecart')) {
		  	
  		echo "\ndatabase not selected\n";
  }
 date_default_timezone_set('Asia/Kolkata');
 $dateout = date('Y/m/d H:i:s');

 $Email= $_SESSION["Email"];
 echo "\n userid is".$Email." camo\n";

 $maxslrow = mysqli_query($con,"SELECT MAX(slno) AS max FROM login");
 $anrow =mysqli_fetch_array($maxslrow);
 $maxsl =$anrow['max'];
 $sql = "UPDATE login SET dateout ='$dateout' WHERE slno ='$maxsl' ";
  if (!mysqli_query($con,$sql)) 
  {
    echo "\nlogout not registered\n";
    header("refresh:2;url=index.php");
  }
  else
  {
    echo "\nlogout registeres\n";
     unset($_SESSION["Email"]);
unset($_SESSION["psw"]);
header("refresh:2;url=login.html");
  }

 
?>