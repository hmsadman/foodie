<?php
session_start();
include_once 'connect.php';
//session unset
session_destroy();

   //echo 'Logged Out!';
   //cookie unset
header('Refresh: 1; URL = index.php');
if(isset($_SESSION['username'])){
   setcookie($_SESSION['username'],'',time()-7000000,'/');
}
?>