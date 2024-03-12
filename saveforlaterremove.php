<?php 

include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['id']; 
$call=saveforlaterremove($id);
if($call)
{
    echo "<script>alert('your  will remove this addtocurt');
     window.location.href='saveforlater.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>