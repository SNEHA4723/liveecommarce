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
          <th>NAME</th>
          <th>PHONE</th>
          <th>BUILD</th>
          <th>LANDMARK</th>
          <th>AREA</th>
          <th>STATE</th>
          <th>OPTION</th>
          <th>PRESENT PLACE</th>
          <th>ACTION</th>
           
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM delivery_address";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
          echo "<td>".$data['name']."</td>";
          echo "<td>".$data['phone']."</td>";
          echo "<td>".$data['build']."</td>";
          echo "<td>".$data['land']."</td>";
          echo "<td>".$data['area']."</td>";
          echo "<td>".$data['state']."</td>";
          echo "<td>".$data['optionk']."</td>";
          echo "<td>".$data['rad']."</td>";
      
          ?>
           
  
        <td>
          <span style="width: 80px;display: block;">
          
       <a href="daction.php?uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"onclick="return checkconfirm();"><i class="fa fa-trash"></i></button></a>
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
