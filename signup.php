<?php  
include("header.php")
?>
<body>
<section class="overflow">
  <form action="signupaction.php" method="post" enctype="multipart/form-data" onsubmit="return upload();">
  <div class="container mt-4 ">
    <div class="row">
     
<div class="col-md-6 login_page background  bg-warning mx-auto">
  <div class="form mx-auto bg-light"> 
<div class="round">
        <label for="file-input">
            <img src="assets/img/girlicon.jpeg" alt="Choose File"style="border-radius: 50%;width: 100%;height: 100%;"id="image-show">
                    <i class="fa fa-camera" aria-hidden="true"style="position: relative;left: 74px;top: -30px; color: red"></i>
        </label>

        <input type="file" id="file-input" style="display: none;"name="image"onchange="readURL(this);">
   
    </div>
    <div class="form1 mx-auto " style="margin-top: 100px; padding-left: 20px;padding-right: 20px; ">
    <div class="row">
      <div class="col-md-12 mt-5">
        
        <h3 class="mt-3"><b>Welcome To Shopee...</b></h3>
        <!-- <input type="file" name="image"> -->
        <input type="name" class="form-control p-4 mt-3" id="Name" placeholder=" Full Name"name="name"><i class="fa fa-user name"></i>
        <div class="mb-3"></div>
        <div class="mb-3"></div>
        <input type="email" class="form-control inputs p-4" id="email" placeholder="Email"name="email"><i class="fa fa-envelope email"></i>
        <div class="mb-3"></div>
        <input type="phone" class="form-control inputs p-4" id="phone" placeholder="phone number"name="phone"><i class="fa fa-phone phone"></i>
        <div class="mb-3"></div>
        <input type="password" class="form-control inputs p-4" id="password" placeholder="password"name="password"><i class="fa fa-lock pass"></i>
        <div class="mb-3"></div>
        <input class="bg-warning w-100 text-light p-3 border-0 rounded" name="submit" type="submit">
        <div class="mb-3"></div>
        <p class="text-center">Already have an account&nbsp;<a href="login.php">login</a></p>
        <div class="mb-3"></div>
       
      </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>
</form>
</section>
<script type="text/javascript">
  function readURL(input)
  {
    if(input.files&&input.files[0])
    {
      var reader=new FileReader();
      reader.onload=function(e)
      {
        $('#image-show')
        .attr('src',e.target.result)
        .width(100)
        .height(100)
      };
      reader.readAsDataURL(input.files[0]);
      }
    }
  
</script>
<script type="text/javascript">
  function upload()
  {
    name=document.getElementById('Name').value;
     email=document.getElementById('email').value;
      phone=document.getElementById('phone').value;
       password=document.getElementById('password').value;
       if(name=='')
       {
        alert("INSERT YOUR NAME");
        return false;
       }
       else if(email=='')
       {
        alert("INSERT YOUR EMAIL");
        return false;
       }
        else if(phone=='')
       {
        alert("INSERT YOUR PHONE NUMBER");
        return false;
       }
        else if(password=='')
       {
        alert("INSERT YOUR PASSWORD");
        return false;
       }
       else
       {
        alert("VALIDATION SUCCESSFULL");
        return true;
       }
  }
</script>



	<?php  
include("footer.php")

?>