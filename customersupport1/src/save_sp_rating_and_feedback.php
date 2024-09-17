<?php
require '../config/connection.php';

if(isset($_POST['rating'])) {
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];


   //Escape user inputs to prevent sql injection
   $rating = $conn->real_escape_string($rating);
   $feedback = $conn->real_escape_string($feedback);

   //insert into db.
   $sql = "INSERT INTO sp_feedback (rating, feedback) VALUES ('$rating', '$feedback')";
   $result=mysqli_query($conn, $sql);

   if ($result == true) {
    echo "Data saved successfully";
   }else {
    echo "Error: " . mysqli_error($conn);
   }

}

mysqli_close($conn);
?>