<?php  
include("header.php")
?>
<section class="overflow">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
<?php

$alldata=getAllSlider();
if(!empty($alldata)){
  foreach($alldata as $key=> $slider_item){

?>
    <div class="carousel-item <?php echo $key==0?'active':''; ?>">
      <img src="<?php echo $slider_item['image'];?>" class="d-block w-100 carousel_slide" alt="...">
    </div>
  
  <?php
}
}

?>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">

  <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
  <span class="visually-hidden"></span>
  </button>
</div>
</section>
<!--portion-1 box-->
<section class="mt-4">
	<div class="container-fluid">
<div class="row">
			<div class="col-md-12 catagories">
				<h1 class="text-center"><span>________</span>Top Categories to choose from<span>________</span></h1>
			</div>
		</div>
	</div>
	</section>
<section class="mt-4 overflow">
	<div class="container portion ">
	<div class="row pb-4">
		<div class="col-md-6 ">
			
				<img src="assets/img/cloth.webp" class="mt-5 pic-1">
		
		</div>
		<div class="col-md-6 ">
			<h1 class="p-5">Be Fashion Forward</h1>
			<div class="row justify-content-start">
				<div class="col-md-5 ">
					<img src="assets/img/men.webp"class="pic-2">
				</div>
				<div class="col-md-5 ">
					<img src="assets/img/kid.webp" class="pic-2">
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!--portion- sale-2-->
<section class="mt-5">
  <div class="container-fluid">
    <div class="col-md-12">
      <p class="text-center">HOTTEST DISCOUNTS OF THE SEASON</p>
      <h2 class="text-center">Shop from our handpicked selects</h2>
    </div>
    <div class="row mt-3">
      <div class="col-md-2   justify-content-center d-flex">
        <img src="assets/img/sale.webp">
      </div>
       <div class="col-md-2 justify-content-center d-flex">
        <img src="assets/img/handbag.avif">
      </div>
       <div class="col-md-2  justify-content-center d-flex">
        <img src="assets/img/jewelery.avif">
      </div>
       <div class="col-md-2   justify-content-center d-flex">
        <img src="assets/img/t shirt.avif">
      </div>
       <div class="col-md-2  justify-content-center d-flex">
        <img src="assets/img/shoe.avif">
      </div>
       <div class="col-md-2 justify-content-center d-flex">
        <img src="assets/img/top.avif">
      </div>
    </div>
  </div>
</section>
<!--portion express 3-->
<section>
  <div class="container-fluid mt-3 gif">
    <div class="row">
      <div class="col-md-4  justify-content-center d-flex">
        <img src="assets/img/giphy.gif" class="gif1">
      </div>
      <div class="col-md-8 exprexx">
        <h1 class="EXPRESS mt-5">EXPRESS</h1>
        <h4 class="our">
          Explore our edit of everything that ships within <br><span>24 Hours</span>
        </h4>
        <div class="gif5">
       <h6>Shop now</h6>
      </div>
      </div>
    </div>
  </div>
</section>
<!--portion scrool 4-->
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h5 class="text-center">MOST LOVED BRANDS</h5>
      
      <h2 class="text-center">Brands You Can't Get Enough Of</h2>
    </div>
  </div>
<div class="scroll-container">
    <ul class="image_show">
  <a href="#"><li class="image_show"><img src="assets/img/vero.avif" alt="..."class="img_slide"></li></a>

  <a href="#"> <li class="image_show"><img src="assets/img/puma.avif" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/dis.webp" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/aldo.avif" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/k.avif" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/mark.avif" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/luic.avif" alt="..."class="img_slide"></li></a>
  <a href="#"><li class="image_show"><img src="assets/img/sage.avif" alt="..."class="img_slide"></li></a>
</ul>
  </div>
</div>
</div>
<!--portion--5-->
<section class="mt-5">
 <div class="container-fluid m-0 p-0 mt-2">
   <img src="assets/img/nailpalish.gif" class="nail">
 </div>
</section>
<!--portion 6-->
<section class="back overflow">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <b> <p class="text-center mt-4 co1">Brands You Can't Miss</p></b>
       </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6 col-sm-6 col-lg-3 master_chef" >
        <div class="feature-1 box-shadow">
          <div class="feature-inner mx-auto ">
           
          </div>
           </div>
           <div class="feature_p mt-4">
             <h3 class="text-center fea">Upto 20% Off</h3>
             <p class="text-center">by 2 get 4 mins</p>
           </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3 master_chef">
        <div class="feature-2 box-shadow">
          <div class="feature-inner mx-auto">
            
          </div>
           </div>
           <div class="feature_p mt-4">
             <h3 class="text-center fea">Upto 10% Off</h3>
             <p class="text-center">by 2 get 4 mins</p>
           </div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3 master_chef">
        <div class="feature-3 box-shadow">
          <div class="feature-inner mx-auto ">
            
          </div>
           </div>
           <div class="feature_p mt-4">
             <h3 class="text-center fea">Upto 20% Off</h3>
             <p class="text-center">by 2 get 4 mins</p>
           </div>
          <div class="mb-5"></div>
      </div>
      <div class="col-md-6 col-sm-6 col-lg-3 master_chef">
        <div class="feature-4 box-shadow">
          <div class="feature-inner mx-auto">
            
          </div>
           </div>
           <div class="feature_p mt-4">
             <h3 class="text-center fea">Upto 10% Off</h3>
             <p class="text-center">by 2 get 4 mins</p>
           </div>
      </div>
    </div>
  </div>
</section>

 <!-- ====owl carousole==== -->
    <section class="slider_sec">
        <div class="container-fluid fix-cont">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider_in">
                        <h4>HOUSE OF SHOPEE FASHION</h4>
                        <h3>Made By Us, For You</h3>
                        <div id="owl-carousel" class="owl-carousel owl-theme">
<?php

$alldata=getAllOwl();
if(!empty($alldata)){
  foreach($alldata as $key=> $owl_item){

?>
      <div class="item <?php echo $key==0?'active':''; ?>">
                             
          <div class="img_wrp">
          <div class="img_text ">
<h4 class=""> <?php echo $owl_item['offer'];?></h4>
          </div>
  <img src="<?php echo $owl_item['image'];?>" alt="">
  <div><h3 class="mt-3 text-success"> <?php echo $owl_item['desc'];?></h3>
           </div>
        </div>
      </div>
        <?php
      }
    }
    ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
    <!-- // slder sec -->
<!--vedio-->
<!-- <section class="overflow mt-2">
<div class="row">
  <div class="col-md-12 video_div">
    <div class="video_text text-light">
                <h1>Find Everything for Your Every Needs</h1>
                <h2>We Are Stoked About....</h2>
              </div>
    <video autoplay loop muted>
            <source src="assets/img/vedio1.mp4" type="video/mp4"class="video">
          </video>
    </div>
</div>
 </section> -->
 <!-- janse dress--->
<section>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h5 class="text-center">MOST LOVED BRANDS</h5>
      
      <h2 class="text-center">Exclusive Collections Of Men Dress To Explore Now

</h2>
    </div>
  </div>
  <div class="scroll-container">
    <?php

$alldata= getAllscroll2();
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

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
     <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>"><img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
  </div>
  <div class="all_img_size ">
  <h5 class="text-dark text-center mt-3"><b><?php echo $scroll_item['name'];?></b></h5>
      <p class="text-center text-secondary"><?php echo $scroll_item['Description'];?></p>
      <h5 class="text-center" style="line-height: -30px;"><i class="fa fa-inr"><b><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr"></i><?php echo $scroll_item['price'];?></strike></h5>
      <p class="text-success text-center"><?php echo $scroll_item['discount'];?>%off</p>
    </div>
</li>
</ul>
<?php 
}
}
?>
</div>
</div>
</section>
<!--Woman dress-->
<section>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h5 class="text-center">MOST LOVED BRANDS</h5>
      
      <h2 class="text-center">Exclusive Collections  Of Women DressTo Explore Now

</h2>
    </div>
  </div>
  <div class="scroll-container">
    <?php

$alldata= getAllscroll();
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

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
     <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>"><img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
  </div>
  <div class="all_img_size ">
  <h5 class="text-dark text-center mt-3"><b><?php echo $scroll_item['name'];?></b></h5>
      <p class="text-center text-secondary"><?php echo $scroll_item['Description'];?></p>
      <h5 class="text-center" style="line-height: -30px;"><i class="fa fa-inr"><b><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr"></i><?php echo $scroll_item['price'];?></strike></h5>
      <p class="text-success text-center"><?php echo $scroll_item['discount'];?>%off</p>
    </div>
</li>
</ul>
<?php 
}
}
?>
</div>
</div>

</section>
<!--shoe slide-->
<section>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h5 class="text-center">MOST LOVED BRANDS</h5>
      
      <h2 class="text-center">Exclusive Collections  Of Shoe To Explore Now

</h2>
    </div>
  </div>
  <div class="scroll-container">
    <?php

$alldata= getAllscrollshoe();
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

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
     <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>"><img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
  </div>
  <div class="all_img_size ">
  <h5 class="text-dark text-center mt-3"><b><?php echo $scroll_item['name'];?></b></h5>
      <p class="text-center text-secondary"><?php echo $scroll_item['Description'];?></p>
      <h5 class="text-center" style="line-height: -30px;"><i class="fa fa-inr"><b><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr"></i><?php echo $scroll_item['price'];?></strike></h5>
      <p class="text-success text-center"><?php echo $scroll_item['discount'];?>%off</p>
    </div>
</li>
</ul>
<?php 
}
}
?>
</div>
</div>

</section>
<!--cream slide--->
<section>
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col-md-12">
      <h5 class="text-center">MOST LOVED BRANDS</h5>
      
      <h2 class="text-center">Exclusive Collections  Of Cream To Explore Now

</h2>
    </div>
  </div>
  <div class="scroll-container">
    <?php

$alldata=getAllscrollcream(); 
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

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
     <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>&type=<?php echo $scroll_item['type'];?>">
     <img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
  </div>
  <div class="all_img_size ">
  <h5 class="text-dark text-center mt-3"><b><?php echo $scroll_item['name'];?></b></h5>
      <p class="text-center text-secondary"><?php echo $scroll_item['Description'];?></p>
      <h5 class="text-center" style="line-height: -30px;"><i class="fa fa-inr"><b><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr"></i><?php echo $scroll_item['price'];?></strike></h5>
      <p class="text-success text-center"><?php echo $scroll_item['discount'];?>%off</p>
    </div>
</li>
</ul>
<?php 
}
}
?>
</div>
</div>

</section>




<!--document-->
 <section class="mt-5">
  <div class="container-fluid m-0 p-0">
    <div class="card ">
    <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h4 class="accordion-header " id="panelsStayOpen-headingOne">
      <button class="accordion-button accro text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        More About Shopee
        <i class="fa fa-sort-desc accro1" aria-hidden="true"></i>
      </button>

    </h4>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body pl-2 pr-2">
        <strong>shopee: Affordable Online Shopping at Your Fingertips</strong> There are many benefits of shopping online. You can take your time and look at different options to find exactly what you want. It's easy to compare prices online and find exactly what you are looking for. And now with Meesho, you can shop for anything you want at the lowest prices in the market. Even if you want to shop for cool gifts for your friends and family, there are many options that you can find on the Internet.</br></br>
        <strong>A Huge Selection of Products Across All Categories</strong>
        We have a vast inventory of products ranging from apparel to cosmetics to home utility and kitchen products and more. With over 50 lakh products and 650+ product categories, Meesho is sure to have everything you need. In our latest collections, you will find all the popular items at an affordable price, so you can be confident you're getting the best deal. Whether you're in the market for new clothes, accessories, or just some daily-use items for home, Meesho has what you need.<br><br>
        <strong>Latest Women's Fashion Is Right Here</strong>
        <br><br>
        <strong>Women’s Ethnic Wear Collection</strong>
        When it comes to <code>women's ethnic wear,</code> we have everything you need to find the perfect outfit for any occasion. Whether you're looking for traditional sarees and blouses, or something more modern like suits or casual Kurtis, we have it all. And with our stunning collection of accessories, footwear, and jewellery sets, it's easy to put together a complete look that will turn heads at your next wedding or festive celebration. So come and shop with us today!
        <br><br>
        <strong>
          Western Wear for Women
        </strong>
        Meesho is the best place to find fashionable and affordable western wear for women. With a constantly updating inventory of casual, formal, <code>and partywear dresses, jeans, tops, T-shirts, skirts, and more,</code> Meesho has all the latest trending outfits you're looking for--plus funky jewelry and accessories. You'll never have to worry about overspending or not being able to find something you love!
        <br><br>
       <srong> Accessories, Jewellery, and Footwear</srong>
You may have your favorite outfit picked out but accessories can really add a sense of style and individuality that make you stand out! With so many types of accessories available, it can be difficult to find the perfect piece for yourself. Fortunately, Meesho has a wide variety of jewellery sets, handbags, belts, heels, casual footwear, watches, etc. With so many options, you'll be sure to find the perfect accessories for any outfit!
<br><br>
<storng>Men's Ethnic Wear</storng>
Do you need a new Sherwani? Are you heading to a wedding and want to look your best? If you answered yes, look no further than our latest men’s ethnic wear collection! Whether you want a Kurta set, Pajamas, Sherwani set, or any other Indian attire, we have an array of budget-friendly styles that are sure to fit your needs.
<br><br>
<strong>Largest Collection of Menswear and Accessories</strong>
<br><br>
<strong>Men’s Western Wear</strong>
Through our large selection of menswear products we offer, you’re sure to find something you love. We have a vast collection of t-shirts, jeans, polos, coats, and shirts. We have sizes in stock that fit any man’s body type, and the best news of all is that they’re all affordable.<code> We make it easy to find exactly what you’re looking for, too. Our search tool lets you filter our selection down by size,</code> color, material, and more.
<br><br>
<strong>Ethnic Wear for Men</strong>
If you're on the hunt for a new sherwani or any other type of Indian attire for an upcoming wedding, our latest men's ethnic wear collection has got you covered. <code>We have a range of budget-friendly styles to choose from, so you're sure to find something that fits your needs. Whether</code> you're looking for a Sherwani set, Kurta pajamas, or an ethnic jacket, we've got it all!

<br><br>
<storng>Men Western Wear</storng>
<br>
<code>Cotton Shorts Men | Denim Jeans Men | Formal Trousers Men | Men Active Shorts | Sport Jackets Men | Printed Tshirts | Formal Shirts Men | Sleeveless Sweatshirts Men | Leather Jackets Men | Grey Blazers | Men Sweaters | Sport Tracksuits Men | Vests | Printed Briefs Men | Men Trunks | Wool Jackets Men</code>
<br><br>
<storng>woman Western Wear</storng>
<br>
<code>Cotton Shorts Men | Denim Jeans Men | Formal Trousers Men | Men Active Shorts | Sport Jackets Men | Printed Tshirts | Formal Shirts Men | Sleeveless Sweatshirts Men | Leather Jackets Men | Grey Blazers | Men Sweaters | Sport Tracksuits Men | Vests | Printed Briefs Men | Men Trunks | Wool Jackets Men</code>
<br><br>
<storng>kid Western Wear</storng>
<br>
<code>Cotton Shorts Men | Denim Jeans Men | Formal Trousers Men | Men Active Shorts | Sport Jackets Men | Printed Tshirts | Formal Shirts Men | Sleeveless Sweatshirts Men | Leather Jackets Men | Grey Blazers | Men Sweaters | Sport Tracksuits Men | Vests | Printed Briefs Men | Men Trunks | Wool Jackets Men</code>
      </div>
    </div>
  </div>
  
  </div>
</div>
  </div>
</section>
<script>
    const circle = 'fa-heart-o'
    const check = 'fa-heart'
    let icons=document.querySelectorAll(".wish_icon");
    for(let i=0;i < icons.length; i++)
    {
        icons[i].addEventListener("click",function(){
            this.classList.toggle(circle);
            this.classList.toggle(check);
        });
    }
   </script>
<?php  
include("footer.php")
?>

       

</script>