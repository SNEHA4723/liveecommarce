<?php 
include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['uid']; 
$call= deletecustomer($id);
if($call)
{
    echo "<script> alert('CUSTOMER DETAILS ARE DELETED');
    window.location.href='customer.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>