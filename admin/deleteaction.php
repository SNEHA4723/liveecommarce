<?php 
include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['uid']; 
$call= deleteproduct($id);
if($call)
{
    echo "<script> alert('your product is deleted');
    window.location.href='product_table.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>