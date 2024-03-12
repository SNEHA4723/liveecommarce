<?php
include('database_connection.php');
$category=$_POST['category'];

$sql="INSERT INTO  catagory(catagory) VALUES('".$category."')";
global $con;
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('succussefully add');window.location.href='category.php';</script>";
}
else
{
	echo"<script>alert('unsuccussefully add');window.location.href='category.php';</script>";
}

