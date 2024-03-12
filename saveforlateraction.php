<?php 
include('database_connection.php');
include('function.php');
$save_gate=$_GET['s_id'];
$call=addtocurtmove($save_gate);
if($call)
{
   echo"<script>alert('succussefully addto saveforlater');window.location.href='saveforlater.php';</script>";
}
else
{
   echo"<script>alert('succussefully not add');</script>";
}


?>