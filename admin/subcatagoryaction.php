<?php
include('database_connection.php');
$category=$_POST['category'];
$sub_category=$_POST['sub_category'];

$sql="INSERT INTO  subcatagory(c_id,name) VALUES('".$category."','".$sub_category."')";
global $con;
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('succussefully add');window.location.href='sub_catagory.php';</script>";
}
else
{
	echo"<script>alert('unsuccussefully add');window.location.href='sub_catagory.php';</script>";
}

