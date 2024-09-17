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
<title>Home</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./css/calendar.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/calendar.css">
<script src="../js/calendar.js" defer></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
  
  function showForm() {
  var popup = document.getElementById("popupForm");
  popup.style.display = "block";
  }
</script>
<link rel="stylesheet" href="./css/home.css">
</head>
<body>
<?php 
        include '../public/top-bar.php'; 
        include '../public/nav-bar.php';
        include '../public/card.php';
    ?>

<div class="username-cage" style="margin-top: 5%; margin-left: 19.5%">
  <h2 class="username"><b>Hello, <?php echo $firstname.""?>!</b></h2>
  <div class="blog-button">
  <button class="blogButton" onclick="showForm()">Submit a blog article</button>
    <div id="popupForm" style="display: none;">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileUpload">Upload a PDF File:</label>
            <input type="file" name="fileUpload" id="fileUpload" accept=".pdf">
            <input type="submit" value="Upload">
        </form>
    </div>
  </div>
</div>

<!-- <div class="to-left-the-common">
<div class="common"> -->
  <div class="container1">
  <div class="card1">
    <div class="chart">
    <canvas id="myChart" style="width:100%;max-width: 720px; height: 320px;">
    <script>
      var xValues = [50,60,70,80,90,100,110,120,130,140,150];
      var yValues = [7,8,8,9,9,9,10,11,14,14,15];

      new Chart("myChart", {
      type: "line",
      data: {
      labels: xValues,
      datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "#7281A3",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>

    </canvas>
    </div>
    <div class="bottom-text">
      <div class="labels" style="float: right; align-items: left;">
        <p style="color: #210e54; font-size: 12px; align-text: left">x-> Number of conversations<br />y-> Date and Time<br /></p>
      </div>
    </div>
  </div>

  <?php include './html/calendar.html';?>


    
    <!-- Calendar -->
    
</body>
</html>