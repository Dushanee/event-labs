<?php
    require '../config/connection.php';

    //session_start();

    $notification = $_POST["notification"];

    $query = "INSERT INTO notifications (notification)
    VALUES ('$notification')";

    if($conn->query($query)===TRUE) {
        echo "New notification sent successfully.";
        //header('../public/notification-store.php?cheer=New notification sent successfully.');
        header('../public/notification-store.php');
        exit();
    } else {
        echo "Error: ".$query."<br>".$conn->error;
        //header('../public/notification-store.php?error=Something went wrong. Please try again.');
        header('../public/notification-store.php');
        exit();
    }

    $conn->close();
?>