<!-- <!DOCTYPE html>
<html>
    <head>
        <title>send message</title>
        <link rel="stylesheet" href="./css/message.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>

    <input type="button" id="button" class="buttonForPopUp" onClick="Show()" />

    <script>
        document.getElementById("button").value = "Hi ;)";
    </script>



    <div id="popupdiv" style="display: none;">
        <div class="backgroundPopUp" onClick="Hide()">
        </div>
        <div class="contentPopUp">
            <div class="content">
                <h2>Send a Message</h2>
                <p style="width: 20rem" align="center">They will respond as soon as they see your message.</p>
            </div>

            <form action="./messageForm.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Admin">Admin</button>
                <button type="submit" class="buttonInPopUp" value="Service Providers">Service Providers</button>
            </form>
            <form action="./reply.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Reply" style="margin-bottom: 5%;">Reply</button>
            </form>

        </div>

    </div>

</body>
</html>

<script type="text/javascript">
    function Show(){
    divInfo = document.getElementById('popupdiv');
    if (divInfo.style.display == 'none'){
        divInfo.style.display = 'block';
    }else{
        divInfo.style.display = 'none';
    }
    
}

function Hide(){
    divInfo = document.getElementById('popupdiv');
    if (divInfo.style.display == 'block'){
        divInfo.style.display = 'none';
    } else {
        divInfo.style.display = 'block';
    }
}

/*function ShowPortal(){
    divInfo = document.getElementById('adminpopupdiv');
    if(divInfo.style.display == 'none'){
        dic.Info.style.display = 'block';
    }else{
        div.info.style.display = 'none';
    }
}*/
</script> -->

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
    <a class="active" href="./csmmessageportal.php"><i class='bx bxs-conversation' ></i>Message Portal</a>
  </li>
  <li>
    <a href="./loginFront.php" id="log_out"><i class='bx bxs-log-out' ></i></a>
  </li>
</ul>
</div>


<div class="common" style="position:absolute;margin-left:29%;padding:1px 16px;height:1000px; top: 50px">

<div class="contentPopUp" >
            <div class="content">
                <h2>Send a Message</h2>
                <p style="width: 20rem" align="center">They will respond as soon as they see your message.</p>
            </div>

            <form action="./messageForm.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Admin">Admin</button>
                <button type="submit" class="buttonInPopUp" value="Service Providers">Service Providers</button>
            </form>
            <form action="./reply.php" method="post" class="choosingButtons">
                <button type="submit" class="buttonInPopUp" value="Reply" style="margin-bottom: 5%;">Reply</button>
            </form>

        </div>
</body>
</html>