

<?php
include "header.php";
?>



    

        <!--Search Button-->
    <br>
    
    <div class ="col-md-3"></div>
    <div class="col-md-">
    <?php
include "search.php";
?>
    </div>
    <br>

    <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1 class="gallery-title">Search Results</h1>
        </div>

        <br/>


          <?php
                if(isset($_GET['id']) == '1' ){
                  $location = $_POST['area'];

                  if ($location==NULL) {
                  }
                  else{
                    $search = mysqli_real_escape_string($conn, trim($location));
                    // Searching using Like
                    $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                    $fetch = mysqli_query($conn,$sql);
                    $restaurant = mysqli_fetch_assoc($fetch);
                    if ($restaurant!=0) {
                      $sql = "SELECT * FROM restaurant WHERE location LIKE '%$search%'";
                      $result = mysqli_query($conn,$sql);
                      $response = array();
                      while($row = mysqli_fetch_array($result))
                      {
                        // echo '<img src="data:images/jpeg;base64,'.base64_encode($row['image']).'" height="100" width="100" />';
                        // echo "<br><a href=\"restaurant.php?id=$row[0]\">";
                        // echo ""
                        ?>
                 
                        <?php
                      // echo "<p>".$row['name']."</p>";
                      // echo "Nothing found2222!";
                      ?>
                      <!-- </div>  </a> -->
                      <?php
                      }
                    }
                    else{
                      // echo "Nothing found!";
                    }
                  }                  
                }
              ?>  
            
            

            
        </div>
    </div>
    <div class="container">
<h2> Results</h2>
    <div class="row">
    <!-- my php code which uses x-path to get results from xml query. -->
    <?php foreach ( $result as $row) { ?>
        <div class="col-sm-4 ">
            <div class="card-deck" style="margin-bottom: 20px;">
                <div class="card" >
                    <!-- <img class="card-img-top"  src=" " alt="Card image cap"> -->
                    <?php echo '<img class="card-img-top" src="data:images/jpeg;base64,'.base64_encode($row['image']).'" height="200px" width="200px" />'; ?>

                    <div class="card-body">
                        <h5 class="card-title"><b><?php echo $row['name']; ?></b></h5>
                        <p class="card-text"><b><?php echo $row["location"]; ?></b></p>
                        <a href="menu.php?id=<?php echo $row['name']; ?>" class="btn btn-primary btn-sm">Menu</a>
                        
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php 
    include "footer.php" 
    ?>




