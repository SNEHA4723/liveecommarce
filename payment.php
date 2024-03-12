<?php  
include("header.php")

?>
  <!--add to bag-->
<section>
  <div class="container mx-auto">
    <div class="main-round mx-auto mt-3">
      <div class="round-1 mt-5 "><h5 class="text-center  mt-2">1
      </h5><h5 class="mt-4 ml-2"><b>bag<b></h5>
      
      </div>
      
      

      <div class="line mb-5 "></div>

      <div class="round-1 mt-5 bg-danger"><h5 class="text-center  text-light mt-2">3</h5><h5 class="mt-4 mr-2"><b>payment</b></h5></div>
    

    </div>
  </div>
</section>
  <!--payment-->
<section>
  <div class="container-fluid">
    <div class="row ">
     <div class="col-md-6 osk pb-5">
  <div class="form mx-auto bg-light">

    <div class="form1 mx-auto">
    <div class="row">
      <div class="col-md-12 ">
        <form>
        <h3 class="mt-3 text-center"><b>ORDER NOW</b></h3>
        <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="Name">
        <div class="mb-3"></div>
        <input type="phone" class="form-control inputs p-4" id="exampleFormControlInput1" placeholder="Alternative number">
        <div class="mb-3"></div>
        

      
       
        <h5><b>Address info</b></h5>
          <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="Flat No/Bulding Name">
        <div class="mb-3"></div>
          <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="Landmark">
        <div class="mb-3"></div>
          <input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="Area/Street/Locality">
        <div class="mb-3"></div>
       <select class="form-select form-select-lg mb-3 p-1 border border-secondary" aria-label=".form-select-lg example ">
  <option selected>Select State</option>
  <option value="1">West Bengal</option>
  <option value="2">Kerala</option>
  <option value="3">Bhiar</option>
</select>
<div class="mb-3"></div>
<h5><b>What3words.address(optional)</b></h5>
<input type="name" class="form-control p-4 mt-3" id="exampleFormControlInput1" placeholder="optaional address">
        <div class="mb-3"></div>
        <input type="radio" name="rad" id="opt">
        <label for="opt">Home</label>
        <input type="radio" name="rad" id="ort">
        <label for="ort">Office</label>
        <input type="radio" name="rad" id="okt">
        <label for="okt ">Custom</label>
         <div class="mb-3"></div>
         <button class="btn btn  w-100 text-light p-3">Save Address</button>
        <div class="mb-3"></div>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>
<div class="col-md-6 box3">
  <div class="box mx-auto  bg-light mt-5 p-4">
    <h5 class="text-center text-secondary ">Price details</h5>
          <div class="total1 mt-2"><p>Price</p></div>
      <div class="total2 mt-2"><p><i class="fa fa-inr"><b>1200</b></i></p></div>
      <div class="total1 mt-1"><p>Delivary Charges</p></div>
      <div class="total2 mt-1"><p><i class="fa fa-inr"><b>30</b></i></p></div>
      <div class="total1 mt-3 "><p>Amount Payable</p></div>
      <div class="total2 mt-3"><p><i class="fa fa-inr"><b>1230</b></i></p></div>
      <button class="btn btn  w-100 text-light p-3 mt-4">ORDER</button>
  </div>
  <h3 class=" text-center mt-5 p-3">Choose to payament Option</h3>
  <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
  <div class="accordion-item bg-light">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed text-danger " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Cash On Delivary <i class="fa fa-sort-desc boxi" aria-hidden="true"></i>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><input type="radio" name="ppt1"id="ppt">
        <label for="ppt">CASH</label></div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed text-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Online Payament<i class="fa fa-sort-desc boxi" aria-hidden="true"></i>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body"><input type="radio" name="ppt1"id="ppt5">
        <label for="ppt5">PAYTM</label><br>
      <input type="radio" name="ppt1"id="ppt6">
        <label for="ppt6">GOOGLE PAY</label><br>
      <input type="radio" name="ppt1"id="ppt6">
        <label for="ppt6">PHONE PAY</label></div>
    </div>
  </div>
  
</div>
</div>

    </div>
  </div>
</section>
<?php  
include("footer.php")

?>