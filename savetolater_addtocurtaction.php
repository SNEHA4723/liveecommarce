<?php 
include('database_connection.php');
include('function.php');
$save_gate=$_GET['move'];
$call=saveforlatermove($save_gate);
if($call)
{
   echo"<script>alert('succussefully addto saveforlater');window.location.href='saveforlater.php';</script>";
}
else
{
   echo"<script>alert('succussefully not add');</script>";
}


?>