<?php
include ("database_connection.php");
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
global $con;
$sql="SELECT * FROM admminlogin WHERE email='$email' AND password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if ($row>0) {
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['email']=$data['email'];
	$_SESSION['password']=$data['password'];
	$_SESSION['name']=$data['name'];
	header('location:dashboard.php');
}
else
{
	echo "<script>alert('username or password doesnot exsit.');window.location.href='adminlogin.php';</script>";
}
?> 