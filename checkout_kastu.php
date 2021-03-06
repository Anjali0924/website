<!DOCTYPE html>
<html lang="en">
<?php
    
session_start();
require 'init.php';
$id = $_SESSION["id"];
//$id = $_GET["id"];

//$full_path = pathinfo($_SERVER['PHP_SELF']);
  //  $current_filename = $full_path['basename'];
    //$_SESSION["redirectionflag"] = $current_filename;
    
$sql = "SELECT user_cart.kid , user_cart.id , user_cart.pid , product_details.name ,product_details.description, product_details.type , product_details.cost , user_cart.quantity FROM product_details INNER JOIN user_cart ON user_cart.pid = product_details.pid WHERE id = ".$id."";
    
//echo $sql;

//$sql2 = "SELECT * FROM user_details WHERE id =".$id."";
$data = array();    
$result = $conn->query($sql);
//$result2 = $conn->query($sql2);
    
   $total =0;  
    

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
            <h1 class="mb-0 bread">Check Out</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
						<form action="placeorder.php" class="billing-form" method="POST">
							<h3 class="mb-4 billing-heading">Billing Details</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label for="firstname">Firt Name</label>
	                  <input type="text" class="form-control" placeholder="" name="fname" id="fname">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="lastname">Last Name</label>
	                  <input type="text" class="form-control" placeholder="" name="lname" >
	                </div>
                </div>
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="country">State / Country</label>
		            		<div class="select-wrap">
		                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                  <select name="con" id="con" class="form-control">
		                  	
		                    <option value="India">India</option>
		                    
		                  </select>
		                </div>
		            	</div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="streetaddress">Street Address</label>
	                  <input type="text" class="form-control" placeholder="House number and street name" name="street">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                  <input type="text" class="form-control" placeholder="Appartment, suite, unit etc: (optional)" name="street">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label for="towncity">Town / City</label>
	                  <input type="text" class="form-control" placeholder="" name="tow">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label for="postcodezip">Postcode / ZIP *</label>
	                  <input type="text" class="form-control" placeholder="" name="zip">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="phone">Phone</label>
	                  <input type="text" class="form-control" placeholder="" name="phone">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="emailaddress">Email Address</label>
	                  <input type="text" class="form-control" placeholder="" name="email">
	                </div>
                </div>
                    <div class="col-md-6">
	                <div class="form-group">
	                	
	                  <input type="submit" value="submit" class="form-control" placeholder="" >
	                </div>
                </div>
                    
                
                </div>
	            </div>
	          </form><!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Cart Total</h3>
                        <?php 
                                
                                    if ($result->num_rows > 0) {
                                // output data of each row
                                        $i=0;
                                        $total = 0;
                                        while($row = $result->fetch_assoc()) {
                                            
                                            $data[$i] = $row["id"];
                                            $data[$i+1] = $row["pid"];
                                            $data[$i+2] = $row["name"];
                                            $data[$i+3] = $row["cost"];
                                            $data[$i+4] = $row["quantity"];
                                            $data[$i+5] = $row["kid"];
                                            
                                            $i = $i + 6;
                                    
                                            $total = $total + ($row["cost"]*$row["quantity"]);
                                    ?>
                        <p class="d-flex">
		    						<span><?php echo $row["name"];?></span>
		    						<span>₹<?php echo $row["cost"];?>.00</span>
                                    <span> X &nbsp &nbsp (<?php echo $row["quantity"];?>)</span>
		    					</p>
                        <?php
                                             
                                        }
                                    }
                            
                                ?>
	          			
	          			<p class="d-flex">
		    						<span>Subtotal</span>
		    						<span>₹<?php echo $total?>.00</span>
		    					</p>
		    					<p class="d-flex">
		    						<span>Delivery</span>
		    						<span>Flat rate: ₹50.00</span>
		    					</p>
		    					<hr>
		    					<p class="d-flex total-price">
		    						<span>Total</span>
		    							<span>₹<?php echo ($total + 50); ?>.00</span>
		    					</p>
                       
								</div>
	          	</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Payment Method</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="optradio" class="mr-2"> Cash On Delivery</label>
											</div>
										</div>
									</div>
									
									<p><a href="pbutton.php"class="btn btn-primary py-3 px-4">Place an order</a></p>
								</div>
                    
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

		
    <hr style="height:2px;border-width:0;color:gray;background-color:gray">


    <footer class="ftco-footer ftco-section">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">FoodFun</h2>
              <p>Delicious food at your doorsteps</p>
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">

                <li><a href="about1.php" class="py-2 d-block">About</a></li>
                <li><a href="contact1.php" class="py-2 d-block">Contact Us</a></li>
				<li><a href="cartpage.php" class="py-2 d-block">Cart</a></li>
				
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 , Linking Road, Bandra(w)</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 1234567891</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@foodfun.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </footer>
    
    
  

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