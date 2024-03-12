<?php
include ('database_connection.php');
if(isset($_POST['submit']))
{
	$id=$_POST['uid'];
$Name=$_POST['name'];
$Actual_Price=$_POST['actual_Price'];
$Discount=$_POST['Discount'];
$Discount_Price=$_POST['Discount_Price'];

$type=$_POST['type'];

$Image_name=$_FILES['Image']['name']; 
$Img_tmp_name=$_FILES['Image']['tmp_name'];
$Image_location='../assets/product/';

$Description=$_POST['Description'];

global $con;

$sql="UPDATE product SET name='".$Name."',price='".$Actual_Price."',discount='".$Discount."',dis_price='".$Discount_Price."',type='".$type."',image='".$Image_name."' WHERE id = '".$id."'";
$result=mysqli_query($con,$sql);
if($result)
{
	move_uploaded_file($Img_tmp_name,$Image_location.$Image_name);
	
	echo "<script>alert('product data added successfully');</script>";
}
else{
	echo"<script>alert('Catagories data added unsuccessfully');window.location.href='product_table.php';</script>";
}
}
?>