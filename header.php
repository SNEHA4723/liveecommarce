<?php
session_start();
if (isset($_SESSION['email'])){
  $udata=explode(" ",$_SESSION['name']);
  $udata=$udata[0];
}
?>
<!--slider php-->
<?php
include ("database_connection.php");
connection();
if (isset($_SESSION['uname'])){
  // $update=explode(" ",$_SESSION['uname']);
  // $update=$update[1];
}
?>
<?php
include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>SHOPEE</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/home.css">
  <link rel="stylesheet" href="
  assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owlcarousle.css">
  <script type="text/javascript" src="assets/js/jquery-3.6.4.min.js" ></script>

  </head>
<body>
	<!-- Top Header-->
	

 <header>
  <section class="header overflow">
    <div class="row top_header p-1">
    <div class="col-md-12">
      <h6 class="text-center pt-2">EXTRA 5% instant discount for all online payment free delivary</h6>
    </div>
      </div>
    </section>
    <section>
    <div class="container-fluid nav-color" id="myHeader">
      <div class="row ">
        <div class="col-md-7 mx-auto nav_container" >
    <nav class="navbar navbar-expand-lg p-0 m-0" >
      <h2 class="res ">Shopee</h2>
     <button class="navbar-toggler text-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar_toggler"><i class="fa fa-bars"></i></span>
      </button>
    
      <div class="collapse navbar-collapse content" id="navbarSupportedContent">
        <ul class="navbar-nav ml-5">
          <li class="nav-item">
           <a class="nav-link item3 active px-4 <?php echo basename($_SERVER['PHP_SELF'])=='dashbord.php'?'active':'';?>" href="home.php"><b>Home</b></a>
          </li>
         
          
         
          <li class="nav-item">
            <a class="nav-link  item3 px-4" href="meninner.php"> Men Dress</a>
          </li>
           <li class="nav-item">
            <a class="nav-link item3 px-4" href="womeninner.php">Women Dress</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link  item3 px-4" href="shoeinner.php">Shoe</a>
          </li>
           <li class="nav-item">
            <a class="nav-link  itemx px-4" href="creamminer.php">Skin Care</a>
          </li>
          
        </ul>
       
      </div>
    </nav>
    </div>
    <div class="col-md-3 ">
      <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <i class="fa fa-search search" aria-hidden="true"></i>
      </form>


</div>
<div class="col-md-2">

  <div class="dropdown d-inline">


     <a href="javascript:void(0);" class=" btn btn  border-0 dropdown-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <b> <?php echo (!isset($_SESSION['email']))?'Account':$udata;?></b>
  </a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php if (!isset($_SESSION['email'])) { ?>
     
    <a class="dropdown-item" href="signup.php"><b>Register</b></a>
    <a class="dropdown-item" href="login.php"><b>Login</b></a>
<?php 
  } else{
    ?>
    
    <a class="dropdown-item" href="profile.php"><b>Profile</b></a>
    
    <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
<?php
}
?>

</div>
<?php
if(isset($_SESSION['email'])){
$wish=countwish($_SESSION['userid']);
$curt=countcurt($_SESSION['userid']);

}
else{

}
?>

    <a href="wishlist.php" class="text-light mt-2 nav_fonts1 ml-4"><i class="fa fa-gratipay text-light" aria-hidden="true"></i></a><span class="text-light">
      <?php if(isset($_SESSION['email'])){echo $wish;} else {} ?></span>
   <a href="addtocurt.php"class="text-light ml-3 mt-2 nav_fonts1"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> <span class="text-white"><?php if(isset($_SESSION['email'])){echo $curt;} else {} ?></<span>
  <div class="mb-3"></div>
</div>
</div>
</div>
</div>
</section>
  </header>