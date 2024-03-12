<?php
include('header.php');
?>
<?php
$emptycheck=countwish($_SESSION['userid']);
if($emptycheck==0)
{
  ?>
    <div class="row p-0 m-0">
      <div class="col-md-3 mx-auto">

    <img src="assets/img/emptyWishlist.avif"style="width: 400px;height: 400px;">
    <h3 class="text-center ml-5">Your wishlist is empty!</h3>
   <b> <p class="text-center ml-5">Save your favourite items so you don’t lose sight of them</p></b>
       <a href="home.php"><button type="button" class="btn btn-dark inner-button2 w-75 " name="submit"style="position: relative;left: 70px;">&nbsp;GO TO THE HOME</button></a>
        
  </div>
  </div>
    <?php
}
else
{
?>
<?php

if(isset($_SESSION['email']))
{
	$user_id=$_SESSION['userid'];
	global $con;
	$record=array();
	$result="SELECT * FROM wishlist WHERE $user_id='".$user_id."'";
	$query=mysqli_query($con,$result);
	while($rec=mysqli_fetch_assoc($query))
	{
		$record[]=$rec;

	}
}
?>

<div class="container mt-5">
<div class="row m-0 p-0">
  <?php
    foreach($record as $data){
      $id=$data['product_id'];
      $card_id=$data['id'];
    
    $record1=all_data($id);
    foreach($record1 as $wishlist)
      {
          ?>
      <div class="col-md-4 wish_card">
        <div class=" wishlist_cover_img">
           <a href="wishlist_remove.php?id=<?php echo $card_id;?>"> <i class="fa fa-times text-dark" style="position: relative;float: right;top: 25px;right: 10px;font-size: 20px;"></i></a>
  <img src="<?php  echo 'assets/product/'.$wishlist['image'];?>" class="wishlist_cover_img">
       </div>
       <div class="wish_item mt-4 ml-3">
       	<h5><b><?php echo $wishlist['name'];?></b></h5>
      
       	<p><b>SIZE:<?php echo $wishlist['size'];?></b> </p>
       	<h5 class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i><strike><?php echo $wishlist['price'];?></strike></h5>
        <h5 class=""><i class="fa fa-inr" aria-hidden="true"></i><?php echo $wishlist['dis_price'];?></h5>
        <h5 class="text-success">Discount:<?php echo $wishlist['discount'];?>%off</h5>


       	<h4 class="text-danger"><b><?php  echo $wishlist['Description'];?></b></h4>
       </div>
       <div class="wish_button">
       <a href="innerpage.php?uid=<?php echo $data['id'] ?>">	<button class="btn btn bg-success text-light p-2 mt-3">BUY NOW</button>
       	<a href="wishlist_remove.php?id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
       </div>
       </div>
         <?php 
}
}
?>
      </div>

    </div>
    <?php
  }
  ?>
<?php
include('footer.php');
?>

