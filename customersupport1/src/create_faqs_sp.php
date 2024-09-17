<?php
    require '../config/connection.php';
    session_start();
    echo 'net';

    if(isset($_POST['submit'])) {
        echo 'Amaya';
        $_SESSION['faq_name']=$_POST['faq_name'];
        $_SESSION['faq_answer']=$_POST['faq_answer'];
        // echo $_SESSION['help_name'];

        // $help_name=$_SESSION['help_name'];
        $faq_name=$_SESSION['faq_name'];
        $faq_answer=$_SESSION['faq_answer'];

        $query = "INSERT INTO sp_faq(faq_name, faq_answer) VALUES('$faq_name', '$faq_answer')"; 
        $result=mysqli_query($conn, $query);

        if($result) {
            echo "x";
            header('Location: ../public/update_help_center.php?message_spfaq=FAQ entered successfully!');
    }else {
        echo "y";
        header("Location: ../public/update_help_center.php?message_spfaq=Something went wrong! Please try again.");
        exit();
    }
}

    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     echo "Form submitted";
    // } else {
    //     echo "Form not submitted";
    // }
?>