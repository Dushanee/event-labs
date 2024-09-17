<?php
    require '../config/connection.php';

    if($conn === false) {
        die("Error: You are facing a connection issue with the database roght now. Please try again later."
            .mysqli_connect_error());

    }

    $_SESSION = $_POST['article_id'];
    $_SESSION = $_POST['article_title'];
    $_SESSION = $_POST['article_content'];           

    // $article_title = $_REQUEST['article_title'];
    // $article_content = $_REQUEST['article_content'];
    // $article_image = $_REQUEST['article_image'];
    
    $query = "INSERT INTO blog_articles VALUES ('$article_title','$article_content')";
    

    if(mysqli_query($conn,$query)) {
        echo "<h3>Thank you for your article."
        . "It will be published on the blog spot as soon as it approves.".
        "</h3>";
    } else {
        echo "Error: Sorry, something went wrong. Please try again."
        .mysqli_error($conn);
    }

    mysqli_close($conn);

?>