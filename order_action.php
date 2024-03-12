<?php
include('database_connection.php');

global $con;

$user_id=$_POST['usr_id'];
$p_id=$_POST['prd_id'];
$prd_id=array();
$prd_id=explode(',',$p_id);
$order_date=date('Y-M-D');
$payment_type=$_POST['payment_opt'];
$size=$_POST['size'];
$prd_size=array();
$prd_size=explode(',',$size);
$prid_with_size=array();
$prid_with_size=array_combine($prd_id,$prd_size);
$delivary_id=$_POST['add'];

foreach($prid_with_size as $p_id => $size)
{
$sql="INSERT INTO order_table(u_id,p_id,p_size,date,payment_type,delivery_id) VALUES('".$user_id."','".$p_id."','".$size."','".$order_date."','".$payment_type."','".$delivary_id."')";
$query=mysqli_query($con,$sql);
}
if($query){
	foreach($prd_id as $product_val)
       {
        $sql_sec="DELETE FROM addtocurt WHERE product_id  = '".$product_val."' AND user_id  = '".$user_id."'";
        $qur=mysqli_query($con,$sql_sec);
       }
	echo "<script> alert('SUCESSFULY INSERT DELIVARY ADDRESS')window.location.href='orderconfirm.php';</script>";
}
else
{
	echo "<script> alert('SUCESSFULY  NOT INSERT DELIVARY ADDRESS')window.location.href='order.php';</script>";
}

?>