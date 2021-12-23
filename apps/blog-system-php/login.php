<?php
 error_reporting(E_ALL & ~E_NOTICE);
 session_start();
 
 if($_POST['submit']) {
  $dbUserName = "admin";
  $dbPassword =  "password";
  
  $username = strip_tags($_POST["username"]);
  $username = strtolower($username);
  $password = strip_tags($_POST["password"]);
  
  if ($username == $dbUserName && $password == $dbPassword) {

   $_SESSION['username'] = $username;
   header('Location: admin.php');
  } else {
  	$wrongPass = "Wrong username or password.";
  }
 }
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
 </head>
 
 <body style="background-color: #fafafa;">
 	<section class="logo-section">
        <img href="index.html" src="img\logo.png" alt="Af">
        <div class="quote">
        </div>
    </section>

  <form class="login" action='login.php' method='post'>
   <p class="title">Log in</p><br/>
   <label for="username">Username</label><br/>
   <input type='text' name='username' /><br />
	<br/>
	<label for="password">Password</label><br/>   
   <input type='password' name='password' /><br/>
   <input type='submit' name='submit' value='Sign in' /><br/>
   <label><?php echo $wrongPass; ?></label>
  </form>
  
 </body>
</html>