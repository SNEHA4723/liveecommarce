
<?php 
include("header.php") ?>
<!-- ======== End Sidebar ====== -->
 <div id="page-wrapper">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-12 bg-dark">
        <h4><b><i class="fa fa-diamond" aria-hidden="true"></i>   Category List</b></h4>
      </div>
    </div>
   
<div class="container-fluid background mt-5">
         
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>CATEGORY</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM catagory";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
           echo "<td>".$data['catagory']."</td>";
          ?>
         
          
          
       
        <td>
          <span style="width: 80px;display: block;">
          
        <a href="deletecatagory.php?uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"onclick="return checkconfirm();"><i class="fa fa-trash"></i></button></a>
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
 
</div>
<script>
  function checkconfirm()
  {
    return confirm("ARE YOU SURE TO DELETE PRODUCT");
  }
</script>
<?php 
include("footer.php") ?>

  
  