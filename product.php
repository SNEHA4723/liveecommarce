<?php  
include("header.php")

?>
  <!--carousole-->
<section class="overflow">
  <div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/iners.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/iners2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/iners3.webp" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
  </div>
</section>
<!--25-->
<section class="overflow">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <img src="assets/img/25.webp">
      </div>
    </div>
  </div>
</section>
<!--collection-->
<section>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-md-3 inner1">
            <?php

$alldata= getAllscrollwomen();
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

?>
         
       <div class="inner2 mt-2">
         <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>"><img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
       </div>
       <div class="inner3 ">

         <h3 class=""><?php echo $scroll_item['name'];?></h3>
         <p class="text-success"><?php echo $scroll_item['Description'];?><?php echo $scroll_item['Description'];?></p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger"><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i><?php echo $scroll_item['price'];?></strike>&nbsp; &nbsp;<?php echo $scroll_item['discount'];?></p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
             <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
       <?php 
}
}
?>

      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i2.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i3.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i4.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
        </div>
   <div class="row mt-5">
      <div class="col-md-3 inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i5.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
              <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i6.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i7.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
              <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i3.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
        </div>
   <div class="row mt-5">
      <div class="col-md-3 inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i9.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/1i.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o text-danger "></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i3.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
      <div class="col-md-3  inner1">
         
       <div class="inner2 mt-2">
          <img src="assets/img/i2.webp">
       </div>
       <div class="inner3 ">

         <h3 class="">Anvi Be Yourself</h3>
         <p class="text-success">Woman black self designe top</p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger">299</b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i>1,799</strike>&nbsp; &nbsp;83% off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
              <i class="fa fa-heart-o  text-danger"></i>
               <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
      </div>
        </div>
   
  </div>
</section>
<?php  
include("footer.php")

?>