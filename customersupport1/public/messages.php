<?php

include '../config/connection.php';

session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Messages</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/review-cards.css">
<link rel="stylesheet" href="./css/navbar.css">
</head>
<body>

<div class="name_of_the_page">
    <h2 class="page_name">Customer Forums</h2>
</div>

<?php

$query_2 = "SELECT * FROM customer_forum INNER JOIN customers ON customer_forum.cust_Id = customers.cust_id";
$result_2=mysqli_query($conn, $query_2);

echo '<div class="wrapper">';

       $j = 0;

        if($result_2 == true){
         if(mysqli_num_rows($result_2)>0){
             while($row = mysqli_fetch_assoc($result_2)){
               $cust_id  = $row['cust_id']; 
               $cust_email  = $row['cust_email'];  
               $forum_subject = $row['forum_subject'];
               $forum_message = $row['forum_message'];
               $time_stamp = $row['time_stamp'];
               
               
               $j++;

                       echo 
                       "<a href='reply.php'>".
                       "<div class='review-card'>".
                       "<div class='cust_email'>".
                         "<h4><b>".$cust_email."</b></h4>".
                         "</div><br />".

                         "<p>".$forum_subject."</p>".
                         "<p>".$forum_message."</p>".
                         "<p>".$time_stamp."</p>".

                         "</div></a><br />";
                         "</a>";
                    }
                    echo '</div>'; 
                }
            }         

      ?>
      
<?php 
  mysqli_close($conn);
?>



</div>

</body>
</html>

<?php

?>