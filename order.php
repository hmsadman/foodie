<?php 
    include "header.php" 
    ?>
<?php
    $Total = $_GET['total'];
    $user = $_SESSION['username'];
    // saving into orders table username, date and total price
    $sql = 'INSERT INTO orders (customer_username, date, total) VALUES ("'.$user.'",CURDATE(),"'.$Total.'")';
    
    
  
?> 
<?php if (mysqli_query($conn, $sql)) { ?>
        <div class="container">
            <div class="row">
                <h1>Your order was successful!!!</h1>
                </div>
                </div>
    <?php } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }?>
<?php
include "footer.php";
?>