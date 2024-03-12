<?php 
include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['uid']; 
$call= deletecatagory($id);
if($call)
{
    echo "<script> alert('CATAGORY DETAILS ARE DELETED');
    window.location.href='category.php'; </script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>