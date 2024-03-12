<?php
include('header.php');
if(isset($_SESSION['email']))
{
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM addtocurt WHERE $user_id='".$user_id."'";
  $query=mysqli_query($con,$result);
  while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;

  }
}
?>
<!--add to bag-->
<section>
	<div class="container mx-auto">
		<div class="main-round mx-auto mt-3">
			<div class="round-1 mt-5 bg-danger"><h5 class="text-center text-light mt-2">1
			</h5><h5 class="mt-4 ml-2"><b>bag<b></h5>
			
			</div>
			
			

			<div class="line mb-5 "></div>

			<div class="round-1 mt-5 "><h5 class="text-center   mt-2">3</h5><h5 class="mt-4 mr-2"><b>payment</b></h5></div>
		

		</div>
	</div>
</section>
<!--shopping bag-->
<section >
	 <div class="container-fluid mt-5">
	<div class="row">
    <?php
    foreach($record as $data){
      $id=$data['product_id'];
      $card_id=$data['id'];
    
    $record1=all_data($id);
    foreach($record1 as $addtocurt)
      {
          ?>
	<div class="col-md-8 border_shop">
		<div class="shopping"><h3>Shopping bag</h3>
          <p class="text-right"><i class="fa fa-plus" aria-hidden="true"></i>Add from whislist</p>
		</div>
    <div class="container">
		<div class="shopping-2">
      <div class="row">
      			<div class="shopping_img">
              <div class="col-md-4">
				<img src="<?php  echo 'assets/product/'.$addtocurt['image'];?>" class="wishlist_cover_img w-25 h-25">
      </div>
		
			<div>
        <div class="col-md-8">
				<h3>Shoppe</h3>
	<p class="text-danger"><b><?php echo $addtocurt['Description'];?></b></p>
				<div class="shopping_Button">
					<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-secondary rounded-0 ">SIZE</button>     
   <!--  <select name="size" id="fashion-size" class="form-control bg-secondary text-light border-0 rounded-0 shadow-0">
    	<option >XXl</option>
    	<option>XL</option>
    	<option>M</option>
    	<option>S</option>
    	
    </select>  -->
</div>
<div class="btn-group  " role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn rounded-0 text-light"id="fashion-size">QTY</button>  
    <select name="size" id="fashion-size" class="form-control  text-light border-0 rounded-0 shadow-0">
    	<option>1</option>
    	<option>2</option>
    	<option>3</option>
    	<option>4</option>
    	
    </select> 
</div>
</div>
</div>
<h5 class="text-success"><i class="fa fa-inr" aria-hidden="true"></i><?php echo $addtocurt['price'];?></h5>
	<h5 class="mt-2"><i class="fa fa-inr"></i><strike><b><?php echo $addtocurt['dis_price'];?></b></strike></h5>
		<span class="text-success"><?php echo $addtocurt['discount'];?>off</span>
	        <button class="btn btn bg-success text-light p-2 mt-3">Order Now</button>
        <a href="addtocurtremove.php?id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
          <div class="eye">
         
        </div>
			
	

</div>
</div>
</div>
</div>
</div>
  <?php 
}
}
?>

<div class="col-md-4">
	<div class="payament p-2">
		<h4><b>Bag Summary</b></h4>
		<div class="total">
			<div class="total1"><p>Bag total</p></div>
			<div class="total2"><p><i class="fa fa-inr"><b>1200</b></i></p></div>
			<div class="total1"><p>Bag discount</p></div>
			<div class="total2"><p>-<i class="fa fa-inr"><b>1000</b></i></p></div>
			<div class="total1"><p>Bag total</p></div>
			<div class="total2"><p><i class="fa fa-inr"><b>1200</b></i></p></div>
			<div class="total1"><p>Employee</p></div>
			<div class="total2"><p>0</p></div>
			<div class="total1"><p>Delivary</p></div>
			<div class="total2"><p class="text-danger">FREE</p></div>

		</div>
		<div class="total1"><p>TOTAL AMOUNT</p></div>
		<div class="total2"><p><i class="fa fa-inr"><b>2200</b></i></p></div>
		 <input type="submit" name="" value="CONTINUE" class="text-center text-light free mt-4">
			

	</div>
</div>  
</div>
</div>
</section>
<!--text-->
<section>
  <div class="container mt-5">
    <div class="row text-center">
      <div class="col-md-4  p-3 bag_text ">
        <h5>
          <span><i class="fa fa-lock" aria-hidden="true"></i></span>
          <span class="font-weight-bold">Secure Shopping</span>
        </h5>
        <p>No worries - all transactions <br>are safe and secure</p>
      </div>
      <div class="col-md-4  p-3 bag_text ">
        <h5>
          <span><i class="fa fa-bandcamp" aria-hidden="true"></i></span>
          <span class="font-weight-bold">Not Quite Right?</span>
        </h5>
        <p>Return online for up to 15 days</p>
      </div>
      <div class="col-md-4  p-3 bag_text ">
        <h5>
          <span><i class="fa fa-phone" aria-hidden="true"></i></span>
          <span class="font-weight-bold">We’re here to help</span>
        </h5>
        <p>Get in touch with us on</p>
      </div>
    </div>
  </div>
</section>
<!--footer-->
<section class="mt-5 overflow">
  <div class="container-fluid px-5 py-1 sec">
    <div class="container con_bo">
      <div class="row mt-3">
        <div class="col-md-3"data-aos="zoom-in">
          <h3 class="mb-2 text_footer company section-title ">Get to known as</h3>
          <p><i class="fa fa-arrow-circle-right ic" aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">About us</a></p>
          <p><i class="fa fa-arrow-circle-right ic" aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">Careers</a></p>
          <p><i class="fa fa-arrow-circle-right ic" aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">Press Releases</a></p>
          <p><i class="fa fa-arrow-circle-right ic" aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">Privacy policy</a></p>
          
          <div class="mb-2"></div>
        </div>
        <div class="col-md-3"data-aos="zoom-in">
          <h3 class="mb-2  text_footer company section-title ">Contact</h3>
          <p class="text-light"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<a href="#"class="text-light">123 Street, New York, USA</a></p>
          <p class="text-light"><i class="fa fa-phone " aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">+012 345 67890</a></p>
          <p class="text-light"><i class="fa fa-envelope " aria-hidden="true"></i>&nbsp;<a href="#" class="text-light">mail@domain.com</a></p>
          <div class="d-flex">
            <a href="#" class="btn btn-outline-light  btn-social"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-outline-light btn-social"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-outline-light btn-social"><i class="fa fa-youtube-play"></i></a>
            <a href="https://api.whatsappp.com/send?phone=9800325658" class="btn btn-outline-light btn-social"><i class="fa fa-whatsapp"></i></a>
          </div>
            <div class="mb-2"></div>
        </div>

        <div class="col-md-3 text_footer footer-border"data-aos="zoom-in">
          <h3 class="mb-2  text_footer company mb-2 section-title">  
Make Money with Us
          
          </h3>
          <h5 class="text-light fw-normal">Sell on Amazon</h5>
          <p class="text-light">
          Sell under Amazon Accelerator<br>
Protect and Build Your Brand<br>
Amazon Global Selling<br>
Become an Affiliate<br>
Fulfilment by Amazon<br>
Advertise Your Products<br>
Amazon Pay on Merchants

        </div>
        <div class="col-md-3"data-aos="zoom-in">
          <h3 class="text_footer mb-2 section-title ">Newsletter</h3>
          <p class="text-light">
            Dolor amet sit justo amet elitr clita ipsum elitr est.
          </p>
          <div class="input0">
            <input type="text" name="" class="in rounded" placeholder="Enter Email">
            <button type="button" class="btn btn-dark bu text-light">SIGNUP</button>
            
          </div>
        </div>
      </div>
      
    </div>
    <div class="row border border-dark mt-4">
    </div>
    <div class="mb-1"></div>
      <div class="row mt-2">
      <div class="col-md-12 text-center text_footer mt-2">
        <H5>Copyright © Shopee Site , All Rights Reserved.</H5>
      </div>
      <div class="col-md-12 text-center text_footer mt-2">
        <h5>Design By SNEHA DAS</h5>
      </div>
    </div>
  </div>
  
</section>



























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<?php
include('footer.php');
?>
