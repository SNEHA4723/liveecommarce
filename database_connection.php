<?php
$con;
 function connection()
 {
 	global $con;
 	$hostname="localhost";
 	$username="root";
 	$password="";
 	$db="snehadatabase";
 	$con=mysqli_connect($hostname,$username,$password,$db);

 	// if(!$con)
 	// {
 	// 	die("not established".mysqli_connect_error());
 	// }
 	// else
 	// {
 	// 	echo " establish";
 	// }
 }
 connection();


 ?>