<style>
	body {
  height: 100px;
  background-color: #12F7F7; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #12F7F7, white);
}
</style>

<?php
	
	session_start();
	require_once "./functions/database_functions.php";
	require_once "./functions/cart_functions.php";

	// book_isbn got from form post method, change this place later.
	if(isset($_POST['mod_num'])){
		$mod_num = $_POST['mod_num'];
	}

	if(isset($mod_num)){
		// new iem selected
		if(!isset($_SESSION['cart'])){
			// $_SESSION['cart'] is associative array that bookisbn => qty
			$_SESSION['cart'] = array();

			$_SESSION['total_items'] = 0;
			$_SESSION['total_price'] = '0.00';
		}

		if(!isset($_SESSION['cart'][$mod_num])){
			$_SESSION['cart'][$mod_num] = 1;
		} elseif(isset($_POST['cart'])){
			$_SESSION['cart'][$mod_num]++;
			unset($_POST);
		}
	}

	// if save change button is clicked , change the qty of each bookisbn
	if(isset($_POST['save_change'])){
		foreach($_SESSION['cart'] as $mod_num =>$qty){
			if($_POST[$mod_num] == '0'){
				unset($_SESSION['cart']["$mod_num"]);
			} else {
				$_SESSION['cart']["$mod_num"] = $_POST["$mod_num"];
			}
		}
	}

	// print out header here
	$title = "Your shopping cart";
	require "./template/header.php";

	if(isset($_SESSION['cart']) && (array_count_values($_SESSION['cart']))){
		$_SESSION['total_price'] = total_price($_SESSION['cart']);
		$_SESSION['total_items'] = total_items($_SESSION['cart']);
?>
<body>
   	<form action="cart.php" method="post">
	   	<table class="table">
	   		<tr>
	   			<th>Item</th>
	   			<th>Price</th>
	  			<th>Quantity</th>
	   			<th>Total</th>
	   		</tr>
	   		<?php
		    	foreach($_SESSION['cart'] as $mod_num => $qty){
					$conn = db_connect();
					$dev = mysqli_fetch_assoc(getDevbymdnm($conn, $mod_num));
			?>
			<tr>
				<td><?php echo $dev['dev_name'] . " by " . $dev['company']; ?></td>
				<td><?php echo "$" . $dev['price']; ?></td>
				<td><input type="text" value="<?php echo $qty; ?>" size="2" name="<?php echo $mod_num; ?>"></td>
				<td><?php echo "$" . $qty * $dev['price']; ?></td>
			    	
			</tr>
			<?php } ?>
		    <tr>
		    	<th>&nbsp;</th>
		    	<th>&nbsp;</th>
		    	<th><?php echo $_SESSION['total_items']; ?></th>
		    	<th><?php echo "$" . $_SESSION['total_price']; ?></th>
		    </tr>
	   	</table>
	   <center>	<input type="submit" class="btn btn-primary" name="save_change" value="Save Changes"></center>
	</form>
	<br/><br/>
	<a href="checkout.php" class="btn btn-primary">Go To Checkout</a> 
	<a href="devices.php" class="btn btn-primary">Continue Shopping</a>
				</body>
<?php
	} else {
		echo "<p class=\"text-warning\">Your cart is empty! Please make sure you add some items in it!</p>";
	}
	if(isset($conn)){ mysqli_close($conn); }
	require_once "./template/footer.php";
?>