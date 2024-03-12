
<?php 
include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['uid']; 
$call= deleteslider($id);
if($call)
{
    echo "<script> alert('SLIDER DETAILS ARE DELETED');
    window.location.href='sub_catagory.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>