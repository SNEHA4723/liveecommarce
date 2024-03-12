<?php
include('header.php');

?>
<?php

global $con;
$sql="SELECT * FROM addtocurt WHERE user_id='".$_SESSION['userid']."' AND status=0";
$result=mysqli_query($con,$sql);
$record=array();
while($data=mysqli_fetch_assoc($result))
{
  $record[]=$data;
}

?>
<section>
<div class="container mt-5">
<div class="row m-0 p-0">
 <?php
    foreach($record as $save)
      {
        $curt=$save['id'];
        $p=$save['product_id'];
         $save_later=all_data($p);
         foreach($save_later as $sake)
         {
          ?>
      <div class="col-md-4 wish_card">
        <div class=" wishlist_cover_img">
          <a href="saveforlaterremove.php?id=<?php echo  $save_later;?>"> <i class="fa fa-times text-dark" style="position: relative;float: right;top: 25px;right: 10px;font-size: 20px;"></i></a>
  <img src="<?php  echo 'assets/product/'.$sake['image'];?>" class="wishlist_cover_img">
       </div>
       <div class="wish_item mt-4 ml-3">
       	<h5><b> MINIMAL WOMAN COLLECTION </b></h5>
       	<h5 class="text-warning">Light Grey Top For Woman</h5>
       	<p><b>SIZE:<?php echo $save['size'];?></b> </p>
       	<p><b>Color:</b> Pink</p>
       	<h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $sake
        ['price'];?></h5>
       	<p class="text-danger"><b><?php $sake['Description'];?></b></p>
       </div>
       <div class="wish_button">
       	<button class="btn btn bg-success text-light p-2 mt-3">Order Now</button>
       	<a href="wishlist_remove.php?id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
        <a href="savetolater_addtocurtaction.php?move=<?php echo $curt;?>"><button class="btn bg-danger text-light p-2 mt-3">Move to addtocurt</button></a>
       </div>
       </div>

     
    <?php
  
  }
}
  ?>
   </div>

    </div>
  </section>
<?php
include('footer.php');
?>

