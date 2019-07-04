<?php 

    session_start();
    
        require '../database.php'; 


    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $query = "SELECT * FROM idadmin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn,$query) or die ("Verification error");
    $array = mysqli_fetch_array($result);
    
    if ($array['username'] == $username){
       header('Location: tables.php');
            
    }
    
    else{
       
       echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Sign in / Sign up')
            window.location.href='index.html'
            </SCRIPT>");
    exit;
        
        
    }
   
?>