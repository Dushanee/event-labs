<?php
include ("../config/connection.php");

//start a session to store his login information
session_start();

//Check if the user is logged in
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("Location: ../public/csmprofile.php");
    exit();
}

//Get the logged in user's email from the session variable
$email=$_SESSION['email'];

//Query the database for the user's data
$query="SELECT * FROM users WHERE email=?";
$stmt=$conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result=$stmt->get_result();

//Check if the query returned the matching row
if($result->num_rows==1) {
    //fetch the row as an associative array
    $row=$result->fetch_assoc();

    //Display the user's pro_pic, fname, lname and email
    echo "<img src='".htmlspecialchars($row['pro_pic'])."' alt='Profile Picture'>";
    echo "<p>First Name: ". htmlspecialchars($row['fname'])."</p>";
    echo "<p>Last Name: ". htmlspecialchars($row['lname'])."</p>";
    echo "<p>Email: ". htmlspecialchars($row['email'])."</p>";
} else {
    //if the query did not return a matching row, show an error message
    echo "Error: User not found.";
}

//close the connection
$stmt->close();
$conn->close();
?>