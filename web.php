<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a href="admin_add.php">Add new book</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<div>
			<?php echo $row['dev_name']; ?>
			<?php echo $row['mod_num']; ?>
			<?php echo $row['company']; ?>
		<img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['image']; ?>"><?php echo $row['image']?>
			<?php echo $row['description']; ?>
			<?php echo $row['price']; ?>
			<a href="admin_edit.php?mod_num=<?php echo $row['mod_num']; ?>">Edit</a>
			<a href="admin_delete.php?mod_num=<?php echo $row['mod_num']; ?>">Delete</a>
		<?php } ?>
	</div>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>
