<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "test");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO tasks (task) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location:  /CollegeNetworkingSystem-master/indexannstaff.php');
		}
	}	
// delete task
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM tasks WHERE id=".$id);
	header('location:  /CollegeNetworkingSystem-master/indexannstaff.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Announcements</title>
	<link rel="icon" type="image/png" sizes="32x32" href="/CollegeNetworkingSystem-master/img/e64aa08ba94a4c45ac4196e30020c3de.png">
	<link rel="stylesheet" type="text/css" href="styleann.css">
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
	<form method="post" action="indexannstaff.php" class="input_form" style="background: #E9E9E9;border: 1px solid #362266;" >
	<?php if (isset($errors)) { ?>
		<p><?php echo $errors; ?></p>
	<?php } ?>
		<input type="text" name="task" class="task_input" style="	width: 40%;
	height: 15px; 
	margin-left: 350px;
	border: 2px solid #362266;">
		<button type="submit" name="submit" id="add_btn" class="add_btn" style="height: 39px;
	background: #E9E9E9;;
	color: #362266;
	border: 2px solid #362266;
	border-radius: 5px; 
	padding: 5px 20px;">Add Task</button>
		<center><h3><a href="/CollegeNetworkingSystem-master/welcomepagestaff/welcomepage.html">Return</a></h3></center>
	</form>
	
<table>
<thead>
	<tr>
		<th>No.</th>
		<th>Tasks</th>
		<th style="width: 60px;">Action</th>
	</tr>
</thead>

<tbody>
	<?php 
	// select all tasks if page is visited or refreshed
	$tasks = mysqli_query($db, "SELECT * FROM tasks");

	$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
		<tr>
			<td> <?php echo $i; ?> </td>
			<td class="task" style="text-align:center"> <?php echo $row['task']; ?> </td>
			<td class="delete"> 
				<a href="indexannstaff.php?del_task=<?php echo $row['id'] ?>">x</a> 
			</td>
		</tr>
	<?php $i++; } ?>	
</tbody>
</table>
</body>
</html>