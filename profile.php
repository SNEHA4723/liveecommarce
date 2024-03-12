<?php  
include("header.php");

 ?>
    <section class="head">
    	<div class="container mt-3">
         <div class="row">
         	<div class="col-md-3 bg-dark rounded">
       		<div class="p_round mx-auto">
         	<img src="<?php echo "image/".$_SESSION['image'];?>">
         		</div></h1>
         	</div>
         	<div class="col-md-6 rounded bg-dark border">
            <h1 class="text-center text-success"style="font-family: verdana;color: red"><b>WELCOME</b></h1>
           <h4 class="text-center"><b><h1 class="text-white"><?php echo $_SESSION['name']?></b></h4>
          </div>
         	<div class="col-md-3 bg-dark rounded bg-warning text-center pik"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i><input type="submit" name=""class="P_3 m-4 rounded bg-light" value="Logout"></a></div>
         </div>
    	</div>
    	

    </section>
    <section class="information mt-4">
      <div class="container  information">
        <div class="personal mx-auto pr-3 pt-2">
        <div class="row ">
          <div class="col-md-12 "><p class="text-success ml-3 text-center">Personal Information</p></div>
          <div class="col-md-4  text-center"><h5>Full Name:</h5></div>
          <div class="col-md-8"><input type="text" name="" value="<?php echo $_SESSION['name']?>" class="text-center pt-2 pb-2 rounded"></div>
        </div>
        
         <div class="row mt-3">
          
          <div class="col-md-4  text-center"><h5>Email:</h5></div>
          <div class="col-md-8"><input type="email" name="" value="<?php echo $_SESSION['email']?>"class="text-cen`Zxcl;ter pt-2 pb-2 rounded"></div>
        </div>
         <div class="row mt-3">
          
          <div class="col-md-4  text-center"><h5>Phone Number:</h5></div>
          <div class="col-md-8"><input type="number" name="" value="<?php echo $_SESSION['phone']?>"class="text-center pt-2 pb-2 rounded"></div>
        </div>
        
        <div class="row">
           <div class="col-md-12 ">
            <input type="submit" name="" value="submit"style="margin-left:270px;margin-top: 30px;"class="bg-warning border-0 pt-1 pl-3 pr-3 pb-1 rounded">
          </div>
        </div>
        </div>
      </div>
    </section>
   <?php  
include("footer.php");

?>