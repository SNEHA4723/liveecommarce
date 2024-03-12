<?php include('database_connection.php');
include('function.php');
session_start(); ?>
<?php 
$order=$_POST['ordrer'];
if($order=='low to high')
{
    $order='ASC';
    $alldata=displayproductWithFitter($order);
}
else if($order=='high to low')
{
    $order='DESC';
    $alldata=displayproductWithFitter($order);
}
else
{
    $alldata=getAllscrollwomen();
}
?>

<?php
if(!empty($alldata)){
  foreach($alldata as $key=> $scroll_item){

?>
      <div class="col-md-3 inner1">

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
       <div class="inner2 mt-2">
         <a href="innerpage.php?uid=<?php echo $scroll_item['id']; ?>"><img src="<?php echo 'assets/product/'.$scroll_item['image'];?>" class="img_main img_slide boy_img_size"></a>
       </div>
       <div class="inner3 ">

         <h3 class=""><?php echo $scroll_item['name'];?></h3><br>
         <p class="text-success"style="font-size: 11px;"><?php echo $scroll_item['Description'];?></p>
          <p><i class="fa fa-inr text-danger"><b class="text-danger"><?php echo $scroll_item['dis_price'];?></b></i>&nbsp; &nbsp;<strike><i class="fa fa-inr "></i><?php echo $scroll_item['price'];?></strike>&nbsp; &nbsp;<?php echo $scroll_item['discount'];?>%off</p>
          <span><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i><i class="fa fa-star-half-o text-danger" aria-hidden="true"></i></span>
          <div class="inner3">
            <div class="inner4 mt-4">
         
             <a href="bag.html"> <button type="button" class="btn btn w-75 text-light">ADD TO CURT</button></a>
            </div>
          </div>
       </div>
 

      </div>
            <?php 
}
}
?>