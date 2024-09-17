<?php

include '../config/connection.php';

session_start();

?>


<!doctype html>
<html>
    <head>
        <title>Submit a blog article</title>
        <link rel="stylesheet" href="./css/submit-a-blog-article.css" />
        <link rel="stylesheet" href="./css/home.css" />
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <link rel="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel="stylesheet" href="./css/navbar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<!-- <div class="to-left-the-common" style='background-color: black;'> -->
<!-- <div class="username-cage-in-bs">
  <h2 class="username"><b>Hello <?php// echo $firstname.""?></b></h2>
</div> -->
<div class="common-in-bs">
<div class="username-cage-in-bs">
  <h2 class="username"><b>Hello, <?php echo $firstname.""?>!</b></h2>
</div><br />
        <div class="main-cage">
            <div class="top-cage">

                <div class="x">
                    <form action="./submit-a-blog-article.php" class="newArticle">
                        <input class="button" type="submit" style="margin-top: 0.25%;" value="New Article">
                    </form>
                </div>
                <!-- <div class="get-from-backend">
                    <div class="x"><a href="#"><b>Pending</b></a></div>
                    <div class="x"><a href="#"><b>Published</b></a></div>
                    <div class="x"><a href="#"><b>Draft</b></a></div>
                </div>
            </div><br /> -->
            <div class="article-form">
                <?php //include '../src/submit-article.php'; ?>
                <!-- Display the message above the form -->
                            <!--success / error -box-->
                <div class="<?php //echo $class; ?>-box">
                    <?php //echo $message; ?>
                </div>

                <!-- The form -->

                <form action="../src/submit-article.php" class="submit-article" method="POST">
                    <div class="flex">
                    <label for="title" class="form">Title</label>
                    <input type="text" class="insert" name="article_title" required>
                    </div><br />
                    <div class="flex">
                    <label for="tags" class="form">Tags (Seperated by commas)</label>
                    <input id="tags" type="text" class="insert" name="tags"></textarea>
                    </div><br />
                    <div class="flex">
                    <label for="article-content" class="form">Article Content</label>
                    <textarea id="content" name="article_content" required></textarea>
                    </div><br />
                    <div class="flex">
                    <label for="featured-image" class="form" name="article_image">Featured Image</label>
                    <input type="file" class="insert">
                    <!-- <input type="submit" class="button" value="SUBMIT"> -->
                    </div><br /><br />
                    <!-- <input type="checkbox" class="mark">Save and submit to publish<br /><br /> -->
                    <div class="two-buttons">
                    <div class="newArticle">
                        <button class="button" type="submit" name="submit" value="Submit">Submit</button>
                        <button class="button" type="submit" value="Cancel">Cancel</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
</html>