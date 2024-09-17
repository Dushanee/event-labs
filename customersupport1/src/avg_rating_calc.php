<?php
    require '../config/connection.php';

    // include './css/avgrating.css';
    
    // Calculate average rating
    $avg_rating_sql = "SELECT AVG(rating) AS avg_rating FROM customer_feedback";
    $result = $conn->query($avg_rating_sql);
    $row = $result->fetch_assoc();
    $avg_rating = $row["avg_rating"];
    
    // Convert average rating to percentage
    $avg_rating_percent = round($avg_rating * 20);
?>