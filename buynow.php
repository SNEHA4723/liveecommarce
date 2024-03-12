<?php
include('header.php');
$user_id=$_SESSION['userid'];
$id=$_GET['p_id'];
$sql="SELECT * FROM product WHERE id='".$id."'";
$record[]=array();
$result=mysqli_query($con,$sql);
while($data=mysqli_fetch_assoc($result))
{
	$record[]=$data;
}
?>
<body>
	<!-- <form action="orderaction.php" method="post"> -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php
			
			$record1=all_data($id);
			foreach($record1 as $buynow)
			{
			?>
		
			<input type="hidden" name="p_id" value="<?php echo $buynow['id']?>?">
			<img src="<?php echo 'assets/img/'.$buynow['image'];?>" width="50%" height="50%">
			<h1><?php echo $buynow['name']?>"</h1>
			<h1>price:<?php echo $buynow['dis_price']?></h1>
			
				<select name="quantity" onchange="total_Price(this.value);">
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			</select>

		<p>You pay</p>
			<input type="text" name="item_price" readonly value="<?php echo $buynow['dis_price'];?>" id="total_amount1" style="border: none;margin-left: 35px; font-size: 25px;">
		</div>
		


<!-- </form> -->

<?php
$real_price=$buynow['price'];
$discount=$buynow['discount'];
}
?>

<div class="col-md-6">
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
</div>




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
</body>
<?php 
include('footer.php');
