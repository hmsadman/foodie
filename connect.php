<?php

$conn = mysqli_connect("localhost:3308","admin","t5Cga9MbUnLwbFi","foodie");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>