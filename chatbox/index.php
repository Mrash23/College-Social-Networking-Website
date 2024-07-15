
<html>
<head>
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link rel="icon" type="image/png" sizes="32x32" href="/CollegeNetworkingSystem-master/img/e64aa08ba94a4c45ac4196e30020c3de.png">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Chat Box</title>
<style>
h1 {
  font-size: 2.5em; /* 40px/16=2.5em */
}

h2 {
  font-size: 1.5em; /* 30px/16=1.875em */
  text-align: center;

 }
 body {
  background: url('/CollegeNetworkingSystem-master/img/msgbg(1).jpg') no-repeat center center fixed;
 
  background-size: 100% 100%;

}

</style> 
<div id="container">
	<div class="header">
		<h1>MESSAGES</h1>
        
	</div>
    
	<div class="main">
		<?php
            session_start();
                if(!isset($_SESSION['username'])){
        ?>
	<form name="form2" method="post" action="login.php">
		<?php 
            if(isset($_GET['message'])){ 
                $message=$_GET['message'];
                echo "<h3>$message</h3>";
            }
        ?>
    <h3>
    <table>
    <tr>
        <td><input type="text" name="username" placeholder="Username"></td>
        <td><input type="password" name="password" placeholder="Password"></td>
        <td><input type="submit" name="submit" value="Login"></td>
    </tr>
    </table>
    </h3>
 
	</form>
    <h2>....Sign Up To access Messages....</h2>
    <h4>
    	<form method="post" action="register.php">
        <input type="text" name="username" placeholder="Enter Username" style="width:250px;"></br>
        <input type="password" name="password" placeholder="Enter Password" style="width:250px";></br>
        <input type="password" name="confirm" placeholder="Confirm Password" style="width:250px";></br>
        <input type="email" name="email" placeholder="Enter Registered Email" style="width:250px";></br>
        <input type="submit" name="submit" value="Submit">
        </form>
    </h4>
    <?php 
            if(isset($_GET['message1'])){ 
                $message=$_GET['message1'];
                echo "<h5>$message</h5>";
            }
    ?>
	<?php
        exit;
        }
    
    ?>

	<?php 
                if(isset($_GET['username'])){
                $_GET['username'];
                }
    ?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>

	function submitchat(){
		if(form1.msg.value == ''){ //exit if one of the field is blank
			alert('Enter your message !');
			return;
		}
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest(); //http request instance
		
		xmlhttp.onreadystatechange = function(){ //display the content of insert.php once successfully loaded
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; //the chatlogs from the db will be displayed inside the div section
			}
		}
		xmlhttp.open('GET', 'insert.php?msg='+msg, true); //open and send http request
		xmlhttp.send();
        form1.msg.value='';
	}
	$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
		});
		
	</script>
</head>
<body>
<h3><a href="logout.php">Logout</a></h3>
<h2>Welcome to STUDIRCLE! @<?php echo $_SESSION['username']; ?></h2>
	<div id="chatlogs">
    	LOADING CHATLOGS, PLEASE WAIT...
    </div>
<form name="form1">
	</br> <textarea name="msg" onkeypress placeholder="Your message here..." style="width:590px; height:30px;"></textarea>
	<a href="#"  onClick="submitchat()" class="button">Send</a></br></br>
</form>
    </div>
</div>
</body>
</html>