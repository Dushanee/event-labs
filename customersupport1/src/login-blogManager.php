<?php
    // session_start(); //to store loggin data

    // include "../config/connection.php";

    // if(isset($_POST["email"]) && isset($_POST["password"])) {
    //     function validate($data) {
    //         $data = trim($data);
    //         $data = stripslashes($data);
    //         $data = htmlspecialchars($data);
    //         return $data;
    //     }
    //     $email = validate($_POST['email']);
    //     $pass = validate($_POST['password']);

    //     if(empty($email)) {
    //         header("Location: ../public/loginFront.php?error=Email is required");
    //         exit();
    //     } else if(empty($pass)) {
    //         header("Location: ../public/loginFront.php?error=Password is required");
    //         exit();
    //     } else {
    //         $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
    //     }

    //     $result = mysqli_query($conn,$sql);

    //     if(mysqli_num_rows($result) === 1) {
    //         $row = mysqli_fetch_assoc($result);
    //         if($row['email'] === $email && $row['password'] === $pass) {
    //             $_SESSION['email'] = $row['email'];
    //             $_SESSION['fname'] = $row['fname'];
    //             $_SESSION['lname'] = $row['lname'];
    //             $_SESSION['pro_pic'] = $row['pro_pic'];
    //             header("Location: ../public/home.php");
    //             exit();
    //         } else {
    //             header("Location: ../public/loginFront.php?error=Incorrect email or password");
    //             exit();
    //         }
    //     } else {
    //         header("Location: ../public/loginFront.php?error=Incorrect email or password");
    //         exit();
    //     }
    // } else {
    //     header("Location: ../public/loginFront.php?error");
    //     exit();
    // }


       require '../config/connection.php';

       if(isset($_POST['login'])){
        function validate($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
        }
         $email = validate($_POST['email']);
         $pass = validate($_POST['password']);

         
                    $sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
                    $result = mysqli_query($conn,$sql);

                    
                     if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                           $user_type = $row['user_type'];    //why these?
                           if($user_type == "blog_manager"){

                             session_start();

                             $_SESSION['id'] = $row['id'];
                             $_SESSION['email'] = $row['email'];
                             $_SESSION['fname'] = $row['fname'];
                             $_SESSION['lname'] = $row['lname'];
                             $_SESSION['pro_pic'] = $row['profile_pic'];

                             header('Location: ../public/bm-home.php?cheer=Login successfull');
                           }   
                        }
                      }else{
                        header("Location: ../public/bm-login.php?error=Incorrect email or password");
                        exit();
                      }
                    

                    
                    
               }
       
       

     


?>
