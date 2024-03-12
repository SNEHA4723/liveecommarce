
<?php include("admin_header.php"); ?>
<?php include("admin_sidebar.php"); 
?>
<?php include("../assets/php/fatch_function.php"); 
$id=$_GET['uid'];
 $res=array();
$sql="SELECT * FROM product_table WHERE Id ='".$id."'";
$qur=mysqli_query($con,$sql);
$res[]=mysqli_fetch_assoc($qur);

 ?>
<div class="content">
  <?php include('admin_nav.php'); 
  foreach($res as $val)
  {
  ?>
      
  <form action="product_update_action.php" method="post" enctype="multipart/form-data">
<div class="row p-5" id="main">
   
  <div class="col-md-12 mx-auto p-5" style="background-color: #191C24;text-align: left;">
  <div class="d-flex justify-content-between mb-2">
    <input type="hidden" name="u_id" value="<?php echo $val['Id']; ?>">
  <div class="form-group col-md-3">
    <h6 class="text-white">Offer</h6>
  <input type="text" name="product_per" placeholder="Enter_Persentage" id="per" value="<?php echo $val['Offer_Parsent']; ?>">
</div>
<div class="form-group col-md-3">
    <h6 class="text-white">Avalable Color</h6>
  <input type="text"  name="product_color" placeholder="Enter_aviable_color" id="avl_color" value="<?php echo $val['Color']; ?>">
</div>
<div class="form-group col-md-3">
    <h6 class="text-white">Product Name</h6>
  <input type="text" name="product_name" placeholder="Enter Product name" id="product_name" value="<?php echo $val['Product_Name']; ?>">
</div>
<div class="form-group col-md-3">
    <h6 class="text-white">Product Price</h6>
  <input type="text"  onblur="cal();"  name="product_real_price" placeholder="Enter product real price" id="real_price" value="<?php echo $val['Product_Price']; ?>">
</div>
  </div>
  <div class="d-flex justify-content-between mb-2">
  <div class="form-group col-md-3">
    <h6 class="text-white">After Offer Price</h6>
  <input type="text" name="offer_price" placeholder="Enter offer price" id="offer_price" value="<?php echo $val['After_Offer_Price']; ?>">
</div>
<div class="form-group col-md-3">
    <h6 class="text-white">Extra Offer</h6>
  <input type="text" name="extra_offer" placeholder="Enter if have any extra offer" id="extra_offer" value="<?php echo $val['Extra_Offer']; ?>">
</div>

<div class="form-group col-md-3">
    <h6 class="text-white">Recycled</h6>
  <input type="text" name="true_false" placeholder="if true prass 1 other wise 0" id="recyled" value="<?php echo $val['Recycled']; ?>">
</div>
  </div>
  <div class="form-group col-md-3">
    <h6 class="text-white">Brand Name</h6>
  <input type="text" name="Brand_name" placeholder="Enter Brand name" id="brand_name" value="<?php echo $val['Brand_name']; ?>">
</div>
  <div class="d-flex justify-content-between mb-2">
<div class="form-group col-md-6">
    <h6 class="text-white">Markating Type</h6>
  <input type="text" name="mr_type" placeholder="markating_devide" value="<?php echo $val['markating_type']; ?>">
</div>
<div class="form-group col-md-6">
    <h6 class="text-white">Product_Img</h6>
  <input type="file" name="product_image" id="img_file_reg" onchange="readURL(this)">
  <img src="<?php echo '../assets/image/product/'.$val['Product_Img']; ?>" width="150px" height="150px" alt="" id="image-show">
</div>
  </div>
  <div style="text-align: center;">
<h5 class="text-white mb-3">Press this Button to add product</h5>
<button type="submit" name="btn">Add Product In Database</button>
  </div>
</div>
</div>
 </form>
 <?php } ?>
 <script>
    function readURL(input)
    {
      if(input.files&&input.files[0])
      {
        var reader=new FileReader();
        reader.onload=function(e)
        {
          $('#image-show')
          .attr('src',e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
        }
      }
 </script>
  <?php include("admin_footer.php"); ?>