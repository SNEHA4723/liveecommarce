<?php


include ("database_connection.php");
?>
<?php session_start();
if (isset($_SESSION['name'])){
  $ukdata=explode(" ",$_SESSION['name']);
  $ukdata=$ukdata[0];
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>customer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/admin.css">
   <!--<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">-->
  <!-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css"> -->
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="assets/css/owlcarousle.css"> -->
  <!-- ====== Data Table Pagination CSS ============ -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
  <script src="../assets/js/jquery-3.6.4.min.js"></script>
</head>
<body>
<!--===================
        Header
        =======================-->
       <header class="header">
          <nav class="navbar navbar-toggleable-md navbar-light pt-0 pb-0 ">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand p-0 mr-5" href="#"><p class="res">shoppe</p></a>
            <div class="float-left"> <a href="#" class="button-left"><span class="fa fa-fw fa-bars "></span></a> </div>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown messages-menu">
                  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-success bg-success">10</span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <ul class="dropdown-menu-over list-unstyled">
                      <li class="header-ul text-center">You have 4 messages</li>
                      <li>
                        <!-- inner menu: contains the actual data -->
                        <ul class="menu list-unstyled">
                          <li><!-- start message -->
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle  " alt="User Image">
                            </div>
                            <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <!-- end message -->
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <div class="pull-left">
                              <img src="http://via.placeholder.com/160x160" class="rounded-circle " alt="User Image">
                            </div>
                            <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                            </h4>
                            <p>Why not buy a new awesome theme?</p>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">See All Messages</a></li>
                  </ul>
                </div>
              </li>
              <li class="nav-item dropdown notifications-menu">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-warning bg-warning">10</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <ul class="dropdown-menu-over list-unstyled">
                    <li class="header-ul text-center">You have 10 notifications</li>
                    <li>
                      <!-- inner menu: contains the actual data -->
                      <ul class="menu list-unstyled">
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                          </a>
                        </li>
                        <li>
                          <a href="#">
                            <i class="fa fa-user text-red"></i> You changed your username
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="footer-ul text-center"><a href="#">View all</a></li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item dropdown  user-menu">
                <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  
                <img src="../assets/img/girlicon.jpeg"style="border-radius: 50%;width: 30px;height: 30px;">
              
                  <span class="hidden-xs"><b><?php echo (!isset($_SESSION['email']))?'Account':$ukdata;?></b></span>
                </a>
                <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Login</a>
                  <a class="dropdown-item" href="#">password change</a>
                  <a class="dropdown-item" href="#">profile</a>
                </div> -->
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <?php if (!isset($_SESSION['email'])) { ?>
    <a class="dropdown-item" href="index.php"><b>Login</b></a>
<?php 
  } else{
    ?>
    <a class="dropdown-item" href="profile.php"><b>Profile</b></a>
    <a class="dropdown-item" href="#"><b>Password Change</b></a>
    <a class="dropdown-item" href="adminlogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <b>Logout</b></a>
<?php
}?>

</div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <div class="main">


        <aside class="sidebar left">
          <div>
            <div class="user-panel">
              <div class="pull-left image">
                <img src="../assets/img/girlicon.jpeg"style="border-radius: 50%;">
              </div>
              <div class="pull-left info">
               <a href="profile.php"> <p class="ml-3 mt-3">Profile</p></a>
                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
              </div>
            </div>
            <ul class="list-sidebar bg-defoult">
              <li> <a href="dashboard.php"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a> </li>
            <li> <a href="customer.php"><i class="fa fa-diamond"></i> <span class="nav-label">Customers</span></a> </li>
            <li> <a href="#" data-toggle="collapse" data-target="#products" class="collapsed active" > <i class="fa fa-bar-chart-o"></i> <span class="nav-label">Products</span> <span class="fa fa-chevron-left pull-right"></span> </a>
            <ul class="sub-menu collapse" id="products">
              <li class="active"><a href="productform.php">Product Add</a></li>
              <li><a href="product_table.php">Product_Table</a></li>
              <!-- <li><a href="#">Buttons</a></li>
              <li><a href="#">Tabs & Accordions</a></li>
              <li><a href="#">Typography</a></li>
              <li><a href="#">FontAwesome</a></li>
              <li><a href="#">Slider</a></li>
              <li><a href="#">Panels</a></li>
              <li><a href="#">Widgets</a></li>
              <li><a href="#">Bootstrap Model</a></li> -->
            </ul>
          </li>
          <li> <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Table</span></a> </li>
          <li> <a href="#" data-toggle="collapse" data-target="#tables" class="collapsed active" ><i class="fa fa-table"></i> <span class="nav-label">Categories</span><span class="fa fa-chevron-left pull-right"></span></a>
          <ul  class="sub-menu collapse" id="tables" >
            <li><a href="addcatagory.php">Add catagory</a></li>
            <li><a href="addsubcatagory.php">Add Subcatagory</a></li>
             <li><a href="category.php">Catagory Table</a></li>
              <li><a href="sub_catagory.php">Subcatagory Table</a></li>
            
          </ul>
        </li>
        <li> <a href="#" data-toggle="collapse" data-target="#e-commerce" class="collapsed active" ><i class="fa fa-id-card" aria-hidden="true"></i><span class="nav-label">Slider</span><span class="fa fa-chevron-left pull-right"></span></a>
        <ul  class="sub-menu collapse" id="e-commerce" >
          <li><a href="slider.php">Slider</a></li>
          <li><a href="owl_carousole.php">Owl Carousole</a></li>
          <!-- <li><a href="">Product edit</a></li>
          <li><a href=""> Product detail</a></li>
          <li><a href="">Cart</a></li>
          <li><a href=""> Orders</a></li>
          <li><a href=""> Credit Card form</a> </li> -->
        </ul>
      </li>
      <li> <a href=""><i class="fa fa-bug"></i> <span class="nav-label">Issues</span> </a></li>
      <li> <a href="delivary.php"><i class="fa fa-map-marker" aria-hidden="true"></i> <span class="nav-label">Delivery Address</span></a> </li>
      <li> <a href="#"><i class="fa fa-shopping-cart"></i>  <span class="nav-label">Order</span></a> </li>
      <li> <a href="adminlogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="nav-label">Logout</span></a> </li>
      
    </ul>
    </div>
    </aside>
