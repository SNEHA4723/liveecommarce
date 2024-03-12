<?php 
include('database_connection.php');
if($_POST['submit'])
{
	$name=$_POST['name'];
	$email=$_POST['email'];
    $phone=$_POST['phone'];
	$password=$_POST['password'];
   if(isset($_FILES['image'])){
$folder = "image/";
$filename = $_FILES['image']['name'];
$tempfile = $_FILES['image']['tmp_name'];
$filesize = $_FILES['image']['size'];
$filetype = $_FILES['image']['type'];
$error = array();
$fileexat = pathinfo($filename,PATHINFO_EXTENSION);
$extension = array("jpg","png","bmp","jpeg");
if(in_array($fileexat,$extension)==false)
{
    $error[]="Invalid Extension";
}
if($filesize>=1024*1024)
{
    $error[]="File Size greater then 2 MB";
}
if(empty($error)==true)
{
    move_uploaded_file($tempfile,$folder.$filename);
    //echo "Success";
}
else{
    print_r($error);
}

}
 global $con;
$sql="INSERT INTO customer(`name`,`email`,`phone`,`password`,`image`)VALUES('$name','$email','$phone','$password','$filename')";
$result=mysqli_query($con,$sql);
if($result)
{
	echo"<script>alert('ACCOUNT CREATE SUCCESSFULLY');window.location.href='home.php';</script>";
}
else
{
	echo"<script>alert('ACOUNT CREATE SUCCESSFULLY');window.location.href='home.php';</script>";
}
}

 ?>
