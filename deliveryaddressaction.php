<?php
include('database_connection.php');
if(isset($_POST['addre']))
{
global $con;
$user_id=$_POST['user_id'];
$id=$_POST['prd_id'];
$size=$_POST['size'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$build=$_POST['build'];
$land=$_POST['land'];
$area=$_POST['area'];
$state=$_POST['state'];
$option=$_POST['option'];
$rad=$_POST['rad'];
$sql="INSERT INTO delivery_address(name,user_id,phone,build,land,area,state,optionk,rad)VALUES('$name','$user_id','$phone','$build','$land','$area','$state','$option','$rad')";

$result=mysqli_query($con,$sql);
if($result)
{
echo "<script>alert('A
ddress saved');
window.location.href='oredersummary.php?p_id=$id&size=$size';</script>";
}
else
{
echo "<script>alert('successfully  not added delivery address');</script>";

}
}
?>