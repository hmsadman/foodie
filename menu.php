<?php 
    include "header.php" 
    ?>
    <?php
	// session_start();
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>
<?php
		//info message
		if(isset($_SESSION['message'])){
			?>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-6">
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
				</div>
			</div>
			<?php
			unset($_SESSION['message']);
		}?>
<?php

                if (isset($_GET['id'])) {
                    $count = 1;
                      $ID = $_GET['id'];
                 
                      $ID_protected = mysqli_real_escape_string($conn,$ID);
                    $sql = "SELECT * FROM menu WHERE restaurant='$ID_protected'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                             
                        }
                    } else {
                        echo "0 results";
                    }

                   
                }
                mysqli_close($conn);
              ?>  
              <div class="container">
                  <div class="row">
                  <a class="btn btn-primary"  href="view_cart.php"><span class="badge badge-light"><?php echo count($_SESSION['cart']); ?></span> View Cart <i class="fas fa-cart-arrow-down"></i></a>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Select</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ( $result as $row) { ?>
    <tr>
      <th scope="row"><?php echo $count++; ?></th>
      <td><?php echo $row['item']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <!-- <td style="width:5%;">
          <form>
            <div class="form-group">
                <input class="form-control input-sm" id="inputsm" type="text">
            </div>
        </form>
    </td> -->
    <td>
        <div class="checkbox">
        <!-- adding to cart -->
        <label><a href="add_cart.php?id=<?php echo $row['sl']; ?>&resId=<?php echo $ID; ?>" class="btn btn-primary btn-sm"> Add to Cart</a>
        </div>
  </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
            </div>
            </div>
            <?php 
    include "footer.php" 
    ?>
