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
<title>Update help center</title>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="./css/navbar.css">
<link rel="stylesheet" href="./css/update_help_center.css">
</head>
<body>
<?php include '../public/top-bar.php';?>
<div class="navbar">
            <ul>
                <li>
                    <a href="./home.php">
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
                    <a class= "active" href="./update_help_center.php">
                        <div class="ico"><i class='bx bxs-pen'></i></div>
                        <div class="icon_name">Manage Help Center</div>
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
        <div class="main">
            <div class="title">
                <h1 class="title">Manage Help Center, <?php echo $firstname; ?>!</h1>
            </div><br />
            <div class="update_section">
                <?php include './create_help_cards.php'; ?>
            </div><br />
            <div class="update_section">
                <?php include './view_helpTable_csm.php'; ?>
            </div><br />
            <div class="update_section">
                <?php include './create_faqs.php'; ?>
            </div><br />
            <div class="update_section">
                <?php include './view_customer_faqs_table.php'; ?>
            </div><br />
            <div class="update_section">
                <?php include './create_faqs_sp.php'; ?>
            </div><br />
            <div class="update_section">
                <?php include './view_sp_faqs_table.php'; ?>
            </div>
        </div>
</body>
</html>