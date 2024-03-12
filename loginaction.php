<?php
include ("database_connection.php");
$username=$_POST['username'];
$password=$_POST['password'];
global $con;
$sql="SELECT * FROM `customer` WHERE email='$username' AND password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['userid']=$data['id'];
	$_SESSION['email']=$data['email'];
	$_SESSION['password']=$data['password'];
	$_SESSION['name']=$data['name'];
	$_SESSION['image']=$data['image'];
	$_SESSION['phone']=$data['phone'];
	
	header('location:home.php');
}
else
{
	echo "<script>alert('username or password doesnot exsit.');window.location.href='login.php';</script>";
}
?> 