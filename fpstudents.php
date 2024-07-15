<?php
     $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password =$_POST[ 'password'];
    $hash = password_hash($password,  
           PASSWORD_DEFAULT); 
   
    $con=new mysqli("localhost","root","","test");
      if($con->connect_error){
        die("Failed to connect:".$con->connect_error);
      }else{
        $stmt= $con->prepare("select * from registration where BINARY email='$email'");
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows > 0 ){
            $data= $stmt_result->fetch_assoc(); 
                  
            
             if($data['mobile'] === $mobile){
                echo"1";
                $stmt= $con->prepare("UPDATE registration SET password1='$hash' WHERE email='$email'");
                $stmt->execute();
          header("location:/CollegeNetworkingSystem-master/loginnew.html");
             }
           
             
            }
           
        
        
    }
            ?>