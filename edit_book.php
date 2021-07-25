<?php	
	// if save change happen
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
		exit;
	}

	$mod_num = trim($_POST['mod_num']);
	$dev_name = trim($_POST['dev_name']);
	$company = trim($_POST['company']);
	$description = trim($_POST['description']);
	$price = floatval(trim($_POST['price']));

	if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
		$image = $_FILES['image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
	}

	require_once("./functions/database_functions.php");
	$conn = db_connect();


	$query = "UPDATE devices SET  
	dev_name = '$dev_name', 
	company = '$company', 
	description = '$description', 
	price = '$price'";
	if(isset($image)){
		$query .= ", image='$image' WHERE mod_num = '$mod_num'";
	} else {
		$query .= " WHERE mod_num = '$mod_num'";
	}
	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: admin_edit.php?mod_num=$mod_num");
	}
?>