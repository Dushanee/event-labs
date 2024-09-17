<?php

  include '../config/connection.php';
  session_start();

                             $_SESSION['id'];
                             $_SESSION['email'];
                             $_SESSION['fname'];
                             $_SESSION['lname'];
                             $_SESSION['pro_pic'];

  //$query = "INSERT INTO notifications (notification_id, notification) VALUES ('$notification_id, '$notification')";

?>

<!DOCTYPE html>
<html>
<head>
<title>Notifications</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/submit-a-blog-article.css">
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
<br /><br />
<div class="username-cage" style="margin-left: 21%;">
  <h2 class="username"><b>Hello, <?php echo $firstname.""?>!</b></h2>
</div>
<div class="common-not-cage" style="position:absolute;margin-left:18%;padding:1px 16px;height:1000px; margin-top: 8%">

<div class="create_notification">
  <div class="creating-area">
  <form action="../src/notification-store.php" class="notification-writing" method="POST">
  <?php //if(isset($_GET['cheer'])) { ?>
    <!--<p class="cheer"><?php //echo $_GET['cheer'];?></p>-->
  <?php //} ?>
    <div class="not-topic">
    <p class="write-new-notification">Write New Notification</p>
    </div><br />
    <div class="do-db">
    <textarea name="notification" id="" cols="165" rows="2" class="insert-notification" placeholder="Write new notification here..."></textarea>
    <div class="btn-form">
      <input type="submit" class="button-i-green" value="Send">
      <input type="submit" class="button-i-red" value="Cancel">
    </div>
  </div>
  </div>
  </div><br /><br />

  <div class="not-topic">
    <p class="notification-library">Notifications Library</p>
  </div>


    <?php

$query_2 = "SELECT * FROM notifications";
$result_2=mysqli_query($conn, $query_2);

echo '<div class="wrapper">';

       $j = 0;

        if($result_2 == true){
         if(mysqli_num_rows($result_2)>0){
             while($row = mysqli_fetch_assoc($result_2)){
               $notification_id  = $row['notification_id']; 
               $notification  = $row['notification'];  
              //  $forum_subject = $row['forum_subject'];
              //  $forum_message = $row['forum_message'];
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
                         "<h4><b>".$notification_id."</b></h4>".
                         "</div>".
                        // "<div class='container1'>".
                         //"<img id='locationImg'"." src='../../images1/location_district_30px.png'>". 
                        //  "<p>".$forum_subject."</p>".
                         "<p>".$notification."</p>".
                         "<p>".$time_stamp."</p>".

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
    <!-- <br /><br /> -->
    <!-- <div class="btn-form">
      <input type="submit" class="button" value="Cancel">
      <input type="submit" class="button" value="Send">
    </div> -->
  </form>
</div><br /><br /><br />

<!-- <div class="read-notifications">
  <div class="not-topic">
    <h3 class="write-new-notifications">Read Notifications</h3>
  </div><br /><br />
<table>
                <tr>
                  <th class="Email"></th>
                  <th class="msg"></th>
                  <th class="button"></th>
                </tr> -->
              <?php// $query = "SELECT * FROM notifications";
//$result = mysqli_query($conn, $query);

//while($view=mysqli_fetch_assoc($result)) {
?>
  <!-- <tr> -->
    <!-- <td style="width: auto; height: 60px"><b><?php //echo $view['notification_id'];?></b></td>  <!--need to display cust_email here but currently showing id-->
    <!-- <td style="width: auto; height: 60px"></td><?php //echo $view['notification'];?> -->
    <!-- <td style="width: 60px"><a href="replyform.php" onclick="submitForm()" style="color: white; text-decoration:none"><i class='bx bx-reply' style="font-size: 16px; color:white"></i>Reply</a></td> -->
  <!-- </tr><br />  -->
  
  <?php
//}
?>
<!-- </table> -->
<!-- </div> -->

</div>



</body>
</html>