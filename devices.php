<style>
.clm{
    
    float:center;
    width:100%;
    padding:10px;
}
.clm p{
   
    height:400px;
}

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
  require_once "./functions/database_functions.php";
  $conn = db_connect();
//SELECT book_isbn, book_image FROM books
 
  $result = mysqli_query($conn, "SELECT mod_num,dev_name,image FROM devices");
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $title = "Full Catalogs of Books";
  require_once "./template/header.php";
?>
<body>
<section>
  <p class="lead text-center text-muted">Full Catalogs of Devices</p>
    <?php for($i = 0; $i < mysqli_num_rows($result); $i++){ ?>
      <div class="content-box">
        <div class="container">
           <div class="row">
           <div class="clm">
        <?php while($query_row = mysqli_fetch_assoc($result)){ ?>
          <div class="col-md-3">
          
            <a href="device.php?mod_num=<?php echo $query_row['mod_num']; ?>">
          <center><button style="color:blue;background-border:black;"><?php echo $query_row['dev_name'];?> </button></center>
              <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $query_row['image']; ?>">
             </a>
             
           </div>
          
          
        <?php
          $count++;
          if($count >= 4){
              $count = 0;
              break;
            }
          } ?> 
      </div>
      </div>
      </div>
      </div>
      </section>
        </body>
<?php
      }
  if(isset($conn)) { mysqli_close($conn); }
  require_once "./template/footer.php";
?>