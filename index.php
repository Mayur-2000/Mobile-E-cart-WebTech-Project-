<style>
	body {
  height: 100px;
  background-color: #12F7F7; /* For browsers that do not support gradients */
  background-image: linear-gradient(to bottom right, #12F7F7, white);
}
</style>
<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();
  $query = select4Devs($conn);
?>
<body>
      <!-- Example row of columns -->
      <p class="lead text-center text-muted">Latest Devices</p>
      <div class="row">
        <?php foreach($query as $row) { ?>
      	<div class="col-md-3">
      		<a href="device.php?mod_num=<?php echo $row['mod_num']; ?>">
           <img class="img-responsive img-thumbnail" src="bootstrap/img/<?php echo $row['image']; ?>">
          </a>
      	</div>
        <?php } ?>
      </div>
        </body>
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>