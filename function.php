<!-- =====slider==== -->
<?php
function getAllSlider(){
  global $con;
  $sql="SELECT * FROM slider1 WHERE status=1 ORDER BY id DESC";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}

// ===owl carousole===
function getAllOwl(){
  global $con;
  $sql="SELECT * FROM owl_slide WHERE status=1 ORDER BY id DESC";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}
// Slider of scroll popular for girl
function getAllscroll(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='Popular' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}
function getAllscrollwomen(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='Popular' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}
   ////slider of scroll latest for men
function getAllscroll2(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='latest' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}

////slider of scroll latest_shoe 

function getAllscrollshoe(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='Latest_shoe'";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}


////slider of scroll latest_cream

function getAllscrollcream($idk){
  global $con;
  $sql="SELECT * FROM product WHERE Type='latest_cream' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}


////slider of scroll latest_electronic

function getAllscrollelec(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='latest_elec' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}
////slider of scroll latest_bag
function getAllscrollbag(){
  global $con;
  $sql="SELECT * FROM product WHERE Type='latest_bag' ";
  $query=mysqli_query($con,$sql);
  $norow=mysqli_num_rows($query);
  if($norow){
    $alldata=array();

    while($data= mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    return $alldata;
  }
  else{ return false;}
}

// phase product view
function product_view($id)
{
  global $con;
  $sql="SELECT * FROM product WHERE id='".$id."'";
  $query=mysqli_query($con,$sql);
  $record=array();
  while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;
  }
  if($record)
  {
    return $record;
  }
  else
  {
    return false;
  }
  }
  function product_more_image($p_id)
  {
     global $con;
     $sql="SELECT * from product_more WHERE product_id='".$p_id."'";
      $query=mysqli_query($con,$sql);
  $record=array();
  while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;
  }
  if($record)
  {
    return $record;
  }
  else
  {
    return false;
  }
  }

  function wishlist_item()
  {
    global $con;
    $sql="SELECT * FROM wishlist";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow)
    {
      $alldata=array();
      while($data=mysqli_fetch_assoc( $query)){
        $alldata[]=$data;
      }
      return  $alldata;
    }
    else
    {
      return false;
    }
  }
   function addtocurt_item()
  {
    global $con;
    $sql="SELECT * FROM addtocurt";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow)
    {
      $alldata=array();
      while($data=mysqli_fetch_assoc( $query)){
        $alldata[]=$data;
      }
      return  $alldata;
    }
    else
    {
      return false;
    }
  }
    function all_data($id)
  {
    global $con;
    $sql="SELECT * FROM product WHERE id='".$id."'";
    $query=mysqli_query($con,$sql);
    $norow=mysqli_num_rows($query);
    if($norow)
    {
      $alldata=array();
      while($data=mysqli_fetch_assoc( $query)){
        $alldata[]=$data;
      }
      return  $alldata;
    }
    else
    {
      return false;
    }
  }

  function deletewishlist($id)
{
    global $con;
    $sql="DELETE FROM wishlist WHERE id='".$id."'";
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
  

    function deleteaddtocurt($id)
{
    global $con;
    $sql="DELETE FROM addtocurt WHERE id='".$id."'";
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

 
function countwish($uid)
{
   global $con;
   $sql="SELECT * FROM wishlist WHERE user_id=".$uid;
   $quary=mysqli_query($con,$sql);
   $count=mysqli_num_rows($quary);
   if($count){
       return $count;
   }
   // else
   // {
   //     return false;
   //  }
}

function countcurt($uid)
{
   global $con;
   $sql="SELECT * FROM addtocurt WHERE user_id='".$uid."' AND status=1" ;
   $quary=mysqli_query($con,$sql);
   $count=mysqli_num_rows($quary);
   if($count){
       return $count;
   }
   // else
   // {
   //     return false;
   //  }
}
// lens innerpage
function smilarproduct($type)
{
   global $con;
    $sql="SELECT * FROM product WHERE Type='".$type."'";
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
function saveforlater($uk)
{
 global $con;
    $sql="UPDATE addtocurt SET status=0 WHERE id='".$uk."'";
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


  function saveforlaterremove($id)
{
    global $con;
    $sql="DELETE FROM addtocurt WHERE id='".$id."'";
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
function saveforlatermove($uk)
{
 global $con;
    $sql="UPDATE addtocurt SET status=1 WHERE id='".$uk."'AND status=0";
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

function addtocurtmove($id)
{
   global $con;
    $sql="UPDATE addtocurt SET status=0 WHERE id='".$id."'AND status=1";
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


function allproductfilter($id){
  global $con;
    $record=array();
    $sql="SELECT * FROM sub_categorie WHERE c_id='".$id."'";
    $query=mysqli_query($con,$sql);
    while($rec=mysqli_fetch_array($query)){
        $record[]=$rec;
    }
    if($record>0){
        return $record;
    }
    else{
        return false;
}
}
function displayproductWithFitter($orderby){
  global $con;
    $record=array();
    $sql="SELECT * FROM product WHERE Type='Popular' ORDER BY  dis_price ".$orderby;
    $query=mysqli_query($con,$sql);
    while($rec=mysqli_fetch_array($query)){
        $record[]=$rec;
    }
    if($record>0){
        return $record;
    }
    else{
        return false;
    }
}
function displayproductWithFittermen($orderby){
  global $con;
    $record=array();
    $sql="SELECT * FROM product WHERE Type='Latest' ORDER BY  dis_price ".$orderby;
    $query=mysqli_query($con,$sql);
    while($rec=mysqli_fetch_array($query)){
        $record[]=$rec;
    }
    if($record>0){
        return $record;
    }
    else{
        return false;
    }
}
function ordershows($id)
{
  global $con;
  $sql="SELECT * FROM order_table WHERE u_id = '".$id."'";
  $query=mysqli_query($con,$sql);
  $alldata=array();
    while($data=mysqli_fetch_assoc($query)){
      $alldata[]=$data;
    }
    if($query)
    {
    return $alldata;
  }
  else{
    return false;
  }

}



function deleteorder($id)
{
    global $con;
    $sql="DELETE FROM order_table WHERE id='".$id."'";
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

function alldata($id){
  global $con;
  $sql="SELECT * FROM product WHERE id='".$id."'";
  $result=mysqli_query($con,$sql);
  if($result){
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

?>


