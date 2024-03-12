<?php  
include("header.php");
$id=$_GET['uid'];
$call=product_view($id);
$cal=product_more_image($id);

?>
<!--image and text-->

<section>
	<div class="container mt-3">
		<div class="row">
			<div class="col-md-6 ">
				<div class="img-magnifier-container ">
            <div class="heart-container" title="Like">
            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
            <div class="svg-container">
                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                </svg>
                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                    </path>
                </svg>
                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="10,10 20,20"></polygon>
                    <polygon points="10,50 20,50"></polygon>
                    <polygon points="20,80 30,70"></polygon>
                    <polygon points="90,10 80,20"></polygon>
                    <polygon points="90,50 80,50"></polygon>
                    <polygon points="80,80 70,70"></polygon>
                </svg>
            </div>
        </div>
       <?php foreach($call as $val)
       $type=$val['Type'];
          { ?>   
  <img src="<?php echo 'assets/img/'.$val['image']; ?>"width="100%",hight="100%"class="big_img"style="cursor: pointer;">
<?php } ?>
</div>

<div class="inner-img2 mt-3">
	<!-- <img src="assets/img/innerimg2.webp" class="ml-4">
	<img src="assets/img/innerimg3.webp">
	<img src="assets/img/innerimg4.webp">
	<img src="assets/img/innerimg5.webp"> -->
   <?php foreach($cal as $more_val)
          { ?>   
  <img src="<?php echo $more_val['more_image']; ?>"width="100%",hight="100%"class="border border-dark ml-4 small_img"style="cursor: pointer;">
<?php } ?>

</div>
</div>


<div class="col-md-6">
  <?php foreach ($call as $val) {
  ?>
 
	<div class="text-inner">

		<h5 class="text-primary mt-5"><?php echo $val['name'];?></h5>
		<p class="text-inner1">W</p>
     <div id="myresult" class="img-zoom-result rounded"></div>
		<p class="mt-3"><?php echo $val['Description'];?></p>

		<div class="rating">
			<span>
			<button class="bg-danger rounded">3.6 &nbsp;<i class="fa fa-star" aria-hidden="true"></i></button>
			
				&nbsp; &nbsp;Based on 12 rating</span>
			</div>
			<div class="rating1 mt-3">
				<h5><i class="fa fa-inr">&nbsp;<span class="rating_text"><?php echo $val['dis_price'];?></span><span class="text-success"> &nbsp;&nbsp;<?php echo $val['discount'];?>% Off</span></i></h5>
				<h5><span class="rating_text2">MRP&nbsp;&nbsp;<i class="fa fa-inr"></i><strike><?php echo $val['price'];?></strike>&nbsp;
				&nbsp;Inclusive of all taxes</span></h5>
			</div>
			<div class="rating3 mt-1">
				<h4 class=" rating_text3">Select size</h4>
      
          
				<h4 class="rating_text4 text-danger">Size Guide</h4>
        <div style="float: left;">
          <form method="get" action="addtocurtaction.php">
        <input type="hidden" name="p_id" value="<?php echo $val['id']?>">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid']?>">
				<input type="radio" name="size"value="s" required>S
        <input type="radio" name="size"value="m" required>M
        <input type="radio" name="size"value="xl" required>XL
        <input type="radio" name="size"value="xl" required>XL
        <input type="radio" name="size"value="xxl" required>XXL
            
      
       </div>
       <br><br>
        <div style="margin-right: 30px; border: 2px solid white;">
          <form method="get" action="addtocurtaction.php">
        <input type="hidden" name="p_id" value="<?php echo $val['id']?>">
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['userid']?>">
        <input type="radio" name="size"value="s" required>4
        <input type="radio" name="size"value="m" required>5
        <input type="radio" name="size"value="xl" required>6
        <input type="radio" name="size"value="xl" required>7
        <input type="radio" name="size"value="xxl" required>8
            
      
       </div>
     

				
			</div>
			<div class="rating5 mb-5 pb-3">
         

          

			<a href="wishlist_action.php?p_id=<?php echo $val['id'];?>&user_id=<?php echo $_SESSION['userid'];?>"class="text-light"><button type="button" class="btn btn-outline-light  inner-button bg-danger text-light"><i class="fa fa-gratipay text-light" aria-hidden="true"></i>&nbsp;Add to Whislist</button></a>	

          <a href="#"><button type="submit" class="btn btn-dark inner-button2" name="submit"><i class="fa fa-shopping-cart"></i>&nbsp;Add to Cart</button></a>	
               
    


        </form>
				</div>
				<div class="rating-7 pb-1">
				<span class="text-secondary">OFFERS.1 available</span>
				<div class="rating6 mt-1 p-2
				">
					<p class="mt-2"><i class="fa fa-clipboard" aria-hidden="true"></i>Buy worth 15000/- & get Nuticia<br>see details...</p>
				</div>
			</div>
	
     <div class="w ">
     	
     		<img src="assets/img/logo1.gif"class="mt-1">
     		<p class="mt-2">
     			Born in 2001,W is a part of TCNS CLOTHING CO. LTD & a dream of two brothers Mr. OS Pasricha & Mr. AS Pasricha. W offers 'Indian contemporary' wear and stays a step ahead of the fashion curve and pioneer in introducing the concept of Mix n Match.</p>
     		
     	
     </div>
   <div class="progress1">
    <h5 class="text-danger">Ratings</h5>
     <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
</div>
<div class="progress mt-2">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">40%</div>
</div>
<div class="progress mt-2">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">60%</div>
</div>
<div class="progress mt-2">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>
   </div>

	</div>
<?php }?>
	</div>
	</div>
	
</div>


</section>
<section>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-left">Similar products</h3>
       <div class="scroll-container">
    <?php

$alldata= smilarproduct($type);
if(!empty($alldata)){
  foreach($alldata as $key=> $showdata){

?>
<ul class="all_img_show">
    <li class="image_show">
  <div class="img_main">
    <div class="heart-container" title="Like">
            <input type="checkbox" class="checkbox" id="Give-It-An-Id">
            <div class="svg-container">
                <svg viewBox="0 0 24 24" class="svg-outline" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Zm-3.585,18.4a2.973,2.973,0,0,1-3.83,0C4.947,16.006,2,11.87,2,8.967a4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,11,8.967a1,1,0,0,0,2,0,4.8,4.8,0,0,1,4.5-5.05A4.8,4.8,0,0,1,22,8.967C22,11.87,19.053,16.006,13.915,20.313Z">
                    </path>
                </svg>
                <svg viewBox="0 0 24 24" class="svg-filled" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.5,1.917a6.4,6.4,0,0,0-5.5,3.3,6.4,6.4,0,0,0-5.5-3.3A6.8,6.8,0,0,0,0,8.967c0,4.547,4.786,9.513,8.8,12.88a4.974,4.974,0,0,0,6.4,0C19.214,18.48,24,13.514,24,8.967A6.8,6.8,0,0,0,17.5,1.917Z">
                    </path>
                </svg>
                <svg class="svg-celebrate" width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                    <polygon points="10,10 20,20"></polygon>
                    <polygon points="10,50 20,50"></polygon>
                    <polygon points="20,80 30,70"></polygon>
                    <polygon points="90,10 80,20"></polygon>
                    <polygon points="90,50 80,50"></polygon>
                    <polygon points="80,80 70,70"></polygon>
                </svg>
            </div>
        </div>
     <a href="innerpage.php?uid=<?php echo $showdata['id']; ?>"><img src="<?php echo 'assets/product/'.$showdata['image'];?>" class="img_main img_slide boy_img_size"></a>
  </div>
  <div class="all_img_size ">
  <h5 class="text-dark text-center mt-3"><b><?php echo $showdata['name'];?></b></h5>
      <p class="text-center text-secondary"><?php echo $showdata['Description'];?></p>
      <h5 class="text-center" style="line-height: -30px;"><i class="fa fa-inr"><b><?php echo $showdata['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr"></i><?php echo $showdata['price'];?></strike></h5>
      <p class="text-success text-center"><?php echo $showdata['discount'];?>%off</p>
    </div>
</li>
</ul>
<?php 
}
}
?>
</div>
   
    </div>
  </div>

  </div>
</div>
</section>

<script type="text/javascript" src="assets/js/zoomsl.min.js" ></script>
<script type="text/javascript">
 $(document).ready(function(){
    $(".small_img").click(function(){
    $(".big_img").attr('src',$(this).attr('src'));
    });
  });
</script>
<script>
  $(document).ready(function(){
    $('.big_img').imagezoomsl({
      zoomrange: [4,4]
    });
  });
</script>


<script type="text/javascript">
  // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php  
include("footer.php")
?>