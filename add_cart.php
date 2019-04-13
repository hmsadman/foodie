<?php
	session_start();

	//check if product is already in the cart
	if(!in_array($_GET['id'], $_SESSION['cart'])){
		array_push($_SESSION['cart'], $_GET['id']);
		$_SESSION['message'] = 'Product added to cart';
	}
	else{
		$_SESSION['message'] = 'Product already in cart';
	}
    $RestaurantId = $_GET['resId'];

    /*
     header('location: menu.php?id=<?php echo $row['name']; ?>');
     */
     header('Location: menu.php?id=' . $RestaurantId);
?>
<?php echo $RestaurantId; ?>