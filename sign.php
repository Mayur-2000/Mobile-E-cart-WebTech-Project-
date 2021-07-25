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
 
  $Email = $_POST['Email'];
  $psw = $_POST['psw'];
  
  $rs=mysqli_query($conn,"SELECT * FROM signin WHERE Email ='$Email' AND psw ='$psw'");
  
  if (mysqli_num_rows($rs)>0)
{
  echo "\nLogin Id Already Exists....\n";
  header("refresh:1; url=signin.html");
  exit;
}
else{
  echo "\nTrying to create user....\n";
}
$sql="INSERT into signin(Email,psw) values('$Email','$psw')";
if (!mysqli_query($conn,$sql)) 
  {
    echo "\n value couldnt be inserted\n";
    header("refresh:10; url=signin.html");
  }
  else
  {
    echo "\n values inserted\n";
    header("refresh:1; url=login.html");
  }
?>
</body>
</html>