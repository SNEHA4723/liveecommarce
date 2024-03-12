<?php
include('header.php');
$id=$_GET['uid'];
?>
<?php
global $con;
$record=array();
$sql="SELECT * FROM product where id ='".$id."'";
$query=mysqli_query($con,$sql);
$record[]=mysqli_fetch_assoc($query);
 ?>
   <!--- ======== End Sidebar ====== --->
<div id="page-wrapper">
        <div class="container">
          <div class="table-responsive">
  <div class="container mt-4">
    <h2 class="text-center text-warning">Product Update Table</h2>
<div class="row">
  <div class="col-md-6 mx-auto  border-primary">
    <?php
    foreach($record as $val)
    {
      ?>
    <form action="updateaction.php" method="post" enctype="multipart/form-data" style="box-shadow: 0px 2px  2px 2px grey;padding: 10px;">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <input type="hidden" name="uid" value="<?php echo $val['id']; ?>">
  <div class="row mb-2">
    <div class="col-md-12">
      <div class="form-outline">
            <label class="form-label text-warning" for="form6Example3">Subcatagory</label>
<input type="text" id="form6Example3" class="form-control" name="Sub_Category" value="<?php echo $val['sub_catagory']; ?>">

      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-2">
        <label class="form-label text-warning" for="form6Example3">Product Name</label>
    <input type="text" id="form6Example3" class="form-control" name="name" value="<?php echo $val['name']; ?>" />

  </div>

  <!-- Email input -->
  <div class="row">
  <div class="col-md-6">
  <div class="form-outline mb-2">
  <label class="form-label text-warning" for="form6Example5">Actual_Price</label>
    <input type="Actual_Price" id="form6Example5" class="form-control"name="actual_Price"  value="<?php echo $val['price']; ?>" />
  </div>
</div>

  <!-- Number input -->
  <div class="col-md-6">
  <div class="form-outline mb-2">
        <label class="form-label text-warning" for="form6Example6">Discount</label>
  <input type="Actual_Price" id="form6Example5" class="form-control"name="Discount" value="<?php echo $val['discount']; ?>" />
  </div>
</div>
</div>

  <!-- Message input -->
  <div class="form-outline mb-2">
        <label class="form-label text-warning" for="form6Example7">Discount_Price</label>
      <input type="Actual_Price" id="form6Example5" class="form-control"name="Discount_Price" value="<?php echo $val['dis_price']; ?>" />
  </div>
  <div class="row">
    <div class="col-md-6">
  <div class="form-outline mb-2">

<div class="form-outline">
      
        <div class="row">
          <div class="col-md-1"><label>L</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['size']; ?>" />
          </div>
          <div class="col-md-1"><label>M</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['size']; ?>" />
          </div>
          <div class="col-md-1"><label>XL</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['size']; ?>" />
          </div>
          <div class="col-md-1"><label>XLL</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="Size[]" value="<?php echo $val['size']; ?>" />
          </div>
        </div>
       
        
         <label class="form-label" for="form6Example1">Size</label>
      </div>


  </div>
</div>
<div class="col-md-6">
  <label class="form-label text-warning" for="form6Example7">Type</label>
  <input type="type" id="form6Example5" class="form-control"name="type" value="<?php echo $val['Type']; ?>" />
  </div>
</div>
<div class="col-md-12">
<div class="form-outline mb-2">
        <label class="form-label text-warning" for="form6Example7">Image</label>
        <input type="hidden" name="old_img" value="<?php echo $val['image']; ?>">
      <input type="file" id="form6Example5" class="form-control"name="Image" />
      <img src="<?php echo '../assets/product/'.$val['image'];  ?> " width="200px" height="200px">
  </div>
</div>



<!-- Text input -->
  <div class="form-outline mb-2">
        <label class="form-label text-warning" for="form6Example4">Description</label>
<textarea class="form-control" id="form6Example7" rows="4" name="Description" value="">
  <?php
echo $val['Description'] ?>
</textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mt-3" name="submit">CHANGE PRODUCTS</button>
</form>
<?php
}
?>
  </div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
      function readURLMoreImage(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage').html(moreimg);
        }


 }
</script>


<?php
  include('footer.php');
  ?>