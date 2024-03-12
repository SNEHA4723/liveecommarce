<!DOCTYPE html>
<html>
<head>
	<title>procduct</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owlcarousle.css">
</head>
<body>
	<section class="vh-100 gradient-custom bg-secondary">
  <div class="container py-5 h-75">
    <div class="row d-flex justify-content-center align-items-center h-75">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
           <form method="post" action="adminloginaction.php" onsubmit="return prove();">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-3">Please enter your login and password!</p>

                     

              <div class="form-outline form-white mb-3">
              	
                <input type="email" id="email" class="form-control form-control-lg" placeholder="email" name="email"/>
                
              </div>

              <div class="form-outline form-white mb-3">
                <input type="password" id="password" class="form-control form-control-lg" placeholder="password" name="password"/>
               
              </div>

              <p class="small mb-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit"name="submit">Login</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fa fa-facebook"></i></a>
                <a href="#!" class="text-white"><i class="fa fa-twitter  mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fa fa-google "></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  function prove()
  {
    user=document.getElementById('email').value;
     pass=document.getElementById('password').value;
      
       if(user=='')
       {
        alert("INSERT YOUR USERNAME");
        return false;
       }
       else if(pass=='')
       {
        alert("INSERT YOUR PASSWORD");
        return false;
       }
       
      
  }
</script>




	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
	 <!-- ==== jquery link === -->
<script src="assets/js/jquery-3.6.4.min.js" ></script>
  <!-- ==== boostrap js link === -->
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>