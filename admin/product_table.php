<?php 
include("header.php") ?>
<div id="page-wrapper">
        <div class="container-fluid background">
          <h3><i class="fa fa-user-circle-o"></i> <b>Customer Details</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>Category</th>
          <th>Sub-Category</th>
          <th>Name</th>
          <th>Size</th>
          <th>Type</th>
          <th>Description</th>
          <th>Actual Price</th>
          <th>Discount</th>
          <th>Discount price</th>
          <th>Image</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM product";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['catagory']."</td>";
          echo "<td>".$data['sub_catagory']."</td>";
          echo "<td>".$data['name']."</td>";
          echo "<td>".$data['size']."</td>";
          echo "<td>".$data['Type']."</td>";
          echo "<td>".$data['Description']."</td>";
          echo "<td>".$data['price']."</td>";
          echo "<td>".$data['discount']."</td>";
          echo "<td>".$data['dis_price']."</td>";
          ?>
          <td><img src="<?php echo '../assets/product/'.$data['image'];?>" width="45px" height="30px"></td>   
  
        <td>
          <span style="width: 80px;display: block;">
          <a href="updateproduct.php?uid=<?php echo $data['id']; ?>"><button name="edit" class="btn btn-sm rounded bg-warning text-white"><i class="fa fa-pencil"></i></button></a> &nbsp;
       <a href="deleteaction.php?uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"onclick="return checkconfirm();"><i class="fa fa-trash"></i></button></a>
        </span>
      </td>
        <?php 

          echo "</tr>";
        }
        ?>

      </tbody>
</table>
</div>

</div>
</div>
</div>
<script>
  function checkconfirm()
  {
    return confirm("ARE YOU SURE TO DELETE PRODUCT");
  }
</script>

<?php 
include("footer.php") ?>
