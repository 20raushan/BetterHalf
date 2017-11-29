<?php
$servername = "localhost";
$user = "id1220508_betterhalf";
$password = "betterhalf";
$database = "id1220508_betterhalf";
$conn = mysqli_connect($servername,$user,$password,$database);
if($conn)
 {
	//echo "successfully connected";
 }
 else
 {
	 echo "not connected";
 }
?>