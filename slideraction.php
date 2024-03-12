<?php
include('database_connection.php');
$img_name=$_FILES['image']['name'];
$img_tmp_name=$_FILES['image']['tmp_name'];
$image_locatison='image/'.time().$img_name;
$sql="INSERT INTO slider(`image`)VALUES('$image_location')";
$result=mysqli_query($con,$sql);
$con;
if($result)
{
	move_uploaded_file($img_tmp_name,$image_location);
	echo"<script>alert('Image add successfully.');window.location.href='sliderinput.php'</script>";

}
else
{
	echo"<script>alert('Image add not successfully.');</script>";
}
?>

