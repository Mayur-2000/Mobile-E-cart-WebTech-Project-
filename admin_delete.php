<?php
	$mod_num = $_GET['mod_num'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM devices WHERE mod_num = '$mod_num'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_book.php");
?>