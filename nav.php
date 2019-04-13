  <?php
  session_start();

  require_once 'connect.php';
  ?>

<nav class="navbar navbar-expand-lg navbar-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand">Foodie</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="faq.php">Faq</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact_us.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="all_shops.php">Restaurants</a>
      </li>
           <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cuisine
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_shops.php">Thai</a>
          <a class="dropdown-item" href="result.php">Chinese</a>
          <a class="dropdown-item" href="italian.php">Italian</a>
          <a class="dropdown-item" href="result.php">Other Cuisine</a>
        </div>
      </li> -->
    </ul>
    <?php

        if(isset($_SESSION['valid'])!=true){
          ?>
          <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="sign_in.php">Sign In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign_up.php">Sign Up</a>
              </li>
            
            </ul>

        <?php
        }
        else{
          ?>
           <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link "  href="view_cart.php"><span class="badge badge-light"><?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);} ?></span> View Cart <i class="fas fa-cart-arrow-down"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" ><?php if (isset($_COOKIE["username"])){
  echo "Welcome " . $_COOKIE["username"] . "!<br>";
    
}
else{
    $now = time(); // Checking the time now when home page starts.
    if ($now > $expire) {
        session_destroy();
        header("location: log_in.php");    
}
}
?>
                
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            
            </ul>

        
          <?php
        }
        ?>
  </div>
</nav>