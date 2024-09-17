<?php
require '../config/connection.php';
session_start();


if (isset($_POST['submit'])) {

    $_SESSION['title'] = $_POST['title'];
    $_SESSION['description'] = $_POST['description'];

    $title = $_SESSION['title'];
    $description = $_SESSION['description'];

    }
    //validate data

    //end of validation

    $query = "INSERT INTO privacy_policy (title, description) VALUES ('$title', '$description')";
    
    if (mysqli_query($conn, $query)) {
        $message = "New policy was successfully added.";
        $class = "success";
        echo $message;
    }else {
        $message = "Error: " . $query . "<br>" . mysqli_error($conn);
        $class = "error";
        echo $message;
    }


?>