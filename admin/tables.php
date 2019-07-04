<?php
session_start();
$db_host = 'localhost'; 
$db_user = 'root'; 
$db_pass = ''; 
$db_name = 'busbooking'; 

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT users.name, users.mobile, users.email, booking.Tfrom, booking.Tto, booking.date, booking.time
        FROM users, booking 
        WHERE users.id = user_id
        ORDER BY users.id
        LIMIT 0, 30';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<head>
<title>BUS BOOKING SYSTEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="../css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
<script>
	$(function () {
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#toggle').click(function () {
			screenfull.toggle($('#container')[0]);
		});	
	});
</script>
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">Dashboard</span>
				</a>
			</li>
            <li>
				<a href="#">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Calendar</span>
				</a>
			</li>
            <li>
				<a href="signup.html">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Sign Up Page</span>
				</a>
			</li>
            <li>
				<a href="index.html">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Login Page</span>
				</a>
			</li>
			<li>
				<a href="tables.php">
					<i class="icon-table nav-icon"></i>
					<span class="nav-text">
					Booking Details
					</span>
				</a>
			</li>
		</ul>
		<ul class="logout">
			<li>
			<a href="index.html">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
	<section class="wrapper scrollable">
		<nav class="user-menu">
			<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
			</a>
		</nav>
		<section class="title-bar">
				<div class="header">
                    <div class="container">
                        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
                            <a href="index.html">BUS <span>Ticket System</span></a>	
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        <div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
		</section>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- tables -->
				
				<div class="table-heading">
					<h2>Booking Details</h2>
				</div>
				<div class="agile-tables">
					<div class="w3l-table-info">
					  
					    <table id="table">
						<thead>
						  <tr>
							<th>Name</th>
							<th>Phone No</th>
							<th>EMail Address</th>
							<th>Travelling From</th>
							<th>Travelling To</th>
							<th>Date</th>
                            <th>Time</th>
						  </tr>
						</thead>
                        <tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$row['name'].'</td>
					<td>'.$row['mobile'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['Tfrom'].'</td>
                    <td>'.$row['Tto'].'</td>
                    <td>'. date('F d, Y', strtotime($row['date'])) . '</td>
                    <td>'.$row['time'].'</td>
					
				</tr>';
		}?>
		</tbody>
						
					  </table>
				</div>
				<!-- //tables -->
			</div>
		</div>
		
	</section>
	<script src="js/bootstrap.js"></script>
	
</body>
</html>
