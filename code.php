<?php
session_start();
$con = mysqli_connect("localhost","root","","test");

if(isset($_POST['save_datetime']))
{
    $name = $_POST['name'];
    $event_dt = $_POST['event_dt'];

    $query = "INSERT INTO demo (name,eventdt) VALUES ('$name','$event_dt')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Event saved Successfully";
        header("Location: /CollegeNetworkingSystem-master/indexdue.php");
    }
    else
    {
        $_SESSION['status'] = "Date Time Not Inserted";
        header("Location: /CollegeNetworkingSystem-master/indexdue.php");
    }
}
?>