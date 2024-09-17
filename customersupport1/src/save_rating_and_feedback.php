<?php
require '../config/connection.php';

if (isset($_POST['rating'])) {
  $rating = $_POST['rating'];
  $feedback = $_POST['feedback'];

  // Escape user inputs to prevent SQL injection
  $rating = $conn->real_escape_string($rating);
  $feedback = $conn->real_escape_string($feedback);

  // Insert data into database
  $sql = "INSERT INTO customer_feedback (rating, feedback) VALUES ('$rating', '$feedback')";

  if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  // Close connection
  $conn->close();
}
?>
