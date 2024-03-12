<?php 

include('function.php');
?>
<?php 
include('database_connection.php');
?>
<?php
$id=$_GET['id']; 
$call=deleteaddtocurt($id);
if($call)
{
    echo "<script>alert('your  will remove this addtocurt');
     window.location.href='home.php';</script>";
}
else
{
    echo "<script> alert('Somthing wrong try againe');</script>";
}
?>