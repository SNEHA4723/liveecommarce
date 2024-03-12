<?php
function getAllCatagory(){
	global $con;
	$sql="SELECT * FROM catagory";
	$result=mysqli_query($con,$sql);
	$row=mysqli_num_rows($result);
	if($row){
		$alldata=array();
		while($data=mysqli_fetch_assoc($result)){
			$alldata[]=$data;
		}
		return $alldata;
	}
    else{
        return false;
       }
}


function getSubcategoriWithCatagori($id)
{
    global $con;
    $record = array();
    $sql="SELECT * FROM subcatagory WHERE c_id='".$id."'";
    $query_one=mysqli_query($con,$sql);
    $rows=mysqli_num_rows($query_one);
    while($rec = mysqli_fetch_array($query_one))
    {
        $record[]=$rec;
    }
    if($record>0)
    {
        return $record;
    }
    else{
        return false;
    } 
}

function updateRecord($id,$discount,$price,$discount_price,$name,$description,$type){
  global $con;
    $sql="UPDATE product SET price='".$price."',discount='".$discount."',dis_price='".$discount_price."',name='".$name."',Description='".$description."',Type='".$type."' WHERE id=".$id;
    $query=mysqli_query($con,$sql);
   if($query)
   {
    return  $query;
   }
   else
   {
    return false;
   }
}
 
function alldata($id)
{
    global $con;
    $sql="SELECT * FROM product WHERE id=".$id;
    $query=mysqli_query($con,$sql);
    $result=array();
    while($rec=mysqli_fetch_assoc($query))
    {
        $result[]=$rec;
    }
    if($result)
    {
       return  $result;  
    }
    else
    {
        return false;
    }

}
// deletefunction


function deleteproduct($id)
{
    global $con;
    $sql="DELETE FROM product WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deletecustomer($id)
{
    global $con;
    $sql="DELETE FROM customer WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deletecatagory($id)
{
    global $con;
    $sql="DELETE FROM catagory WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deletesubcatagory($id)
{
    global $con;
    $sql="DELETE FROM subcatagory WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deleteorder($id)
{
    global $con;
    $sql="DELETE FROM order_table WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deleteslider($id)
{
    global $con;
    $sql="DELETE FROM slider1 WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deleteowlslider($id)
{
    global $con;
    $sql="DELETE FROM owl_slide WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}
function deleteaddress($id)
{
    global $con;
    $sql="DELETE FROM delivery_address WHERE Id='".$id."'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
        return $query;
    }
    else
    {
      return false;
}
}

?>
