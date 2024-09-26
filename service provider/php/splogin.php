<?php
session_start();
include "../php/connection.php";

if (isset($_POST['email']) && isset($_POST['psw']))
{

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = validate($_POST['email']);
  $pass = validate($_POST['psw']);

  if (empty($email))
  {
    header("Location: login.php?error= Email is Required");
    exit();
  }
  else if (empty($pass))
  {
    header("Location: login.php?error=Password is Required");
    exit();
  }

  else
  {
    $sql = "SELECT * FROM service_provider WHERE sp_email='$email' AND sp_password='$pass'";
    $result = mysqli_query($connection,$sql);

    if($result === FALSE)
    {
      die(mysqli_error($connection));
    }
    else
    {
      $row = mysqli_fetch_assoc($result);

      if ($row['sp_email'] === $email && $row['sp_password'] === $pass)
      {
         $_SESSION['sp_email'] = $row['sp_email'];
         $_SESSION['service_provider_id'] = $row['service_provider_id'];
         $_SESSION['sp_name'] = $row['sp_name'];
        header("Location: dashboard.php");
    
      }
      else
      {
        header("Location: login.php?error=Incorrect Email or Password");
    
      }
    }
  }
}

else {
  header("Location: login.php");
  exit();
}

// $_SESSION['userLogin'] = "Loggedin";