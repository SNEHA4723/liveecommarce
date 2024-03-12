




<?php 
include("header.php") ?>
<div id="page-wrapper">
        <div class="container-fluid background">
          <h3><i class="fa fa-sliders"></i> <b>Owl Slider</b></h3>
          <div class="table-responsive">
  <table id="example" class="table table-striped table-bordered mt-3" style="width:100%;">
      <thead>
        <tr class="bg_table_head_custom">
          <th>SL</th>
          <th>TYPE</th>
          <th>DESCRIPTION</th>
          <th>OFFER</th>
          <th>IMAGE</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
        <?php
        global $con;
        $sql="SELECT * FROM owl_slide";
        $result=mysqli_query($con,$sql);
        $sl=1;
        while($data=mysqli_fetch_assoc($result))
        {
          echo "<tr>";
          echo "<td>".$sl++."</td>";
           echo "<td>".$data['type']."</td>";
            echo "<td>".$data['desc']."</td>";
            echo "<td>".$data['offer']."</td>";
          ?>
         <td><img src="<?php echo'../'.$data['image'];?>" width="100px" height="70px"></td>
          
          
       
        <td>
          <span style="width: 80px;display: block;">
          <a href="sliderdelete.php?uid=<?php echo $data['id'];?>"> <button name="delete" class="btn btn-sm rounded bg-danger text-white"onclick="return checkconfirm();"><i class="fa fa-trash"></i></button></a>
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
