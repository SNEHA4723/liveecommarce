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
          <th>Catagory</th>
          <th>sub_catagory</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT subcatagory.*,catagory.catagory FROM subcatagory,catagory WHERE subcatagory.c_id=catagory.id";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
           echo "<td>".$data['catagory']."</td>";
          echo "<td>".$data['name']."</td>";
          
        ?>
        <td>
          <span style="width: 80px;display: block;">
          <a href="deletesubcatagory.php?uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"onclick="return checkconfirm();"><i class="fa fa-trash"></i></button></a>
  
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