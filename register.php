<?php
include('dbcon.php');

$name=$_POST["name"];
$num=$_POST["num"];
$password=$_POST["password"];
$num1=$_POST["confirm"];

$insert_record="INSERT INTO `users`(`id`,`name`,`password`) VALUES ('$num','$name','$password')";
						
if (mysqli_query($conn, $insert_record)) {
	echo "<center><h3>Your Account Was Created .</h3></center>";
	
} else {
    echo "User Exits. ";
}


?>