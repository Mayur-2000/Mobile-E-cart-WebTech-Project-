<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Add new Device";
	require "./template/adminheader.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$mod_num = trim($_POST['mod_num']);
		$mod_num = mysqli_real_escape_string($conn, $mod_num);
		
		$dev_name = trim($_POST['dev_name']);
		$dev_name = mysqli_real_escape_string($conn, $dev_name);

		$company = trim($_POST['company']);
		$company = mysqli_real_escape_string($conn, $company);
		
		$description = trim($_POST['description']);
		$description = mysqli_real_escape_string($conn, $description);
		
		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);

		// add image
		if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
			$image = $_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		}

		// find publisher and return pubid
		// if publisher is not in db, create new

		$query = "INSERT INTO devices VALUES ('$mod_num','$dev_name','$company','$image','$description','$price')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_book.php");
		}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ModelNumber</th>
				<td><input type="text" name="mod_num"></td>
			</tr>
			<tr>
				<th>DeviceName</th>
				<td><input type="text" name="dev_name" required></td>
			</tr>
			<tr>
				<th>Company</th>
				<td><input type="text" name="company" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="description" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			
		</table>
		<input type="submit" name="add" value="Add new Device" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>