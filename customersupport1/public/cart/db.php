<?php
$conn = mysqli_connect("localhost","root","","eventslab");
	if (mysqli_connect_errno()){
		echo "Failed to connect to database: " . mysqli_connect_error();
		die();
		}
?>