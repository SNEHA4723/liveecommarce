<?php
include('database_connection.php');
include('function.php');

$cat_id=$_POST['category'];
$data=getSubcategoriWithCatagori($cat_id);
// echo $data;

if($data){
    echo '<option value="">Select Sub Catagory</option>';
    foreach($data as $val){
        echo '<option value="'.$val['id'].'">'.$val['name'].'</option>';

    }
}
else{
    echo '<option value="">No Sub Catagory Found.</option>';
    
}

?>