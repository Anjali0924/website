<?php
session_start();
require 'init.php';
$query = $conn->query("SELECT * FROM product_details");
$id = $_SESSION["id"];
?>



<!DOCTYPE html>
<html lang="en">
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
  <body class="goto-here">
		
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">FoodFun</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index1.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about1.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact1.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="cartpage.php" class="nav-link"><span class="icon-shopping_cart"></span></a></li>
			  <li class="nav-item cta cta-colored"><a class="nav-link"><span class="icon-user"><?php echo $_SESSION['name']; ?> </span></a></li>
			<li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
			  
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image: url(images/i1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	              <h1 class="mb-2">Are you hungry?</h1>
	              <h2 class="subheading mb-4">Order food Now!!!</h2>
	              <p><a href="shop.php" class="btn btn-primary">View</a></p>
	            </div>

	          </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image: url(images/i2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-sm-12 ftco-animate text-center">
	              <h1 class="mb-2">Greate food and high quality</h1>
	              <h2 class="subheading mb-4">We deliver to your doorsteps</h2>
	              <p><a href="about1.php" class="btn btn-primary">View Details</a></p>
	            </div>

	          </div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row no-gutters ftco-services">
		<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Max Safety</h3>
                <span>Contactless Delivery</span>
              </div>
            </div>    
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-shipped"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Free Shipping</h3>
                <span>On order over $100</span>
              </div>
            </div>      
          </div>
          
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-award"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <span>Quality Products</span>
              </div>
            </div>      
          </div>
          <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services mb-md-0 mb-4">
              <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            		<span class="flaticon-customer-service"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Support</h3>
                <span>24/7 Support</span>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>

		
		
    <section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">TASTE OUR DELICACY</span>
            <h2 class="mb-4">Our Products</h2>
            
          </div>
        </div>   		
    	</div>
    	<div class="container">
            
            <div class="row">
    		<?php
                if ($query->num_rows > 0) {
                        // output data of each row
                        $i=1;
                        while($row = $query->fetch_assoc()) {
            ?>
                <!--  8 products in row -->
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="product" id="<?php echo $i ?>">
    					<a href="#" class="img-prod"><img class="img-fluid" src="images/<?php echo $row["img"]?>" alt="Colorlib Template">
    						
    						<div class="overlay"></div>
    					</a>
    					<div class="text py-3 pb-4 px-3 text-center">
    						<h3><a href="#"><?php echo $row["name"] ?></a></h3>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"><span class="mr-2 price-dc"><?php echo $row["cost"]+40 ?></span><span class="price-sale"><?php echo $row["cost"] ?></span></p>
		    					</div>
                                 
	    					</div>
                            
	    					<div class="bottom-area d-flex px-3">
	    						<div class="m-auto d-flex">
	    							 
	    							<form action="phpfiles/addtocartprocess.php" method="get" id="my_form<?php echo $i ?>">
	             	<input type="text" placeholder="Enter quantity" name="quantity" class="form-control input-number" min="1" max="100">
                                      
                                        <input type="hidden" id="pid" name="pid" value="<?php echo $row["pid"] ?>">
                                        <input type="hidden" id="id" name="id" value="<?php echo $row["id"]+1 ?>">
                                       
                                        
                                        <a  href="javascript:{}" onclick="document.getElementById('my_form<?php echo $i ?>').submit();" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>

                                    </form>
                                    
	    							 
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		
            <?php
                            $i++;
                        }
                        
                }else {}
            ?>
            </div>
            
            
             
    	</div>
    </section>
      
      
            
		
		
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
    
  </body>
</html>