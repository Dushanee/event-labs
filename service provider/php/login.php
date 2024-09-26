<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login page</title>
       <link rel="stylesheet" href="../css/new login.css">
       
    </head>

<body>

<div class="topnav">
  <img src="../img/logo.png" alt="logo" style="width:100px;height:45px;" >
  <div class="topnav-right">
  <a  href="#home">Home</a>
  <a href="#">Our services</a>
  <a href="#blog">Blog</a>
  <a href="#singup">Sign up</a>
  <a class="active" href="#login">Login</a>
  </div>
</div>


<form action="splogin.php" method="post" class="container">
    <h1><center>Events Lab - Login<center></h1>
    
    <h3>

    <?php if (isset($_GET['error'])) {?>
            <p class="error"><?php echo ($_GET['error']); ?></p>
            <?php } ?>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" >

    <button type="submit" class="button">Login</button></h3>
	
    <a href ="#"><h4><center> forgot password </center> </h4> </a>
	<center> <p> Don't have account <a href="#">Create account</a></p></center>

    </form>
    </div>
	
	<div class="footerbar">
	<center>
	<p>Contact events lab<br>
  <a href="eventslab@example.com">hege@example.com</a><br>
  tel: 037-2314905/ 011-54895555</p></center>
	</div>

	</body>
	
	</html>