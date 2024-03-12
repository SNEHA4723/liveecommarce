<?php 
include("header.php") ?>
<body>

<section class="vh-150" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .10rem;">
          <div class="row g-0">
            <div class="col-md-4 backpro text-center "
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;background: radial-gradient(circle, rgba(241,103,163,1) 0%, rgba(99,166,246,1) 100%);">
                <img src="../assets/img/profile.png"style="width: 100%;height:30%;border-radius:.5rem;"class="mt-1">
              <h5 class="mt-5"><?php echo $_SESSION['name']?></h5>
              <p>Web Designer</p>
              <i class="fa fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h1 class="text-center text-dark">INFORMATION</h1>
                <hr class="mt-0 mb-4 ">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <b><h3>Email:</h3></b>
                   <b> <p class="text-muted"><?php echo $_SESSION['email']?></p></b>
                  </div>
                  <div class="col-6 mb-3">
                   <b><h3>Phone:</h3></b>
                   <b> <p class="text-muted">123 456 789</p></b>
                  </div>
                </div>
                <h3>Name:</h3>
                <h5 class="mt-1"><?php echo $_SESSION['name']?></h5>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <p>Recent</p>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <p>Most Viewed</p>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fa fa-facebook-f fa-lg mr-3 "></i></a>
                  <a href="#!"><i class="fa fa-twitter fa-lg mr-3"></i></a>
                  <a href="#!"><i class="fa fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
<?php 
include("footer.php") ?>