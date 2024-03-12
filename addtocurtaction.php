<?php
include('database_connection.php');
$p_id=$_GET['p_id'];
$user_id=$_GET['user_id'];
$size=$_GET['size'];



$add="SELECT * FROM addtocurt WHERE user_id='".$user_id."' AND product_id='".$p_id."'";
$add_count=mysqli_query($con,$add);
$count=mysqli_num_rows($add_count);
if($count)
{
	echo "<script>alert('This product already in cart');window.location.href='addtocurt.php';</script>";
}
else
{
	$sql="INSERT INTO addtocurt(user_id,product_id,size) VALUES ('$user_id','$p_id','$size')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('succussefully addto addtocart');window.location.href='addtocurt.php';</script>";
}
else
{
	echo"<script>alert('not add to addtocart');window.location.href='addtocurt.php';</script>";
}
}
	