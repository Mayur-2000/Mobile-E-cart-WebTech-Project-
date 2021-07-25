<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>
	<?php

/*  echo "hello ".$Username." welcome aboard";*/
  // you can also out put usng :$str = <<<EOD my name is $Username EOD;
  // define('PI',3.14159265)
  // echo "the value is".PI;

  $user = 'root';
  $pass = '';
  $db = 'ecart';

  $conn = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  echo "\nconnection established\n";

  if (!mysqli_select_db($conn,'ecart')) {
		  	
  		echo "\ndatabase not selected\n";
  }
 date_default_timezone_set('Asia/Kolkata');
 $datein = date('Y/m/d H:i:s');
  $Email = $_POST['Email'];
  $psw = $_POST['psw'];
  
  $rs=mysqli_query($conn,"SELECT * FROM signin WHERE Email ='$Email' AND psw ='$psw'");
  if(mysqli_num_rows($rs)<1)
  {
    echo "\nInvalid user\n";;
  }
  else
  {
    $_SESSION["Email"]=$_POST['Email'];
    $_SESSION["psw"]=$_POST['psw'];

  }
  
  if (isset($_SESSION["Email"]))
{
  $sql = "INSERT INTO login (Email,datein) VALUES ('$Email','$datein')";
  if (!mysqli_query($conn,$sql)) 
  {
    echo "\nlogin not registered\n";
  }
  else
  {
    echo "\nlogin registered\n";
  }

echo "\nyou are sucessfully loged in\n";
header("refresh:1; url=index.php");
exit;
}
else
{
  echo "\nlogin unsuccessfull\n";
  header("refresh:1;url=login.html");
}
?>
</body>
</html>