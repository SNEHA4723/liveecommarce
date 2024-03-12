<?php 
include("header.php"); ?>
<?php 
include("function.php");
?>
<div id="page-wrapper">
<div class="container">
  <div class="col-md-10 mx-auto">
    <div class="sub_category">
      <h3 class="text-center text-danger mt-5 pt-4">ADD SUB_CATAGORY</h3>
      <form action="subcatagoryaction.php" method="post">
      
    <select style="width: 400px;height: 50px;margin-left: 240px;margin-top: 100px;"class="rounded"name="category" id="catag_name">
  <option value="">Select a catagory</option>

  <?php
  $catagory=getAllCatagory();
  foreach ($catagory as $value) {
  ?>
    <option value="<?php echo $value['id']; ?>"><?php echo $value['catagory'];?></option>
  <?php
  }
  
  ?>
  </select>
  
    <input type="text" name="sub_category"style="width: 400px;height: 50px;margin-left: 240px;margin-top: 50px;"class="rounded">
    <input type="submit" name="submit" value="Add Sub-Catagory"style="width: 200px;height: 50px;margin-left: 350px;margin-top: 70px;"class="rounded">
  </form>
    </div>
  </div>
</div>

</div>






<?php 
include("footer.php") ?>