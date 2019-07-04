
<?php
 require 'database.php';
    
      session_start();
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
         
        

       $que = mysqli_query($conn,"SELECT email from users where email = '$email'");
       if($que->num_rows > 0){
        echo "<script>alert('The email already exiist')</script>";
        echo "<script>window.open('index.html','_self')</script>";
       }else{
         $query = mysqli_query($conn, "INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`) VALUES (NULL, '$name', '$mobile', '$email', '$password');");

        if($query){
          $que = mysqli_query($conn,"SELECT id from users where email = '$email' limit 1");
          if($que){
           $row = $que->fetch_assoc();
           $_SESSION['login_id']=$row['id'];
          }
          $_SESSION['login_user']=$name;
         $_SESSION['logged_in'] = 1;
          
           echo "<script>alert('Registered !!')</script>";
        echo "<script>window.open('tables.php','_self')</script>";
            }
          else {
             echo "mysql error: ".mysqli_error($conn); 
          }
       }
        
       
   
    ?>