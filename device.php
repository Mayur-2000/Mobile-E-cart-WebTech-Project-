<style>
	body {
  height: 100px;
  background-color: #12F7F7; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #12F7F7, white);
}
</style>

<?php
  session_start();
  $mod_num = $_GET['mod_num'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM devices WHERE mod_num = '$mod_num'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty";
    exit;
  }

  $title = $row['dev_name'];
  require "./template/header.php";
?>
      <body>
       <button> 
       <a href="devices.php">Back</a>
       </button>
      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="devices.php">Devices</a> > <?php echo $row['dev_name']; ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="bootstrap/img/<?php echo $row['image']; ?>">
          
        </div>
        <div class="col-md-6">
          <h4>Device Description</h4>
          <p><?php echo $row['description']; ?></p>
          <h4>Device Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "description" || $key == "image" || $key == "dev_name"){
                continue;
              }
              switch($key){
                case "mod_num":
                  $key = "NUM";
                  break;
                case "dev_name":
                  $key = "Name";
                  break;
                case "company":
                  $key = "Company";
                  break;
                case "price":
                  $key = "Price";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
          <form method="post" action="cart.php">
            <input type="hidden" name="mod_num" value="<?php echo $mod_num;?>">
            <input type="submit" value="Purchase / Add to cart" name="cart" class="btn btn-primary">
          </form>
       	</div>
      </div>
            </body>
<?php
  require "./template/footer.php";
?>