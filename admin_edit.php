<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Edit device details";
	require_once "./template/adminheader.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['mod_num'])){
		$mod_num = $_GET['mod_num'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($mod_num)){
		echo "Empty model number! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM devices WHERE mod_num = '$mod_num'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="edit_book.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Model</th>
				<td><input type="text" name="mod_num" value="<?php echo $row['mod_num'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>DeviceName</th>
				<td><input type="text" name="dev_name" value="<?php echo $row['dev_name'];?>" required></td>
			</tr>
			<tr>
				<th>Company</th>
				<td><input type="text" name="company" value="<?php echo $row['company'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="image"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="description" cols="40" rows="5"><?php echo $row['description'];?></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" value="<?php echo $row['price'];?>" required></td>
			</tr>S
		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<a href="admin_book.php" class="btn btn-success">Confirm</a>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require "./template/footer.php"
?>