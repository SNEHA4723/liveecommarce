<?php
include('database_connection.php');
$p_id=$_GET['p_id'];
$user_id=$_GET['user_id'];
global $con;
$sql="INSERT INTO wishlist(user_id,product_id) VALUES('$user_id','$p_id')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('succussefully add to wishlist');window.location.href='wishlist.php';</script>";
}
else
{
	echo"<script>alert('not add to wishlist');window.location.href='innerpage.php';</script>";
}