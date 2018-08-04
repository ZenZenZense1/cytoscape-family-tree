<?php
include("page/header.php");
include("database/database_connection.php");
?>
   <form action="" method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8" id="signup_msg">
        <!--Alert from signup form-->
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="panel panel-primary">
          <div class="panel-heading">Add Product</div>
          <div class="panel-body">
             <h4 class="page-header"></h4>
       <div class="form-group">
        <label for="primary_first_name" class="col-sm-2 control-label">Registry Number</label>
        <div class="col-sm-8">
          <input type="text" name="registry_num" class="required checkfieldforinvalid form-control" maxlength="30" wtx-context="CB1E6AB8-0ABD-4C7C-B4A6-38D6CFC8A01A">
        </div>
      </div>
            <div class="row">
              <div class="col-md-12">
                <label for="f_name">Product Title</label>
                <input type="text" class="form-control" name="product_title" required />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="email">Product Category</label>
                 <select name="product_cat" required class="form-control">
           
           <option></option>
           
           
           <?php
           
          

  $get_cats = "select * from categories";
  $run_cats = mysqli_query($con,$get_cats);

  while($row_cats=mysqli_fetch_array($run_cats)){

  $cat_tit = $row_cats['cat_title'];
    $cat_id = $row_cats['cat_id'];
    

     echo "<option value=$cat_id>$cat_tit</option>";    
    


     }    
           ?>
           
           </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="password">Product Image</label>
                <input type="file" class="form-control" name="product_image" required />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="repassword">Product Price</label>
                <input type="text" class="form-control" name="product_price" required />
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="mobile">Product Descriptrion</label>
                <textarea name="product_desc" class="form-control" cols="33" rows="7" required></textarea>
              </div>
            </div>
            <p><br/></p>
            <div class="row">
              <div class="col-md-12">
              &nbsp;<input style="float:right;" type="submit" name="index" value="INSERT" class="btn btn-success btn-lg"/>&nbsp;<br />
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</form>    

<?php 
include("page/footer.php");
?>


<?php


if(isset($_POST['index'])){

    //getting text data
   $pid = $_SESSION["uid"];
   $product_title = $_POST['product_title'];
   $product_cat = $_POST['product_cat'];
   $product_price = $_POST['product_price'];
   $product_desc = $_POST['product_desc'];
   
    //getting image data
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp = $_FILES['product_image']['tmp_name'];
   
   move_uploaded_file($product_image_tmp,"product_images/$product_image");
   
   $insert_product = "insert into products (producer_id,prd_cat,prd_title,prd_price,prd_desc,prd_img) values ('$pid','$product_cat','$product_title','$product_price','$product_desc','$product_image')";
   
   $run_product = mysqli_query($con,$insert_product);
   
   if($run_product){
   
   echo"<script>alert('Product Has been inserted')</script>";
   echo"<script>window.open('Producer.php?tn=$r','_self')</script>";
   }


}


?>















































