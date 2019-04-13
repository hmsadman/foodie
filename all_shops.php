<?php 
    include "header.php" 
    ?>
<section>
    <?php
$sql = "SELECT * FROM restaurant";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["sl"]. " - Name: " . $row["name"]. " " . $row["sell"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
        ?>
        
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
</div> <!--container div  -->
</section>


<?php 
    include "footer.php" 
    ?>