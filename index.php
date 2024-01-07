<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MarigaFarm</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<link rel="stylesheet" href="css/custom.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<?php
		require 'menu.php';
	?>

		<!-- Banner -->
			<section id="banner" class="wrapper">
				<div class="container">
				<h2>MarigaFarm</h2>
				<p>Implementation and design of agricultural tools rental system</p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="6u 12u$(xsmall)">
							<button class="button fit" data-bs-toggle="modal" data-bs-target="#login" style="width:auto">LOGIN</button>
						</div>

						<div class="6u 12u$(xsmall)">
							<button class="button fit" data-bs-toggle="modal" data-bs-target="#register" style="width:auto">REGISTER</button>
						</div>
					</div>
				</center>


			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2>MarigaFarm</h2>
						<p>Explore the new way of trading...</p>
					</header>
					<div class="row 200%">
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-clock-o"></i>
							<p>Digital Market</p>
						</section>
						<section class="4u 12u$(small)">
							<i class="icon big rounded fa-comments"></i>
							<p>Customer support</p>
						</section>
						<section class="4u$ 12u$(small)">
							<i class="icon big rounded fa-user"></i>
							<p>Register with us</p>
						</section>
					</div>
				</div>
			</section>
			<?php
			if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{?>
			<div class="container" id="container">
				<div class="title mb-5 mt-5">
					<h2>Available Products</h2>
				</div>
					<div class="row">
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/prunning-saw.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Prunning Saw</h5>
								  <span class="card-text">Available: 3</span>
									<p class="card-text"> Rental fee: <span>&#8358;1500</span></p>
								
									<a href="request.php?id=1&item_name=Prunning saw&item_price=1500" class="btn btn-primary">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/Small camp shovel with handle isolated on white background with clipping path.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Shovel</h5>
								  <span class="card-text">Available: 14</span>
									<p class="card-text"> Rental fee: <span>&#8358;600</span></p>
									<a href="request.php?id=2&item_name=Shovel&item_price=600" class="btn btn-primary">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/Truper 30293 Tru Tough Spading Fork 4 Tine D Handle 30 Inch Free Shipping.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Spading fork</h5>
								  <span class="card-text">Available: 20</span>
							<p class="card-text"> Rental fee: <span>&#8358;950</span></p>
							<a href="request.php?id=3&item_name=Spading fork&item_price=950" class="btn btn-primary">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/49ffdca9-f4af-419d-ac50-0efde4b0a96b.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Axe</h5>
							<span class="card-text">Available: 7</span>
							<p class="card-text"> Rental fee: <span>&#8358;1000</span></p>
							<a href="request.php?id=4&item_name=Axe&item_price=1000" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/8_ Pruning Shears, Professional Bypass Garden Shear Hand Pruners Gardening Shear.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Prunning Shears</h5>
							<span class="card-text">Available: 13</span>
							<p class="card-text"> Rental fee: <span>&#8358;3000</span></p>
							<a href="request.php?id=5&item_name=Prunning Shears&item_price=3000" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/Garden Hose Holder Hook, Wall Mounted Hose Reel Water Hose Storage Hanger,.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Garden Hose</h5>
							<span class="card-text">Available: 8</span>
							<p class="card-text"> Rental fee: <span>&#8358;2500</span></p>
							<a href="request.php?id=6&item_name=Garden Hose&item_price=2500" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/GroundWork 19_5 in. Fiberglass Handle Mini Shovel at Tractor Supply Co.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Mini Shovel</h5>
							<span class="card-text">Available: 4</span>
							<p class="card-text"> Rental fee: <span>&#8358;1500</span></p>
							<a href="request.php?id=7&item_name=Mini Shovel&item_price=1500" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/Wheel-Barrow.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Wheel Barrow</h5>
							<span class="card-text">Available: 16</span>
							<p class="card-text"> Rental fee: <span>&#8358;800</span></p>
							<a href="request.php?id=8&item_name=Wheel Barrow&item_price=800" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/Kent and Stowe _ Tools and Watering Cans _ Westland Garden Health.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Spade</h5>
							<span class="card-text">Available: 10</span>
							<p class="card-text"> Rental fee: <span>&#8358;500</span></p>
							<a href="request.php?id=9&item_name=Spade&item_price=500" class="btn btn-primary">Request tool</a>
						</div>
						</div>
						</div>
					</div>
	</div>
<?php } else{?>  
	<div class="container" id="container">
				<div class="title mb-5 mt-5">
					<h2>Available Products</h2>
				</div>
					<div class="row">
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/prunning-saw.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Prunning Saw</h5>
								  <span class="card-text">Available: 3</span>
									<p class="card-text"> Rental fee: <span>&#8358;1500</span></p>
									<a href="#" class="btn btn-primary btmodal">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/Small camp shovel with handle isolated on white background with clipping path.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Shovel</h5>
								  <span class="card-text">Available: 14</span>
									<p class="card-text"> Rental fee: <span>&#8358;600</span></p>
									<a href="#" class="btn btn-primary btmodal">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
							<div class="card" style="width: 18rem;">
							  <img class="card-img-top" src="images/pics/Truper 30293 Tru Tough Spading Fork 4 Tine D Handle 30 Inch Free Shipping.jpeg" alt="Card image cap">
							  <div class="card-body">
								  <h5 class="card-title">Spading fork</h5>
								  <span class="card-text">Available: 20</span>
							<p class="card-text"> Rental fee: <span>&#8358;950</span></p>
							<a href="#" class="btn btn-primary btmodal">Request tool</a>
							  </div>
							  </div>
							  </div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/49ffdca9-f4af-419d-ac50-0efde4b0a96b.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Axe</h5>
							<span class="card-text">Available: 7</span>
							<p class="card-text"> Rental fee: <span>&#8358;1000</span></p>
							<a href="#" class="btn btn-primary btmodal">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/8_ Pruning Shears, Professional Bypass Garden Shear Hand Pruners Gardening Shear.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Prunning Shears</h5>
							<span class="card-text">Available: 13</span>
							<p class="card-text"> Rental fee: <span>&#8358;3000</span></p>
							<a href="#" class="btn btn-primary btmodal">Request tool</a>
						</div>
						</div>
						</div>
						<div class="col-lg-4 mb-4">
					  <div class="card" style="width: 18rem;">
						<img class="card-img-top" src="images/pics/Garden Hose Holder Hook, Wall Mounted Hose Reel Water Hose Storage Hanger,.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Garden Hose</h5>
							<span class="card-text">Available: 8</span>
							<p class="card-text"> Rental fee: <span>&#8358;2500</span></p>
							<a href="#" class="btn btn-primary btmodal">Request tool</a>
						</div>
						</div>
						</div>
						</div>
						</div>
					<h3 class="text-center"><button class="btn btn-secondary btmodal">View more product</button> </h3>
	<?php } ?>
		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">MarigaFarm &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">Your product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">MarigaFarm Fam<span>Vormir</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:MarigaFarm@gmail.com" style="color:white">demo@demo.com</a></p>
			</div>
		</div>
				<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b>About MarigaFarm</b></span>
				MarigaFarm is e-commerce site used for making purchase or renting farm tools
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>

	</footer>


								   <!-- modal #1 start-->
								   <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login-modal" aria-hidden="true">
        <div class="modal-dialog">   
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="login-modal">Login</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="Login/login.php" role="form">
                <div class="row mb-4"> 
                  <div class="col-md-12"> 
                  <label for="uname1" class="col-form-label">UserName:</label>
                  <input type="text" name="uname" class="form-control" id="uname1" required>
                </div> 
                <div class="col-md-12">
                  <label for="pass1" class="col-form-label">Password:</label>
                  <input type="text" name="pass" class="form-control" id="pass1" required>
                </div>
			  <div class="row">
			                     <div class="mt-2 mb-4"><b>Category : </b></div>    
			                        <div class="col-md-3">
			                            <input type="radio" id="farmer" name="category" value="1" checked>
			                            <label for="farmer">Farmer</label>
			                        </div>
			                        <div class="col-md-3">
			                            <input type="radio" id="buyer" name="category" value="0">
			                            <label for="buyer">Buyer</label>
			                        </div>
								</div>
              </div>
               <p class="text-center"> <button type="submit" name="submit" id="btn" class="btn btn-success">Login</button></p>
              </form>
            </div>
          </div>
        </div>
      </div>
       <!-- modal #1 end-->
    

						   <!-- modal #2 start-->
     <div class="modal fade" id="register" tabindex="-1" aria-labelledby="register-modal" aria-hidden="true">
        <div class="modal-dialog">   
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="register-modal">Sign Up</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="Login/signUp.php" role="form">
                <div class="row mb-4"> 
                  <div class="col-md-6"> 
                  <label for="name1" class="col-form-label">Name:</label>
                  <input type="text" name="name" class="form-control" id="name1" required>
                </div> 
                <div class="col-md-6">
                  <label for="uname1" class="col-form-label">UserName:</label>
                  <input type="text" name="uname" class="form-control" id="uname1" required>
                </div>
                <div class="col-md-6">
                <label for="mobile1" class="col-form-label">Mobile:</label>
                <input type="text" name="mobile" class="form-control" id="mobile1">
                </div>
              <div class="col-md-6">
                <label for="emqil1" class="col-form-label">Email:</label>
                <input type="text" name="email" class="form-control" id="email1" required>
              </div>  
              <div class="col-md-6">
                <label for="password1" class="col-form-label">Password:</label>
                <input type="text" name="password" class="form-control" id="password1" required>
              </div>  
			  <div class="col-md-6">
                <label for="pass1" class="col-form-label">Retype Password:</label>
                <input type="text" name="pass" class="form-control" id="pass1" required>
              </div> 
			  <div class="col-md-12">
                <label for="addr1" class="col-form-label">Address:</label>
                <input type="text" name="addr" class="form-control" id="addr1" required>
              </div> 
			  <div class="row">
			                     <div class="mt-2 mb-4"><b>Category : </b></div>    
			                        <div class="col-md-3">
			                            <input type="radio" id="farmer" name="category" value="1" checked>
			                            <label for="farmer">Farmer</label>
			                        </div>
			                        <div class="col-md-3">
			                            <input type="radio" id="buyer" name="category" value="0">
			                            <label for="buyer">Buyer</label>
			                        </div>
								</div>
              </div>
               <p class="text-center"> <button type="submit" name="submit" id="btn" class="btn btn-success">Submit</button></p>
              </form>
            </div>
          </div>
        </div>
      </div>
       <!-- modal #2 end-->
<script>
// modal config start
var register = new bootstrap.Modal(document.getElementById('register'), {
  keyboard: false,
  backdrop:false
})
var login = new bootstrap.Modal(document.getElementById('login'), {
  keyboard: false,
  backdrop:false
})
$('.btmodal').click(function(){
	$("#login").modal('show')
})
// modal config end
</script>
</body>
</html>
