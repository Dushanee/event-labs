<!DOCTYPE html>        

<html>
    <head>
        <title>Message form</title>
        <link rel="stylesheet" href="./css/home.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
    <a href="./home.php"><i class='bx bxs-dashboard' ></i>Dashboard</a>
    
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
    <a class="active" href="./chat.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li>
</ul>
</div>


<div class="common" style="position:absolute;margin-left:29%;padding:1px 16px;height:1000px; top: 50px">
<div class="msg-container">
        <form class="message-portal">
            <label for='Name' class="msg-label">Your name:</label>
            <input type='text' class='msg-input1' />
            <label for='title' class='msg-label'>Title:</label>
            <input type='text' class='msg-input1' />
            <label for='msg' class='msg-label'>Your message:</label>
            <input type='text' class='msg-input2' /><br />
            <button type='submit' class='buttonInPopUp' onclick="window.location.reload()S">Send</button>
        </form>
        <form class="back" action="./csmmessageportal.php">
            <button type='submit' class='buttonInPopUp' style="width: 90%;">Back</button>
        </form>
    </div>
    </body>
</html>
