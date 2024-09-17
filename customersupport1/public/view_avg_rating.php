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

// Display average rating to user
echo '<div class="average-rating">';
echo '<div class="average-rating-text">Average rating:</div>';
echo '<div class="average-rating-value">' . $avg_rating_percent . '%</div>';
echo '<div class="average-rating-stars" style="--rating: ' . $avg_rating_percent . ';"></div>';
echo '</div>';

// Close connection
$conn->close();
?>
