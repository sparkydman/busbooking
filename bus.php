

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
            		<div class="securetxt"><a href="logout.php"><span>Log out</span></a> </div>
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
<!--- banner-1 ---->
<div class="banner-1">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Bus Ticket System</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- bus-tp ---->
<div class="bus-tp">
</div>
<!--- /bus-tp ---->
<!--- bus-btm ---->
<div class="bus-btm">
	<div class="container">
		<ul>
			<li class="trav"><a href="#">Travels</a></li>
			<li class="dept"><a href="#">Depart</a></li>
			<li class="arriv"><a href="#">Arrive</a></li>
			<li class="seat"><a href="#">Seats</a></li>
			<li class="fare"><a href="#">Fare</a></li>
				<div class="clearfix"></div>
		</ul>
	</div>
</div>
<!--- /bus-btm ---->
<!--- bus-midd ---->
<div class="bus-midd wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
	<div class="container">
	<!--- ul-first  ---->
	
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Abia Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>4 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>   

				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first  ---->
		<!--- ul-first-1 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Enugu Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>3 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>    
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-1 ---->
		<!--- ul-first-2 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Lagos Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>8 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>   
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-2 ----> 


		<!--- ul-first-3 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Abuja Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>6 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>   
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-3 ---->
		<!--- ul-first-4 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Anambra Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>5 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>  
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-4 ---->
		<!--- ul-first-5 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Imo Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>3seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>   
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-5 ---->
		<!--- ul-first-6---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Delta Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>7 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>    
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-6 ---->
		<!--- ul-first-7 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Akwa Ibom Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>5 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>    
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-7 ---->
		<!--- ul-first-8 ---->
		<ul class="first">
			<li class="trav">
				<div class="bus-ic">
					<img src="images/bus.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt">
					<h4>Cross River Charter</h4>
					<p>A/C Sleeper (1+1)</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="dept">
				<div class="bus-ic1">
					<i class="fa fa-clock-o"></i>
				</div>
				<div class="bus-txt1">
					<h4><a href="#">08:10 PM</a></h4>
					<p>Duration</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="arriv">
				<div class="bus-txt2">
					<h4><a href="#">6:10 AM</a></h4>
					<p>10:00 Hrs</p>
				</div>
			</li>
			<li class="seat">
				<div class="bus-ic3">
					<img src="images/seat.png" class="img-responsive" alt="">
				</div>
				<div class="bus-txt3">
					<h4>9 seats</h4>
					<p>Window 4</p>
				</div>
				<div class="clearfix"></div>
			</li>
			<li class="fare">
				<div class="bus-txt4">
					<h4>N5000</h4>
					<a href="#img1" class="view">View Seats</a>
						<div class="lightbox" id="img1">
						  <div class="box">
							<a class="close" href="#">X</a>
								<div class="set-left">
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-2.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set-1">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
									<ul class="set">
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-4.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-5.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-3.png" class="img-responsive" alt=""></a></li>
										<li><a href="#"><img src="images/seat-1.png" class="img-responsive" alt=""></a></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="set-right">
									<ul class="ste1">
										<li><img src="images/seat-2.png" class="img-responsive" alt=""> </li>
										<li><p class="aval">Available Seat</p></li>
										<div class="clearfix"></div>
									</ul>
								</div>
								<div class="clearfix"></div>
						  </div>
						</div>    
				</div>
			</li>
            <li class="fare">
				<div class="bus-txt4">
                    <br>
					<a href="book.php" class="view">Book Now</a>   
				</div>
			</li>
				<div class="clearfix"></div>
		</ul>
		<!--- /ul-first-8 ---->
	</div>
</div>
<!--- /bus-midd ---->
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
											<input type="submit" name="submit" value="SIGNIN">
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