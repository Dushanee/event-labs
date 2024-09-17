<?php

// include '../back/db_conn.php';
// //include 'viewmsg.php';

// session_start();
   
// if(isset($_SESSION['id']) && isset($_SESSION['username'])) {

?>

<!DOCTYPE html>
<html>
<head>
<title>Consultations</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/home.css">
</head>
<body>

<div class="topbar">
        
        <div class="logo">
            <img src="./images/logo 1.png">
        </div> 
    <div class="search0">
      <h1 class="username">Welcome back, Amaya!</h1>
    </div>
    <i class='bx bxs-bell'></i>
    
    <div class="user">
        <img src="./images/propic.png" alt="propic">
        
    </div>

    <h6> Amaya Wedamulla </h6>
</div>

<div class="nav-bar" style="top: 8px">

<ul>
<div class="eventslab"><img src="./images/logo 1.png"></div>
  <li>
    <a class="active" href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
  </li>
  <li>
    <a href="./team.php"><i class='bx bxs-group' ></i>Team</a>
    
  </li>
  
  <li>
    <a href="./reviews.php"><i class='bx bxs-bookmark-heart' ></i>Reviews</a>
    
  </li>
  
  <li>
    <a href="./calendar.php"><i class='bx bxs-calendar' ></i>Calendar</a>
    
  </li>
  <li>
    <a href="./notification-store.php"><i class='bx bxs-envelope' ></i>Notification Store</a>
    
  </li>
  
  <li>
    <a href="./csmmessageportal.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bxs-log-out' ></i>Logout</a>
  </li>
</ul>
</div>


<div class="common">
    <div class="mainprofcage">
        <div class="forcentering">
        <div class="proImagecage">
            <img src="./images/propic.png" alt="profile_picture" class="proImage" />
            <form action="./editprofile.php" class="edit-form">
              <button class="edit">EDIT PROFILE PICTURE</button>
            </form>
        </div><br />
        <div class="details">
            <div class="entry">
                <p class="data">Name: Amaya Wedamulla</p>
                <form action="./editprofile.php" class="edit-form">
                  <button class="edit">EDIT NAME</button>
                </form>
            </div>
            <div class="entry">
                <p class="email">Email: amaya@eventslab.com</p>
                <form action="./editprofile.php" class="edit-form">
                  <button class="edit">EDIT EMAIL</button>
                </form>
            </div><br />
            <div class="entry">
                <form action="./editprofile.php" class="edit-form">
                  <button class="edit">CHANGE PASSWORD</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

// }else {
//     header("Location: ../front/index.php");
//     exit();
// }

?>