<?php
require '../config/connection.php';
session_start();

//searching
if (isset($_POST['search_term'])) {
  $search = mysqli_real_escape_string($conn, $_POST['search_term']);
  $query = "SELECT * FROM privacy_policy WHERE title LIKE '%$search%'";
  $result = mysqli_query($conn, $query);

  //check if there is any policies matching the search term
  if (mysqli_num_rows($result) > 0) {
    //output the policies in the database
    echo "<table>";
    // echo "<tr><th>Title</th><th>Description</th></tr>";
      while ($row = mysqli_fetch_assoc ($result)) {
        echo "<tr><td>".$row['title']."</td></tr>"."<tr><td>".$row['description']."</td></tr>";
      }
    echo "</table>";
  }else {
    echo "No policies found.";
  }
}


//update form begins here
if (isset($_POST['policy_id'])) {
  $sql = "SELECT * FROM privacy_policy WHERE policy_id = '$policy_id'";
  $result_here = mysqli_query($conn, $sql);

  //checking if the policy exists
  if(mysqli_num_rows($result_here) == 1) {
    //get the policy data
    $row = mysqli_fetch_assoc($result_here);
    $title = $row['title'];
    $description = $row['description'];

    //display the edit form
    echo "<form method=\"POST\" action= \"\">";   //why these backword slashes? (\)
    echo "<input type=\"number\" name=\"policy_id\" value=\"$policy_id\">";
    echo "Title:<br>";
    echo "<input type=\"text\" name=\"title\" value=\"$title\"><br>";
    echo "Description:<br>";
    echo "<textarea name=\"description\">$description</textarea><br>";
    echo "<input type=\"submit\" name=\"submit\" value=\"Update\">";
    echo "</form>";
  }else {
    echo "Policy not found.";
  }
}


if (isset($_POST['submit'])) {
  if (isset($_POST['policy_id'])) {
    $_SESSION['policy_id'] = $_POST['policy_id'];
  }
  if (isset($_POST['title'])) {
    $_SESSION['title'] = $_POST['title'];
  }
  if (isset($_POST['description'])) {
    $_SESSION['description'] = $_POST['description'];
  }

  $policy_id = isset($_SESSION['policy_id']) ? $_SESSION['policy_id'] : '';
  $title = isset($_POST['title']) ? $_POST['title'] : '';
  $description = isset($_POST['description']) ? $_POST['description'] : '';

  $update_query = "UPDATE privacy_policy SET title = '$title', description = '$description' WHERE policy_id = '$policy_id';";
  $update_result = mysqli_query($conn, $update_query);

  if ($update_result) {
    echo "Policy updated successfully.";
  }else {
    echo "Error updating policy." . mysqli_error($conn);
  }
}

mysqli_close($conn);

?>