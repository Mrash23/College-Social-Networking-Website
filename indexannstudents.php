<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "test");
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Announcements</title>
	<link rel="icon" type="image/png" sizes="32x32" href="/CollegeNetworkingSystem-master/img/e64aa08ba94a4c45ac4196e30020c3de.png">
	<link rel="stylesheet" type="text/css" href="styleannstudents.css">
</head>
<style>
body {
  background: url('/CollegeNetworkingSystem-master/img/bg3.jpg') no-repeat center center fixed;
 
  background-size: 100% 100%;

}
/* table{
	text-align: center;
	border:5px;
} */
table th{
	font-size: 19px;
	color: #362266;
	text-align: center;
	
}
tr {
	background: #E9E9E9;
}
</style>
<body>

	
		<h1 style="text-align:center; color:#362266;" >Announcements</h1>
	
	<form method="post" action="indexannstudents.php" class="input_form">
	
	<?php if (isset($errors)) { ?>
		<p><?php echo $errors; ?></p>
	<?php } ?>
		
	</form>
	
<table>
<thead>
	<tr>
		<th >No.</th>
		<th>Tasks Assigned</th>
		
	</tr>
</thead>

<tbody style="text-align:center">
	<?php 
	// select all tasks if page is visited or refreshed
	$tasks = mysqli_query($db, "SELECT * FROM tasks");

	$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
		<tr style="backgroud-color:white">
			<td class="task" style="text-align:center" > <?php echo $i; ?> </td>
			<td class="task" style="text-align:center"> <?php echo $row['task']; ?> </td>
			
		</tr>
	<?php $i++; } ?>	
</tbody>
</table>
</body>
</html>