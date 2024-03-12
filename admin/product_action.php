
<?php
include ('database_connection.php');
if(isset($_POST['submit']))
{

$Catagory=$_POST['category'];
$Sub_Category=$_POST['subcategory'];
$Name=$_POST['name'];
$Actual_Price=$_POST['Actual_Price'];
$Discount=$_POST['Discount'];
$Discount_Price=$_POST['Discount_Price'];
$Size=$_POST['check'];
$chk=""; 
$type=$_POST['type'];
$Description=$_POST['description'];
$Image_name=$_FILES['image']['name'];
$Img_tmp_name=$_FILES['image']['tmp_name'];
$Image_location='../assets/product/'.$Image_name;
$product_subimage=$_FILES['product_sub_image'];
 global $con;
foreach($Size as $chk1)  
   {  
      $chk .= $chk1.",";  
   } 
$sql="INSERT INTO product (catagory,sub_catagory,size,Type,Description,	name,dis_price,discount,price,image) VALUES ('$Catagory','$Sub_Category',' $chk','$type','$Description','$Name','$Discount_Price','$Discount','$Actual_Price','$Image_name')";
$result=mysqli_query($con,$sql);
if($result)
	

	
{
	move_uploaded_file($Img_tmp_name,$Image_location);
	$product_id=mysqli_insert_id($con);

	
	foreach ($product_subimage['name'] as $key => $value) {
		$img_more_name=$product_subimage['name'][$key];
		$img_more_tmp_name=$product_subimage['tmp_name'][$key];
		$image_more_location='assets/more_image/'.time().$img_more_name;
		$sql1="INSERT INTO product_more(product_id,more_image) VALUES('".$product_id."','".$image_more_location."')";
		$result1=mysqli_query($con,$sql1);
		// echo $sql1;
		if($result1){
			move_uploaded_file($img_more_tmp_name,'../'.$image_more_location);
		}
	}
	// exit();
	echo "<script>alert('product data added successfully');window.location.href='productform.php';</script>";
}
else{
	echo"<script>alert('product data added unsuccessfully');window.location.href='productform.php';</script>";
}
}

?>