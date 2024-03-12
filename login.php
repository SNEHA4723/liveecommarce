<?php  
include("header.php");
?>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  
                  <h4 class="mt-1 mb-5 pb-1"> Welcome to Shopee</h4>
                </div>

                <form method="post" action="loginaction.php" onsubmit="return upload();">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                     <label class="form-label" for="user">Username</label>
                    <input type="email" id="user" class="form-control"
                      placeholder="email address" name="username"/>
                   
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="pass" class="form-control" placeholder="password" name="password"/>
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1 ">
                    <input class=" fa-lg gradient-custom-2 mb-3 p-3 border-0 text-light rounded" type="submit" name="submit" value="LOGIN">
                    
                  </div><a class="text-muted ml-3" href="#!">Forgot password?</a>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>&nbsp;
                   <a href="signup.php"class="text-dark"style="text-decoration: none;"> <button type="button" class="btn btn-outline-danger">Create new</button></a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <script type="text/javascript">
  function upload()
  {
    user=document.getElementById('user').value;
     pass=document.getElementById('pass').value;
      
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
<?php  
include("footer.php")

?>





	<div class="container">
      <div class="col-md-6">
        <div class="form1">
        <form action="{{route('login.action')}}" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type.0="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div>
    <a href="{{Route('registration')}}">First registraion   </a>
            </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
      </div>
      </div>
