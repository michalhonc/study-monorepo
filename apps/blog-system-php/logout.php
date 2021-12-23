<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Logout</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
 </head>
 
 <body style="background-color: #fafafa;">
 	<section class="logo-section">
        <img href="index.html" src="img\logo.png" alt="Af">
    </section>

  <div class="login">
  	<label>You have been logout.</label><br/>
   	<a href="index.php">Home Page</a> | <a href="login.php">Login</a>
  </div>
  
 </body>
</html>