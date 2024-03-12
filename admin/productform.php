
<?php 
include("header.php") ?>
<?php 
include("function.php");
?>
<div id="page-wrapper">
<h1><i class="fa fa-product-hunt" aria-hidden="true"></i>&nbsp;Add Product</h1>
	<div class="container product">
    <div class="product">
		<div class="">
			<div class="col-md-7 mx-auto">
            <form action="product_action.php" method="post" enctype="multipart/form-data" onsubmit=" return prove();">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
       
        <select class="select mt-4 rounded" style="width: 200px;height: 50px;"name="category" id="category">
  <option value="">Select a catagory</option>

  <?php
  $catagory=getAllCatagory();
  foreach ($catagory as $value) {
  ?>
    <option value="<?php echo $value['id']; ?>"><?php echo $value['catagory'];?></option>
  <?php
  }
  
  ?>
  </select>
        <br>
         <label class="form-label" for="form6Example1">Category</label>
      </div>
    </div>

    <div class="col">
      <div class="form-outline">
        <input type="text" id="type" class="form-control mt-4"  name="type" />
        <label class="form-label" for="form6Example2">Type</label>
      </div>
    </div>
     <div class="col">
      <div class="form-outline">
       
        <select class="select mt-4 rounded" style="width: 150px;height: 50px;"name="subcategory" id="subcategory">
  <option value="">Select a subcatagory</option>
  </select>
        <br>
         <label class="form-label" for="form6Example1"> sub_Category</label>
      </div>
    </div>

  <div class="row mb-4 ml-3">
    <div class="col">
      <div class="form-outline">

        <input type="text"  class="form-control ml-2 w-100" name="Actual_Price" id="Actual_price" onkeyup="discount_value();"/>
       
        
         <label class="form-label ml-2" for="form6Example1">Actual Price</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text"  class="form-control ml-2" name="Discount" onkeyup="discount_value();"id="discount"/>
        <label class="form-label" for="form6Example2">Discount</label>
      </div>
    </div>
  </div>
  <div class="row mb-4 ml-4">
    <div class="col">
      <div class="form-outline">
        <input type="text"class="form-control" name="Discount_Price"id="discount_price"/>
       
        
         <label class="form-label" for="form6Example1">Discount Price</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="name" class="form-control ml-2" name="name" />
        <label class="form-label" for="form6Example2">Name</label>
      </div>
    </div>
  </div>
<div class="row mb-4 ml-3">
    <div class="col">
      <div class="form-outline">
      
        <div class="row">
          <div class="col-md-1"><label>5</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="check[]" value="5" id="po" />
          </div>
          <div class="col-md-1"><label>6</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="check[]" value="6" id="po" />
          </div>
          <div class="col-md-1"><label>7</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="check[]" value="7" id="po" />
          </div>
          <div class="col-md-1"><label>8</label></div>
           <div class="col-md-1">
            <input type="checkbox"name="check[]" value="8" id="po" />
          </div>
        </div>
       
        
         <label class="form-label" for="size">Size</label>
      </div>
    </div>
    
  </div>

 <!-- Message input -->
 <div class="col-md-12">
  <div class="form-outline mb-4">
    <textarea class="form-control" id="description" rows="4" name="description"></textarea>
    <label class="form-label" for="form6Example7">Description</label>
  </div>
</div>

  <div class="col-md-12">
    
      <div class="form-outline">
        <input type="file" id="form6Example2" class="form-control" name="image" id="image" />
        <label class="form-label" for="form6Example2">Image</label>
      </div>
    
  </div>

  

 <div class="col-md-12">
     <div class="col">
      <div class="form-outline">
        <input type="file" multiple="multiple" name="product_sub_image[]" id="img_file" onchange="readURLMoreImage(this);" required="required">
        <label class="form-label" for="form6Example2"> Multiple Image</label>
      </div>
      <div class="row">
      <div class="form-outline  w-100 mx-auto" id="ShowMoreImage"></div>
    </div>
 
    </div>

  </div>
  
 <div class="form-outline mb-4 w-50 mx-auto" id="ShowMoreImage"></div>
 
  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4"name="submit">SUBMIT</button>
</form>

			</div>
		</div>
	</div>
</div>
</div>
</form>
<script type="text/javascript">

</script>



<script type="text/javascript">
  function discount_value()
  {
    let a=parseInt($('#Actual_price').val());
    let b=parseInt($('#discount').val());
    if(isNaN(a)){
      a=0;
    }
    if(isNaN(b)){
      b=0;
    }
    let c=a*b/100;
    let d=a-c;

    let x=Math.round(d);  
  $('#discount_price').val(x);
     
  }
</script>



<script type="text/javascript">
  $(document).ready(function(){
    $('#category').on('change',function(){
      let cat_id=$(this).val();
      $.ajax({
        url: 'ajax_datasubcatagory.php',
        type: 'post',
        data: {category:cat_id},
        // dataType: 'json',
        success: function(result) {
          $('#subcategory').html(result);
          
        }
      });
    });
  });
</script>
<script type="text/javascript">
      function readURLMoreImage(input)
    {
      // $('#ShowMoreImage');
      let moreimg='No Image';
      if(input.files)
      {
        $('#ShowMoreImage').html('');
        var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
        
          // let file=$(this);
          var reader=new FileReader();
          reader.onload=function(e)
          {
            
            let img=$('<img />')
             .attr('src',e.target.result)
             .attr('style','margin-right:8px')
             .width(80)
             .height(80);
            // moreimg=moreimg+img;
            $('#ShowMoreImage').append(img);
          };
          reader.readAsDataURL(input.files[i]);
          // alert('Hi');
        }
       
        }
        else{
          $('#ShowMoreImage').html(moreimg);
        }


      }
</script>
<script type="text/javascript">
  function prove()
  {
    category=document.getElementById('category').value;
     type=document.getElementById('type').value;
      subcategory=document.getElementById('subcategory').value;
     Actual_price=document.getElementById('Actual_price').value;
     discount=document.getElementById('discount').value;
     discount_price=document.getElementById(' discount_price').value;
      name=document.getElementById('name').value;
     po=document.getElementById('po').value;
      description=document.getElementById('description').value;
     image=document.getElementById('image').value;
      img_file=document.getElementById('img_file').value;
      
      
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
include("footer.php") ?>