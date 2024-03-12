<?php
include('header.php');
$id=$_GET['p_id'];
$size=$_GET['size'];
$pr_id=array();
$pr_id=explode(',' ,$id);
$user_id=$_SESSION['userid'];
// $sql="SELECT * FROM product WHERE id='".$product_id."'";
// $record[]=array();
// $result=mysqli_query($con,$sql);
// while($data=mysqli_fetch_assoc($result))
// {
//  $record[]=$data;
// }
// }
?>
<body>
    <!-- Modal -->
  
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title ml-5 text-center" id="staticBackdropLabel">ORDER CONFIRM</h1>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form mx-auto bg-light">

    <div class="form1 mx-auto">
    <div class="row">
      <div class="col-md-12 ">
        <?php 
        $sql="SELECT * FROM delivery_address WHERE user_id = '".$user_id."'";
        $query=mysqli_query($con,$sql);
        $rows=mysqli_num_rows($query);
        $reult=array();
        while($rec=mysqli_fetch_assoc($query))
        {
          $result[]=$rec;
        }
        if($rows)
        {
        ?>
          <form action="order_action.php" method="post">
            <?php
          foreach($result as $val)
          {
            ?>
           <div class="row">
            <div style="width: 400px;height: 250px;position: ;left:20px;background-color: #defcf9">
                 <h2 class="text-center text-primary">CUSTOMER DETAILS</h2>
           <input type="hidden" checked name="add" value="<?php echo $val['id']; ?>">
         <b>  <h3 class="text-dark text-center mt-3 ">NAME:<?php echo $val['name']; ?></h4></b>
            <h4 class="text-dark text-center mt-2"><?php echo $val['land']; ?></h4>
           <h4 class=" text-dark text-center mt-2"><?php echo $val['build']; ?>,<?php echo $val['state']; ?></h4>
         
           <h5 class="text-dark text-center mt-2">PHONE NUMBER:<?php echo $val['phone']; ?></h5>
           
           </div>
            </div>





          
        <?php }
        ?>
        
        <input type="hidden" name="usr_id" value="<?php echo $user_id; ?>">
        <input type="hidden" name="prd_id" value="<?php echo $id; ?>">
        <input type="hidden" name="size" value="<?php echo $size ?>">
        <div style="width: 100px height:50px;background-color: #509afa;"><h2 class="text-center text-light">PAYAMENT METHOD</h2></div>
        <input type="radio" name="payment_opt" checked value="cash">
       <b> <label for="" style="">Cash On Delivery(only available now)</label><b>
        <div class="col-md-12 text-center">
          <a href="orderconfirm.php"><button type="button"  name="conf_ord" class="btn btn-dark"> CLICK CONFIRM ORDER</button></a>
           </div>
      </form>
        <?php 
        }
        else{?>
        <form action="deliveryaddressaction.php" method="post" onsubmit="return upload_addr();">
        <input type="hidden" name="size" value="<?php echo $size;?>" >
          <input type="hidden" value="<?php echo $user_id; ?>" name="user_id">
          <input type="hidden" value="<?php echo $id; ?>" name="prd_id">
        <h3 class=" text-center"><b>ORDER NOW</b></h3>
        <input type="text" class="form-control p-4 mt-3"  placeholder="Name" name="name"id="name">
        <div class="mb-3"></div>
        <input type="number" class="form-control inputs p-4" placeholder="Alternative number" name="phone"id="phone">
        <div class="mb-3"></div>
        

      
       
        <h5><b>Address info</b></h5>
          <input type="text" class="form-control p-4 mt-3"  placeholder="Flat No/Bulding Name"name="build" id="build">
        <div class="mb-3"></div>
          <input type="text" class="form-control p-4 mt-3"  placeholder="Landmark" name="land" id="land">
        <div class="mb-3"></div>
          <input type="text" class="form-control p-4 mt-3"  placeholder="Area/Street/Locality" name="area" id="area">
        <div class="mb-3"></div>
       <select class="form-select form-select-lg mb-3 p-1 border border-secondary" aria-label=".form-select-lg example" name="state" id="state" required="">
  <option selected>Select State</option>
  <option value="west bengal">West Bengal</option>
  <option value="kerala">Kerala</option>
  <option value="bihar">Bhiar</option>
   <option value="jharkhand">Jharkhand</option>
</select>
<div class="mb-3"></div>
<h5><b>What3words.address(optional)</b></h5>
<input type="text" class="form-control p-4 mt-3" placeholder="optaional address" name="option" id="option" >
        <div class="mb-3"></div>
        <input type="radio" name="rad" id="opt" value="home">
        <label for="opt">Home</label>
        <input type="radio" name="rad" id="ort" value="home">
        <label for="ort">Office</label>
        <input type="radio" name="rad" id="okt" value="home">
        <label for="okt ">Custom</label>
         <div class="mb-3"></div>
     
        <div class="mb-3"></div>
        <button type="submit" name="addre" class="btn btn-warning

         ml-5">Comfirm</button>
        </form>
        <?php } ?>
      </div>
    </div>
  </div>
  </div>
            </div>
     
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="container">
   <div class="main-round mx-auto mt-3">
      <div class="round-1 mt-5 "><h5 class="text-center text-dark mt-2">1
      </h5><h5 class="mt-4 ml-2"><b>bag</b></h5>   
      </div>
      <div class="line mb-5 "></div>
      <div class="round-1 mt-5 bg-danger"><h5 class="text-center mt-2">3</h5><h5 class="mt-4 mr-2"><b>payment</b></h5></div>
    </div>
  <div class="row">
      <?php
      foreach($pr_id as $key => $pr_val)
{
  $product_id=$pr_val;
      $record1=all_data($product_id);
      foreach($record1 as $buynow)
      {
      ?>
      <div class="col-md-4 mt-5">
      <input type="hidden" name="p_id" value="<?php echo $buynow['id']?>?">
      <img src="<?php echo 'assets/img/'.$buynow['image'];?>" style="width: 300px;height: 300px;">
      <b><h3 class=" mt-3"><?php echo $buynow['name']?></h3></b>
      <h5 class="text-primary">Price:<?php echo $buynow['dis_price']?></h5>
       <h5 class="text-success">Discount Price:<i class="fa fa-inr"><strike><?php echo $buynow['price']?></i></strike></h5>
        <h5 class="text-danger">Discount:<?php echo $buynow['discount']?>%off</h5>
            <b><h5 class="text-secondary"><?php echo $buynow['Description']?></h5></b>
     
        <h5>QUANTITY:</h5>
         <div style="width: 100px;height: 100px;position: relative;left: 120px; top: -30px; ">
        <select name="quantity" onchange="total_Price(this.value);" style="border-radius: 20px;margin-top: px;">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
      </select>

    
    </div>
    <div style="width: 50px;height: 50px;position: relative;top: -100px; ">
 
    <span class="mt-3 ml-3">Pay:</span><input type="text" name="item_price" readonly value="<?php echo $buynow['dis_price'];?>" id="total_amount1" style="border: none;margin-left: x; font-size: 20px;position: absolute;left: 70px;top: 1px;">
    </div>
  </div>
  

  

    <?php
$real_price=$buynow['price'];
$discount=$buynow['discount'];
}
}
?>
</div>
</div>
    
    


<!-- </form> -->


<section>

  <div class="payament p-2 mx-auto">
    <h4 class="text-center"><b>Bag Summary</b></h4>
    <div class="total">
       <div class="total1"><p class="text-success ml-3">Total Item(1)</p></div>
      <div class="total1"><p class="ml-3">price </p></div>
      <div class="total2" ><p ><i class="fa fa-inr "><b id="real"><?php echo $real_price;?></b></i></p></div>
      <div class="total1"><p class="ml-3">discount</p></div>
      <div class="total2"><p ><b id="dis"><?php echo $discount;?></b>%</p></div>
      <div class="total1"><p class="ml-3">Delivary</p></div>
      <div class="total2"><p class="text-danger">FREE</p></div>
      <div class="total1"><p class="ml-3">Sub total</p></div>
      <div class="total2"><p><i class="fa fa-inr"><b></b></i></p></div>
      
      

    </div>
    <div class="total1"><p class="text-danger ml-3"><b>YOU PAY<b></p></div>
    <div class="total2"><p id="payatm"><i class="fa fa-inr"><b><b id="payatm"><?php echo $buynow['dis_price'];?></b></i></b></i></p></div>
     <button type="button" name="" value="Proceed To Pay" class="text-center text-light free mt-4"data-bs-toggle="modal" data-bs-target="#staticBackdrop">Procced to pay</button>
   </div>
</div>
</div>

</section>





<script type="text/javascript">
  function total_Price(val){
      <?php
          if(!empty($record1))
        {
        foreach ($record1 as $key => $buy_now1) {
            
        ?>
var t=val*<?php echo $buy_now1['dis_price'];?>;
var real=val*<?php echo $buy_now1['price'];?>;
var discount=val*<?php echo $buy_now1['discount'];?>;
<?php
}
}
?>
document.getElementById("total_amount1").value=t;
document.getElementById("payatm").innerHTML=t;
document.getElementById("real").innerHTML=real;
document.getElementById("dis").innerHTML=discount;
}
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#total_amount1").on('change',function(){
    let pay=$("#total_amount1").val();
    $('#payment').html(pay);
  });
});
</script>
<!-- <script>
  $(document).ready(function(){
    $('#add_add').click(function(){
      $('#another_add').toggle();
    });
  });
</script> -->
<script type="text/javascript">
  function upload_addr()
  {
    var name=document.getElementById('name').value;
     var phone=document.getElementById('phone').value;
     var build=document.getElementById('build').value;
     var option=document.getElementById('option').value;
     var land=document.getElementById('land').value;
     var area=document.getElementById('area').value;
     var state=document.getElementById('state').value;
     var opt=document.getElementById('opt').checked;
     var okt=document.getElementById('opt').checked;
     var ort=document.getElementById('opt').checked;
     if(name=='')
       {
        alert("INSERT YOUR NAME");
        return false;
       }
       else if(phone=='')
       {
        alert("INSERT YOUR PHONE NUMBER");
        return false;
       }
        else if(build=='')
       {
        alert("INSERT YOUR BUILD NAME");
        return false;
       }
        else if(land=='')
       {
        alert("INSERT YOUR LAND MARK");
        return false;
       }
        else if(area=='')
       {
        alert("INSERT YOUR AREA");
        return false;
       }
        else if(state=='')
       {
        alert("INSERT YOUR PHONE NUMBER");
        return false;
       }
        else if(option=='')
       {
        alert("INSERT OPTION");
        return false;
       }
       else if(opt==false && okt==false && ort==false){
        alert("Select your address type");
        return false;
       }
       else
       {
        alert("VALIDATION SUCCESSFULL");
        return true;
       }
  }
</script>
</body>
<?php 
include('footer.php');
?>