
<?php 
require 'database.php';
session_start();
if(isset( $_SESSION['login_user'])){
$user = $_SESSION['login_user'];

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bus Ticket System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">BUS <span>Ticket System</span></a>	
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
             <li>
            	<?php 
            	if(!isset($_SESSION['login_user'])){
            		?>
            		<div class="securetxt"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a>
                <a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></div>
                <?php
            	}else{
            		?>
            		<div class="securetxt"><span><?php echo $user ."  " ?></span><a href="logout.php"><span>Log out</span></a> </div>
            		<?php

            	}


            	 ?>
            	</li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.php">About</a></li>
								<li><a href="faq.php">Faq</a></li>
								<li><a href="contact.php">Contact Us</a></li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Bus Ticket System</h1>
	</div>
</div>
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa fa-columns"></i>
		<h3>WORLD'S MOST TRAVEL BRAND</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Online Tickets with Zero Booking Fees</h2>
		<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">From</label>
				<input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>
			</div>
			<div class="bnr-left">
				<label class="inputLabel">To</label>
				<input class="city" type="text" value="Enter a city" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter a city';}" required=>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">Date of Journey</label>
				<input class="date" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
			</div>
			<div class="bnr-right">
				<label class="inputLabel">Date of Return<span class="opt">&nbsp;(Optional)</span></label>
				<input class="date" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
			</div>
				<div class="clearfix"></div>
				<!---start-date-piker---->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			<!---/End-date-piker---->
		</div>
		<div class="sear">
			<form action="bus.php">
				<button class="seabtn">Search Buses</button>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--- /banner ---->
<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-truck"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>ROUTES</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>BUS OPERATORS</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>TICKETS SOLD</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /routes ---->
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="bus.php">Abia  Charter </a></li>
					<li><a href="bus.php">Anambra Charter</a></li>
					<li><a href="bus.php">Akwa Ibom Charter</a></li>
					<li><a href="bus.php">Cross River Charter</a></li>
					<li><a href="bus.php">Delta Charter</a></li>
					<li><a href="bus.php">Enugu Charter</a></li>
					<li><a href="bus.php">Imo Charter</a></li>
					<li><a href="bus.php">Lagos Charter</a></li>
					<li><a href="bus.php">Abuja Charter</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="bus.php">Abia-Enugu</a></li>
					<li><a href="bus.php">Anambra-Lagos</a></li>
					<li><a href="bus.php">Akwa Ibom-Cross River</a></li>
					<li><a href="bus.php">Delta-Imo</a></li>
					<li><a href="bus.php">Enugu-Abuja</a></li>
					<li><a href="bus.php">Lagos-Abuja</a></li>
					<li><a href="bus.php">Anambra-Enugu</a></li>
					<li><a href="bus.php">Abuja-Delta</a></li>
					<li><a href="bus.php">Akwa Ibom-Lagos</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2018. All Rights Reserved </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-right">
												<form action="register.php" method="post">
													<h3>Create your account </h3>
													<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" name="mobile" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" name="email" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" name="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form action="login.php" method="post">
											<h3>Signin with your account </h3>
											<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" name="submit1" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
</body>
</html>