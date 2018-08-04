<?php

 $con = mysqli_connect("localhost","root","","ecommerce");

 if(mysqli_connect_errno()){
  
  echo"Failed to connect : " . mysqli_connect_error(); 
  
}

function getMyproduct(){

global $con;
if(isset($_SESSION["uid"])){
	$pid = $_SESSION["uid"];
	$get_pro = "select * from products WHERE producer_id ='$pid' ";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'Producer/product_images/$row_pro[prd_img]' height=110 width=90>";*/



         echo "    
			   <div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$product_title</div>
								<div class='panel-body'>
									<a href='details.php?pro_id=$product_id'><img src='product_images/$product_image' alt='' border='0' width='90' height='110' /></a>
								</div>
								<div class='panel-heading'>P$product_price.00
								   <button pid='$product_id' style='float:right;' id='myProduct' class='btn btn-success btn-xs'>Edit</button>
								</div>
							</div>
						</div>	";
    }
}
}
function getpro3(){

	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0,3";
    $run_pro = mysqli_query($con,$get_pro);
	$cat;

    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
          /*echo "<img src = 'product_images/$row_pro[prd_img]' height=110 width=90>";*/


        echo"
               <div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$product_title</div>
								<div class='panel-body'>
									<a href='details.php?pro_id=$product_id'><img src='product_images/$product_image' alt='' border='0' width='90' height='110' /></a>
								</div>
								<div class='panel-heading'>P$product_price.00
								</div>
							</div>
						</div>


               

              


        ";
	}

    }
	
function details(){

	global $con;


	if(isset($_GET['pro_id'])){

		$prod_id = $_GET['pro_id']; 
 
    $get_pro = "select * from products where prd_id = '$prod_id'";
    $run_pro = mysqli_query($con,$get_pro);
 


    while($row_pro = mysqli_fetch_array($run_pro)){

        $product_id = $row_pro['prd_id'];
        $product_description = $row_pro['prd_desc'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
		$qty = '1';
		echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$product_title</div>
								<div class='panel-body'>
								 <a href='detailsBuyer.php?pro_id=$product_id'><img src='Producer/product_images/$product_image' style='width:160px; height:250px;'/> </a>
								</div>
								<div class='panel-heading'>P$product_price.00
								</br>Quantity:<input type='text' id='quantity' class='form-control qty' value='".$qty."' />
								
								   <input type='button' pid='".$product_id."' id='product' class='btn btn-success form-control add' value='Add to Cart'/>
								</div>
							</div>
						</div>
						<h4 class='text-success'>$product_description</h4>
			";

}
}
}
function getcats(){
 
	global $con;
	$get_cats = "select * from categories";
	$run_cats = mysqli_query($con,$get_cats);
	 echo "
		<div class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'><h4>Categories</h4></a></li>
		";
	if(mysqli_num_rows($run_cats) > 0){
	while($row_cats=mysqli_fetch_array($run_cats)){


		$cat_title = $row_cats['cat_title'];
        $cat_id = $row_cats['cat_id'];
	
    echo "
			<li class=even><a href='index.php?cat=$cat_id'>$cat_title</a></li>
		";
		}
	echo" </div>";	
	}


}
?>