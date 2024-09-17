<?php
$servername="localhost";
$hostspec="root";
$password="";
$database="eventslab";

//create connection
$conn=new mysqli($servername, $hostspec, $password, $database);

//check connection
if($conn->connect_error){
    die('Connection failed: ' . $conn->connect_error);
}
//echo "Connected successfully.";
?>