<?php
if(isset($_POST['submit'])){
	
	require("db/db.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	 $hash = password_hash($password,  
           PASSWORD_DEFAULT); 
	$confirm = $_POST['confirm'];
	$email=$_POST['email'];


	$specialChars1 = preg_match('@[^\w]@', $username);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);

	
    if($password != $confirm){
		$message = "Password doesn't match !";
		header("location: index.php?message1=$message");
	}else if($email ==NULL){
        $message = "Enter your registered email";
		header("location: index.php?message1=$message");
	}
	
	else {
		$check = mysqli_query($con, "SELECT * FROM login WHERE username='$username'");
		$check1= mysqli_query($con, "SELECT * FROM login WHERE email='$email'");
		$check2=mysqli_query($con, "SELECT * FROM registration WHERE email='$email'");
		if(!$specialChars1 ) {
			$message= 'Username should include one special character.';
			header("location: index.php?message1=$message");
		  }else if(mysqli_num_rows($check)){
			$message = "Username already exist.";
			header("location: index.php?message1=$message");
		}else if(mysqli_num_rows($check1)){
			$message = "Username registered with this Email already exist.";
			header("location: index.php?message1=$message");
        }
		else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$message= 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
			header("location: index.php?message1=$message");
		  }
		else if(!mysqli_num_rows($check2)){
			$message = "Enter a valid Email";
			header("location: index.php?message1=$message");
		}
		else{
			mysqli_query($con, "INSERT INTO login(username, password,email) VALUES('$username', '$hash','$email')");
			$message = "You have successfully registered. Sign in now.";
			header("location: index.php?message1=$message");
		}
	}
}
?>