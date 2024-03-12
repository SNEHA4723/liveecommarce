<?php
include('database_connection.php');
$name=$_POST[''];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO admminlogin(name,email,password)VALUES('$name','$email','$password')";
global $con;
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('succussefully login');window.location.href='adminlogin.php';</script>";
}
else
{
	echo"<script>alert('unsuccussefully login');window.location.href='adminlogin.php';</script>";
}

