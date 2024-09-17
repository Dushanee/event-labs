<?php
require '../config/connection.php';

//avg rating sp calc
$avg_rating_query = "SELECT AVG(rating) AS avg_rating FROM sp_feedback";
$result = mysqli_query($conn, $avg_rating_query);

$row = $result->fetch_assoc();
$avg_rating = $row["avg_rating"];

$avg_rating_percentage = round($avg_rating * 20);
?>