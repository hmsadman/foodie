<?php 
    include "header.php" 
    ?>
    <?php
    
    if(isset($_POST['login'])){
// Taking username and passwords
    $username = $_POST['username'];
    $password = $_POST['password'];
    $type = "user";
    //mysqli injection protected
    $protected_username = mysqli_real_escape_string($conn,$username);
    $query = "SELECT * FROM user where username = '$protected_username' ";
    $result = mysqli_query($conn,$query);

    $row = mysqli_fetch_assoc($result);

    $db_username = $row['username'];
    $db_password = $row['password'];

    if ($username === $db_username && $password === $db_password)
    {   
    //     if(!isset($_SESSION)) 
    // { 
        //session_start(); 
    // } 
        setcookie(username, $username, time() + (86400 * 30), "/"); // 86400 = 1 day
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;
        $_SESSION['type'] = $type;
        if(isset($_POST['rememberMe'])){
            $expire=time()+120;
            setcookie("username", $username, $expire);
        }
    else{
        $expire=time()+30;
        setcookie("username", $username, $expire);
    }
        header("location:index.php");

    }
    else
    {
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';

    }

}
?>



    <!-- Sign In Form-->
    
<div class="container" >
    <div class="row" >
        <div class="col-md-6" style="background: lavender; border: 1px solid grey; border-radius: 25px;
    box-shadow: 1px salmon; padding: 10px 10px; margin-left: 25%;" >
            <!-- <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        Enter the email you signed up with</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div> -->
            <div class="" >
                <p class="form-title">
                    Sign In</p>
                <form class="login" method="post" action="sign_in.php">
                <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" />
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password" />
</div>
                <input type="submit" name="login" value="Sign In" class="btn btn-success btn-sm"  />
                </form>
            </div>
        </div>
    </div>
   
</div>

<?php 
    include "footer.php" 
    ?>
    
