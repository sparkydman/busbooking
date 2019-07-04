<?php
session_start();

if (isset($_POST['bustdetails'])===true) {
 if (isset($_SESSION['logged_in']) == 1) {
    header('Location: payment.php');
     exit;
 } else { 
       echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sign in / Sign up')
            window.location.href='details.php'
            </SCRIPT>");
 }
}



$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'busbooking'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM booking ORDER BY id DESC LIMIT 1';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
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
			<a href="index.html">BUS <span>Ticket System</span></a>	
		</div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
            <li><div class="securetxt"><a href="logout.php" >Logout</a>
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
							<li><a href="about.html">About</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="contact.html">Contact Us</a></li>
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

    <div class="container-fluid">
        <div class="card" style="width: 50%; border: 0.5px solid green;margin:20px auto;" >
            <div class="card-body" align="center" style="margin-bottom:20px;">
               <h2> Enter Payment Information</h2>
            </div>
            <form method="post" action="#" class="form-group">
            <table>
                <tr>
                    <td width="30%">
                       <label class="col-sm-6 control-label" for="card-holder-name">Name on Card</label>
                                          <div class="col-sm-12">
                                                    <input type="text" class="form-control" stripe-data="name"
                                                           id="name-on-card" placeholder="Card Holder's Name" required>
                                                </div></td>
                </tr>
                <tr>
                    <td width="30%">
                       <label class="col-sm-6 control-label" for="card-number">Card Number</label>
                                          <div class="col-sm-12">
                                                   <input type="text" class="form-control" stripe-data="number"
                                                           id="card-number" placeholder="Debit/Credit Card Number" required>
                                                </div></td>
                </tr>

                <tr>
                    <td width="30%">
                       <label class="col-sm-6 control-label" for="expiry-month">Expiration Date</label>
                                          
                        <div class="col-sm-9">
                                                        <div class="row">
                                                            <div class="col-xs-3">
                                                                <select class="form-control col-sm-2"
                                                                        data-stripe="exp-month" id="card-exp-month"
                                                                        style="margin-left:5px;" required>
                                                                    <option>Month</option>
                                                                    <option value="01">Jan (01)</option>
                                                                    <option value="02">Feb (02)</option>
                                                                    <option value="03">Mar (03)</option>
                                                                    <option value="04">Apr (04)</option>
                                                                    <option value="05">May (05)</option>
                                                                    <option value="06">June (06)</option>
                                                                    <option value="07">July (07)</option>
                                                                    <option value="08">Aug (08)</option>
                                                                    <option value="09">Sep (09)</option>
                                                                    <option value="10">Oct (10)</option>
                                                                    <option value="11">Nov (11)</option>
                                                                    <option value="12">Dec (12)</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <select class="form-control" data-stripe="exp-year"
                                                                        id="card-exp-year" required>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                </select>
                                                            </div>

                                                    <div class="col-sm-6">
                                                        <label class="col-sm-6 control-label" for="cvv">Card CVC</label>
                                                        <input type="text" class="form-control" stripe-data="cvc"
                                                               id="card-cvc" placeholder="Security Code" required>
                                                    </div>
                                                        </div>
                                                    </div>

                                          </td>
                </tr>

            </table>
            <br/>
            <div align="center">
                <button type="submit" class="btn btn-success btn-lg" id="pay" align="center">Pay Now</button>
                <script type="text/javascript">
                    $('#pay').click(function(){
                        alert('Booking successful... thank you for your patronage !!');
                        window.open('index.php');
                    });
                </script>
            </div>
            
             <br/>
                                        <div style="text-align: left;"><br/>
                                            By submiting this order you are agreeing to our <a href="/legal/billing/">universal
                                            billing agreement</a>, and <a href="/legal/terms/">terms of service</a>.
                                            If you have any questions about our products or services please contact us
                                            before placing this order.
                                        </div>
            </form>
        </div>
        
    </div>


    
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="bus.html">Abia  Charter </a></li>
					<li><a href="bus.html">Anambra Charter</a></li>
					<li><a href="bus.html">Akwa Ibom Charter</a></li>
					<li><a href="bus.html">Cross River Charter</a></li>
					<li><a href="bus.html">Delta Charter</a></li>
					<li><a href="bus.html">Enugu Charter</a></li>
					<li><a href="bus.html">Imo Charter</a></li>
					<li><a href="bus.html">Lagos Charter</a></li>
					<li><a href="bus.html">Abuja Charter</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="travels.html">Abia-Enugu</a></li>
					<li><a href="travels.html">Anambra-Lagos</a></li>
					<li><a href="travels.html">Akwa Ibom-Cross River</a></li>
					<li><a href="travels.html">Delta-Imo</a></li>
					<li><a href="travels.html">Enugu-Abuja</a></li>
					<li><a href="travels.html">Lagos-Abuja</a></li>
					<li><a href="travels.html">Anambra-Enugu</a></li>
					<li><a href="travels.html">Abuja-Delta</a></li>
					<li><a href="travels.html">Akwa Ibom-Lagos</a></li>
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
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2017. All Rights Reserved </p>
	</div>
</div>
<!--- /copy-right ---->

</body>
</html>