<?php

    $email=$_POST['email'];
    $password =$_POST[ 'password'];
   
    $con=new mysqli("localhost","root","","test");
      if($con->connect_error){
        die("Failed to connect:".$con->connect_error);
      }else{
        $result = $con->prepare("SELECT * FROM registration WHERE email='$email'");
        $result->execute();
        $stmt_result=$result->get_result();
if($stmt_result->num_rows>0 || password_verify($password, $res['password1'])){
	$res = $stmt_result->fetch_assoc();

          echo "<h2>Login Successfully</h2>";
          $sql="update verification SET value=1 where usertype='student'";
          $stmt = $con->prepare($sql);
          $stmt->execute();
          $sql="update verification SET email='$email' where usertype='student'";
          $stmt = $con->prepare($sql);
          $stmt->execute();
          header("location:/CollegeNetworkingSystem-master/welcomepagestudents/welcomepage.html");
             }
             else{
                echo "<h2>Invalid Email or password</h2>";
             }
            }
         
            ?>