<?php
include('dbcon.php');

$num=$_POST["number"];
$password=$_POST["password"];

$sql = "SELECT name, password,id FROM users WHERE id = '".$num."' AND password = '".$password."'";
$result = mysqli_query($conn, $sql);
error_reporting(0);

if (mysqli_num_rows($result)>0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
	{
        if($num == $row["id"] and $password == $row["password"])
		{
		header('Location: users/home.html');
	
		}
		else
		{
		echo "Id and Password is not matching.Try again.";
		header('Location: login_user.html');

		}
	}
	
}
else
{
		echo "Id and Password is not matching.Try again.";
		header('Location: login_user.html');
}
						
?>

