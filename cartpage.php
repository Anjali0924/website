<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require 'init.php';
$id = $_SESSION["id"];


$full_path = pathinfo($_SERVER['PHP_SELF']);
    $current_filename = $full_path['basename'];
    $_SESSION["redirectionflag"] = $current_filename;    
    
    
$sql = "SELECT user_cart.kid , user_cart.id , user_cart.pid , product_details.name ,product_details.description, product_details.type, product_details.cost , product_details.img , user_cart.quantity FROM product_details INNER JOIN user_cart ON user_cart.pid = product_details.pid WHERE id = ".$id."";

$data = array();
$result = $conn->query($sql);
$total =0;    
$totalPrice=0;
//---        
    
?>    
    
  <head>
    <title>FoodFun</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">FoodFun</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index1.php" class="nav-link">Home</a></li>
	          
	          <li class="nav-item active"><a href="about1.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact1.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cartpage.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>

			  <li class="nav-item cta cta-colored"><a href="" class="nav-link"><span class="icon-user"><?php echo $_SESSION['name']; ?> </span></a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('images/i1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index1.php">Home</a></span> <span>About us</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

<!--================Cart Area =================-->
      <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
	 <?php
    
    if ($result->num_rows > 0) {
     
        $i=1;
   // while ($row = $result -> fetch_row()) {
          while($row = $result->fetch_assoc()) {
    
    
    ?><br><br>
    
                                  <!--<div class="product" id="<?php echo $i ?>">-->
						      <tr class="text-center">
                                
                                  <form action="phpfiles/removecart.php" method="get" id="my_form<?php echo $i ?>">
						        <td class="product-remove">
						        <a  href="javascript:{}" onclick="document.getElementById('my_form<?php echo $i ?>').submit();" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span class="ion-ios-close"></span>
                                    </a></td>
						        <td class="image-prod"><img width="100px" height="100px" src="images/<?php echo $row["img"]?>" alt="Product"/></td>
                                <!--
                                    						        <td class="image-prod"><img class="img=fluid" src="images/<?php echo $row[7]?>" alt="Product"/></td>

                                -->

						        
						        <td class="product-name">
						        	<?php 
                                     echo "<h3>".$row["name"]."</h3>";
                                     echo "<p>".$row["description"]."</p>"
                                        ?>
						        	
						        </td>
						        
						        <td class="price"><?php
                                         echo "<h5>".$row["cost"]."</h5>";
                                    ?></td>
						        
						        <td class="quantity">
                                    <form action="phpfiles/updatecart.php" method="get" id="my_form<?php echo $i ?>">
                                        <input type="hidden" id="pid" name="pid" value="<?php echo $row["pid"]; ?>">
                                        <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">

						        	<div class="input-group col-md-5">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="ion-ios-remove"></i>
	                	</button>
	            	</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value=
                           <?php
                                         echo $row["quantity"];
                                    ?>
                           min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="" onclick="document.getElementById('my_form1').submit();" >
	                     <i class="ion-ios-add"></i>
	                 </button>
	             	</span>
	          	</div>
                                    </form>
					          </td>
						        
						        <td class="total"><?php
                                         echo "<h5>".$row["cost"]*$row["quantity"]."</h5>";
                                            ?>
                                </td>
						      </tr><!-- END TR-->
                                  <form action="checkout_kastu.php" method="get" id="my_form2">
            <input type="hidden" id="id" name="id" value="<?php echo $row["id"]; ?>">

       <!-- </div>-->
     
        
         <?php
              $totalPrice= $totalPrice + ($row["cost"]*$row["quantity"]);
                 }
    }
                                
        
                ?>
        <tr> 
             
            <div align="right">
            <td align="right">Total price</td>
            <td align="right"><?php echo "<h5>".$totalPrice."</h5>";  ?>
                </td> 
            </div>
            
                
            <td><button type="button"><a  href="index1.php">Back to Shopping</a></button></td>
            <td><!--<button type="button"><a  href="phpfiles/checkout.php">Proceed to Checkout</a></button>-->
                <button type="button" data-field="" onclick="document.getElementById('my_form2').submit();" >
	                    Proceed to Checkout
	                 </button>
</td>
            </form>
        </tr>
       </tbody>
                            

			      
    		

		
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>
                            
        
    
  </body>
</html>