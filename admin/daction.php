<?php 
include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['uid']; 
$call= deleteaddress($id);
if($call)
{
    echo "<script> alert('CUSTOMER ADDRESS IS DELETED');
    window.location.href='delivary.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>