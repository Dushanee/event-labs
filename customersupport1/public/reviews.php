<?php

include '../config/connection.php';
session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

                            // $_SESSION['cust_id'] = $_row['cust_id'];
                            // $_SESSION['cust_email'] = $_row['cust_email'];

                            //echo $_SESSION['cust_email'];



// $query_2 = "SELECT * FROM reviews INNER JOIN customers ON reviews.cust_Id = customers.cust_id";
// $result_2=mysqli_query($conn, $query_2);


?>

<!DOCTYPE html>
<html>
<head>
<title>Reviews</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/review-cards.css">
<link rel="stylesheet" href="./css/navbar.css">
</head>
<body>
<?php include '../public/top-bar.php';?>

<div class="navbar">
            <ul>
                <li>
                    <a class= "active" href="./home.php">
                        <div class="ico"><i class="fi fi-sr-apps"></i></div>
                        <div class="icon_name">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="./team.php">
                        <div class="ico"><i class="fa fa-users" aria-hidden="true"></i></div>
                        <div class="icon_name">Team</div>
                    </a>
                </li>
                <li>
                    <a href="./forums.php">
                        <div class="ico"><i class='bx bxs-message' style="font-size: 18px; display: inline-block;"aria-hidden="true"></i></i></div>
                        <div class="icon_name">Forums</div>
                    </a>
                </li>
                <li>
                    <a href="./reviews.php">
                        <div class="ico"><i class="fa fa-bookmark" aria-hidden="true"></i></div>
                        <div class="icon_name">Reviews</div>
                    </a>
                </li>
                <li>
                    <a href="./messages.php">
                        <div class="ico"><i class="fi fi-sr-messages"></i></div>
                        <div class="icon_name">Feedback</div>
                    </a>
                </li>
                <li>
                    <a href="./notification-store.php">
                        <div class="ico"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="icon_name">Notifications Store</div>
                    </a>
                </li>
                <li>
                    <a href="./submit-a-blog-article.php">
                        <div class="ico"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                        <div class="icon_name">Write to blog</div>
                    </a>
                </li>
                <li>
                    <a href="./csmmessageportal.php">
                        <div class="ico"><i class='bx bx-message-rounded-dots'></i></div>
                        <div class="icon_name">Message</div>
                    </a>
                </li><br /><br /><br /><br />
                <li>
                    <a href="../src/logout.php">
                        <div class="ico"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                        <div class="icon_name">Logout</div>
                    </a>
                </li>
            </ul>
        </div>

<div class="common-review-cage" style="position:absolute;padding:1px 16px;height:1000px; top: 50px;">
<div class="username-cage-in-reviews">
  <h2 class="username"><b>Hello, <?php echo $firstname.""?>!</b></h2>
</div>
<?php

$query_2 = "SELECT * FROM reviews INNER JOIN customers ON reviews.cust_Id = customers.cust_id";
$result_2=mysqli_query($conn, $query_2);

echo '<div class="wrapper">';

       $j = 0;

        if($result_2 == true){
         if(mysqli_num_rows($result_2)>0){
             while($row = mysqli_fetch_assoc($result_2)){
               $cust_id  = $row['cust_id']; 
               $cust_email  = $row['cust_email'];  
               $review = $row['review'];
               $time_stamp = $row['time_stamp'];

              // $sql1 = "SELECT MIN(option_id) FROM options WHERE pack_id = $pack_id";
              // $result1 = mysqli_query($conn,$sql1);
              // if(mysqli_num_rows($result1)>0){
              //   while($row = mysqli_fetch_assoc($result1)){
              //     $min_option_id = $row['MIN(option_id)'];
              //   }
              // }
                       
                         $j++;

                       echo 
                       //"<a href="../public/replyForm.php">".
         
                       "<div class='review-card'>".
                       
                         //"<img id='accountImg'"."src='../../images1/venue/venue".$j."'jpeg' alt='Avatar'>".
                         "<div class='cust_email'>".
                         "<h4><b>".$cust_email."</b></h4>".
                         "</div>".
                        // "<div class='container1'>".
                         //"<img id='locationImg'"." src='../../images1/location_district_30px.png'>". 
                         "<p>".$review."</p>".
                         "<p>".$time_stamp."</p>".

                         //"<img id='ratingImg'"."src=../../images1/rating/ranking".array_search(max($rating),$rating).".jpg>".
               
                        //  "<form action='food_provider_shopPage.php' method='POST'>".
                        //  "<input type='hidden' name='sp_id' value=".$sp_id." />".
                        //  "<input type='hidden' name='pack_id' value=".$pack_id." />".
                        //  "<input type='hidden' name='min_option_id' value=".$min_option_id." />".
                        //  "<input type='submit' name='viewshop' id='viewshop' value='view'>".
                        // //  "<span id='backgroundSubmit'></span>".
                        //  "</form>".            
                        // "</div>".
                        
                        "</div></a><br />";
                    }
                    echo '</div>'; 
                }
            }         

// if (mysqli_num_rows($result_2)>0) {
// while ($reviews = mysqli_fetch_assoc($result_2)) {

//    echo "<div class='view-cage'>";
//    echo "<h4>".$reviews["cust_Id"]."</h4>";
//    echo "<h4>".$reviews["cust_email"]."</h4>";
//    echo "<p>".$reviews["review"]."</p>";
//    echo "</div>";
//   }
// }
?>

</div>
</body>
</html>

<?php 
  mysqli_close($conn);
?>
