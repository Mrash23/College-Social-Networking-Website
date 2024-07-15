<?php
$con=new mysqli("localhost","root","","test");
	 $sql="update verification SET value=0 where usertype='admin'";
     $stmt = $con->prepare($sql);
     $stmt->execute();
     $sql="update verification SET email=null where usertype='admin'";
     $stmt = $con->prepare($sql);
     $stmt->execute();
	header("location: /CollegeNetworkingSystem-master/firstpage/start.html");
	// $this->cache->clean();
?>