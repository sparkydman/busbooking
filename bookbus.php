<?php 

require 'database.php';
session_start();
if (!isset($_SESSION['login_id'])) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sign in / Sign up')
            window.location.href='book.php'
            </SCRIPT>");
	exit;
}
if(isset($_POST['booknow'])){
	$Tfrom = $_POST['Tfrom'];
	$Tto = $_POST['Tto'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$id = $_SESSION['login_id'];

	$query = mysqli_query($conn,"INSERT into `booking` (`id`,`Tfrom`,`Tto`,`date`,`time`,`user_id`) values (null,'$Tfrom','$Tto','$date','$time','$id')");
	
	if($query){
		header('location:details.php');
	}else{
		echo "Error: ".mysqli_error($conn);
	}
}




 ?>