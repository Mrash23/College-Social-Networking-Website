<?php 
$db = mysqli_connect("localhost", "root", "", "test");
$result=mysqli_query($db, "select * from demo"); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Assigned Due Dates </title> 
		<link rel="icon" type="image/png" sizes="32x32" href="/CollegeNetworkingSystem-master/img/e64aa08ba94a4c45ac4196e30020c3de.png">
	</head> 
	<body> 
	<style>
            body {
                background: url("/CollegeNetworkingSystem-master/img/huy1.jpg") no-repeat center center fixed;
                background-size: cover;
                display: flex;
			     
                align-items: center;
                justify-content: center;
                padding-top: 90px ;
            }
			table th{
				text-align:center;
				color:#362266;
			}
			tr {
	background: #E9E9E9;
}
            </style>
			
	<table align="center" border="5px" style="width:700px; line-height:40px; border-collapse:collapse; text-align:center "> 
	<tr> 
		<th colspan="4"><h1 style="text-align:center; color:#362266" >Due Dates</h1></th> 
		
		</tr> 
			  <th >ID</th> 
			  <th>Subject/Task</th> 
			  <th>Due date and time</th> 
			
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['id']; ?></td> 
		<td><?php echo $rows['name']; ?></td> 
		<td><?php echo $rows['eventdt']; ?></td> 
		
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>