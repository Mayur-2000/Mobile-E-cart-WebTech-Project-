<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/adminheader.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result = getAll($conn);
?>
	<p class="lead"><a href="admin_add.php">Add new Device</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Mobile name</th>
			<th>Model Number</th>
			<th>Company</th>
			<th>Image</th>
			<th>Description</th>
			<th>Price</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_array($result)){ ?>
		<tr>
			<td><?php echo $row['dev_name']; ?></td>
			<td><?php echo $row['mod_num']; ?></td>
			<td><?php echo $row['company']; ?></td>
<td><img class="img-responsive img-thumbnail" src="bootstrap/img/<?php echo $row['image']; ?>"><?php echo $row['image']?></td>
			<td><?php echo $row['description']; ?></td>
			<td><?php echo $row['price']; ?></td>
			
			<td><a href="admin_edit.php?mod_num=<?php echo $row['mod_num']; ?>">Edit</a></td>
			<td><a href="admin_delete.php?mod_num=<?php echo $row['mod_num']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>
