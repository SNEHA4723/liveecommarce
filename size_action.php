<?php
include('database_connection.php');
if(isset($_POST['submit']))
{
	$size=$_POST['size'];
	$p_id=$_POST['p_id'];
	$sql="INSERT INTO size(size,'p_id') VALUES('".$size."','".$p_id."')";
	$query=mysqli_query($con,$sql);
	if($query)
	{
		echo "<script>window.location.href='addtocurt.php?id=$p_id'</script>";
	}
	else
	{
		echo "<scrpit>alert('not');</script>";
	}
}