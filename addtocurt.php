<?php
include('header.php');
?>

<?php 
if(!isset($_SESSION['email']))
{
  ?>
   <a href="login.php"><button class="btn bg-danger text-light p-2 mt-3">REMOVE</button></a>
   <?php
}
else
{
  ?>
<?php
$emptycheck=countcurt($_SESSION['userid']);
if($emptycheck==0)
{
  ?>
  <style>
  @import url("https://fonts.googleapis.com/css?family=Raleway:900&display=swap");



#container {
    position: absolute;
    margin: auto;
    width: 100vw;
    height: 80pt;
    top: 0;
    bottom: 200px;

    filter: url(#threshold);
}

#text1,
#text2 {
    position: absolute;
    width: 100%;
    display: inline-block;

    font-family: "Raleway", sans-serif;
    font-size: 70px;

    text-align: center;

    user-select: none;

}


</style>
<div class="row m-0 p-0">
  <div id="container">

    <span id="text1"></span>
    <span id="text2"></span>
</div>


<svg id="filters">
    <defs>
        <filter id="threshold">
            <feColorMatrix  type="matrix" values="2 0 0 0 0
                  8 0 0 0 0
                  8 0 1 0 0
                  8 0 0 255 -140" />
        </filter>
    </defs>
</svg>
  </div>
   <!-- <h6 class="text-center text-danger mt-4">YOUR CART IS EMPTY</h6>; -->
   
    <div class="row m-0 p-0 mt-5">
      <div class="col-md-3 mx-auto  mt-5">
    <img src="assets/img/cartempty.png">
  </div>
  </div>
  <script>
  const elts = {
    text1: document.getElementById("text1"),
    text2: document.getElementById("text2")
};

const texts = [
    "YOUR",
    "SHOPPING",
    "BAG",
    "IS",
    "EMPTY",
  
   
];

const morphTime = 1;
const cooldownTime = 0.25;

let textIndex = texts.length - 1;
let time = new Date();
let morph = 0;
let cooldown = cooldownTime;

elts.text1.textContent = texts[textIndex % texts.length];
elts.text2.textContent = texts[(textIndex + 1) % texts.length];

function doMorph() {
    morph -= cooldown;
    cooldown = 0;

    let fraction = morph / morphTime;

    if (fraction > 1) {
        cooldown = cooldownTime;
        fraction = 1;
    }

    setMorph(fraction);
}

function setMorph(fraction) {
    elts.text2.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    fraction = 1 - fraction;
    elts.text1.style.filter = `blur(${Math.min(8 / fraction - 8, 100)}px)`;
    elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

    elts.text1.textContent = texts[textIndex % texts.length];
    elts.text2.textContent = texts[(textIndex + 1) % texts.length];
}

function doCooldown() {
    morph = 0;

    elts.text2.style.filter = "";
    elts.text2.style.opacity = "90%";

    elts.text1.style.filter = "";
    elts.text1.style.opacity = "0%";
}

function animate() {
    requestAnimationFrame(animate);

    let newTime = new Date();
    let shouldIncrementIndex = cooldown > 0;
    let dt = (newTime - time) / 900;
    time = newTime;

    cooldown -= dt;

    if (cooldown <= 0) {
        if (shouldIncrementIndex) {
            textIndex++;
        }

        doMorph();
    } else {
        doCooldown();
    }
}

animate();

</script>
  <?php
}
else
{
?>
<?php
if(isset($_SESSION['email']))
{
  $user_id=$_SESSION['userid'];
  global $con;
  $record=array();
  $result="SELECT * FROM addtocurt WHERE $user_id='".$user_id."' AND status=1";
  $query=mysqli_query($con,$result);
  $row=mysqli_num_rows($query);
  while($rec=mysqli_fetch_assoc($query))
  {
    $record[]=$rec;

  }
}
?>
<?php
$ordersummary=array();
$size=array();
?>


<section>
  <div class="container mx-auto ">
    <?php 
    $real_price=0;
    $discount_price=0;
    ?>
    <div class="main-round mx-auto mt-3">
      <div class="round-1 mt-5 bg-danger"><h5 class="text-center text-light mt-2">1
      </h5><h5 class="mt-4 ml-2"><b>bag</b></h5>   
      </div>
      <div class="line mb-5 "></div>
      <div class="round-1 mt-5"><h5 class="text-center mt-2">3</h5><h5 class="mt-4 mr-2"><b>payment</b></h5></div>
    </div>
<div class="row mt-5 p-0">
<?php 

?>
  
    <?php
    foreach($record as $key=>$data){
      $id=$data['product_id'];
      $card_id=$data['id'];
      $ordersummary[]= $id;
      $size[]=$data['size'];

    $record1=all_data($id);
    foreach($record1 as $addtocurt)
      {
          ?>
          
      <div class="col-md-4 wish_card">
        <div class=" wishlist_cover_img">
     <a href="addtocurtremove.php?id=<?php echo $card_id;?>"> <i class="fa fa-times text-dark" style="position: relative;float: right;top: 25px;right: 10px;font-size: 20px;"></i></a>
        <img src="<?php  echo 'assets/product/'.$addtocurt['image'];?>" class="wishlist_cover_img">
       </div>
       <div class="wish_item mt-4 ml-3">
        <h5><b><?php echo $addtocurt['name'];?></b></h5>
      
        <p><b>SIZE:<?php echo $addtocurt['size'];?></b> </p>
        <h5 class="text-secondary"><i class="fa fa-inr" aria-hidden="true"></i><strike><?php echo $addtocurt['price'];?></strike></h5>
        <h5 class=""><i class="fa fa-inr" aria-hidden="true"></i><?php echo $addtocurt['dis_price'];?></h5>
        <h5 class="text-success">Discount:<?php echo $addtocurt['discount'];?>%off</h5>


        <h5 class="text-danger"><b><?php  echo $addtocurt['Description'];?></b></h5>
       </div>
       <div class="wish_button">
         
        <a href="addtocurtremove.php?id=<?php echo $card_id;?>"><button class="btn bg-dark text-light p-2 mt-3">REMOVE</button></a>
        <a href="saveforlateraction.php?s_id=<?php echo $card_id;?>"><button class="btn bg-danger text-light p-2 mt-3">saveforlater</button></a>
        
       </div>
       </div>
       <?php 


       
      $real_price=$real_price+$addtocurt['price'];
      $discount_price=$discount_price+$addtocurt['dis_price'];
      }
}
 $summaryorder=implode(',',$ordersummary);
 $summery_size=implode(',',$size);
$total_profit=$real_price-$discount_price;
$discount_parsent= round(($total_profit/$real_price)*100);
?>
      </div>
  

    </div>
  </section>

  <section class="mt-5 ">
    <div class="col-md-12">

  <div class="payament p-2 mx-auto">
    <h4 class="text-center"><b>Bag Summary</b></h4>
    <div class="total">
       <div class="total1"><p class="text-success ml-3">Total Item(1)</p></div>
      <div class="total1"><p class="ml-3">Bag total </p></div>
      <div class="total2"><p><i class="fa fa-inr "><b><?php echo $real_price;?></b></i></p></div>
      <div class="total1"><p class="ml-3">Bag discount</p></div>
      <div class="total2"><p><b><?php echo $discount_parsent;?></b>%</p></div>
      <div class="total1"><p class="ml-3">Delivary</p></div>
      <div class="total2"><p class="text-danger">FREE</p></div>
      <div class="total1"><p class="ml-3">Sub total</p></div>
      <div class="total2"><p><i class="fa fa-inr"><b></b></i></p></div>
      
      

    </div>
    <div class="total1"><p class="text-danger ml-3"><b>YOU PAY<b></p></div>
    <div class="total2"><p><i class="fa fa-inr"><b><?php echo $discount_price;?></b></i></p></div>
     <a href="oredersummary.php?p_id=<?php echo  $summaryorder?>&size=<?php echo $summery_size?>"><button type="button" name="" value="Proceed To Pay" class="text-center text-light free mt-4">Procced to pay</button></a>
   </div>
     <!-- Button trigger modal -->
<!-- button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>
 -->
<!-- Modal -->

      

  </div>
</div> 
  </section>




<?php
}
}
?>

<?php
include('footer.php');
?>

