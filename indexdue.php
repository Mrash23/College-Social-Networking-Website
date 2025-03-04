<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Due Dates</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/CollegeNetworkingSystem-master/img/e64aa08ba94a4c45ac4196e30020c3de.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
            body {
                background: url("/CollegeNetworkingSystem-master/img/huy1.jpg") no-repeat center center fixed;
                background-size: cover;
                display: flex;
			     
                align-items: center;
                justify-content: center;
                padding-top: 90px ;
            }
</style>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

                <div class="card mt-5">
                    <div class="card-header">
                        <h4 style="text-align:center; color:#362266;font-weight: bold;"><u> Insert Date & Time for Task to be assigned</u></h4>
                    </div>
                    <div class="card-body">

                        <form action="code.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="" style="text-align:center;
				color:#362266; font-weight: bold;">Subject/Task</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="" style="text-align:center;
				color:#362266; font-weight: bold;"> Date & Time</label>
                                <input type="datetime-local" name="event_dt" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                            <center>  <button type="submit" name="save_datetime" class="btn btn-primary">Save Due Date</button> </center>
                                <center>
                                    <h4><a href="/CollegeNetworkingSystem-master/welcomepagestaff/welcomepage.html">Return to home</a></h4>
                </center>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>