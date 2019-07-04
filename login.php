<?php 

    session_start();
    
       require 'database.php';


    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['logged_in']=$email; 
   
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$query) or die ("Verification error");
    $row = mysqli_fetch_array($result);

    
    
    if(empty($email)||empty($password)) {
	echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Please fill the required fields')
            </SCRIPT>");
    exit;
}
	else if($row["email"]==$email && $row["password"]==$password) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["login_id"] = $row["id"];
         $_SESSION["login_user"] = $row['name'];
		 $_SESSION["email"] = $email;
         $_SESSION['logged_in'] = 1;
        if(isset($_POST['submit'])){
            header("Location:details.php");
        }
         elseif(isset($_POST['submit1'])){
            header("Location:index.php");
        }

		

	}
else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Wrong Email or Password')
            </SCRIPT>");
	}

   
?>