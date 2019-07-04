
<?php

require '../database.php'; 
      
        $username = $_POST['username'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        $que = mysqli_query($conn,"SELECT username from idadmin where username = '$username'" );
       if($que->num_rows > 0){
        echo "<script>alert('The user already exiist')</script>";
        echo "<script>window.open('signup.html','_self')</script>";
       }else{
       
        
        $query = "INSERT INTO `idadmin` (`id`, `username`, `phone`, `email`, `password`) VALUES (NULL, '$username', '$phone', '$email', '$password');";
       
        $result = mysqli_query($conn,$query); 
        
        if($result){
            $_SESSION['login_user']=$name;
           echo "<script>alert('Registered !!')</script>";
          header('location: tables.php');
            }
          else {
             echo "Mysql Error: ".mysqli_error($conn); 
          }
   
   }
    ?>