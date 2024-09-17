<!DOCTYPE html>
<html>
<head>
<title>Card_cage</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel = "stylesheet" href="./css/card.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="card-cage" style="position: absolute;">
    
        <div class="card">
            <div class="ico-cage">
                <i class='bx bxs-message' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br /><br />
                <div class="backend"><h1>10</h1></div>
                <div class="backend-desc"><h4><a href="./messages.php" class="go" style="text-decoration: none;">Unread Forums</a></h4></div>
            </div>
        </div>
        
        <div class="card">
            <div class="ico-cage">
            <i class='bx bxs-bookmark-heart' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br /><br />
                <div class="backend"><h1>2</h1></div>
                <div class="backend-desc"><h4><a href="./reviews.php" class="go" style="text-decoration: none;">New Reviews</a></h4></div>
            </div>
        </div>
        
        <div class="card">
            <div class="ico-cage">
                <i class='bx bxs-book-reader' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br/><br />
                <div class="backend"><h1>5</h1></div>
                <div class="backend-desc"><h4><a href="./blogSpot.php" class="go" style="text-decoration: none;">Read Blog</a></h4></div>
            </div>
        </div>
        <div class="card">
            <div class="ico-cage">
                <i class='bx bxs-book-reader' style='color:#ffffff'  ></i>
            </div>
            <div class="ico-intro-cage">
                <br/><br />
                <div class="backend"><h1><?php echo $avg_rating_percent ?>%</h1></div>
                <div class="backend-desc"><h4><a href="./blogSpot.php" class="go" style="text-decoration: none;">Read Blog</a></h4></div>
            </div>
        </div>

    </div>
</body>
</html>