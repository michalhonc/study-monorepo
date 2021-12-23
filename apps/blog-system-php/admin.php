<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	if (isset($_SESSION['username'])) {
		$username = ucfirst($_SESSION['username']);

			if ($_POST['submit']) {
				$title = $_POST['title'];
				$subtitle = $_POST['subtitle'];
				$autor = $_POST['autor'];
				$dateCreated = $_POST['dateCreated'];
				$category = $_POST['category'];
				$content = $_POST['content'];
				include_once("connection.php");
				$sql = "INSERT INTO blogs (title, subtitle, autor, dateCreated, category, content) VALUE ('$title', '$subtitle', '$autor', '$dateCreated', '$category', '$content')";
				mysqli_query($dbCon, $sql);
				echo "<meta http-equiv='refresh' content='0'>";}
			

			
	} else {
		header('Location: login.php');
		die();
		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	    <meta charset='utf-8'>
    <meta name='description' content='Můj web'>
    <meta name='keywords' content='blog, myblog'>
    <meta name='author' content='Michal Honc'>
    
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/admin.css" type="text/css"/>
</head>
<body>

	<div class="container">
		
		<h1>Add new post</h1>
		<div class="newPost">
			<form method="post" action="admin.php">
				<label for="name"><span>Title</span><input class="input-field" type="text" name="title" /></label>
				<label for="name"><span>Subtitle</span><input class="input-field" type="text" name="subtitle" /></label>
				<label for="name"><span>Autor</span><input class="input-field" type="text" name="autor" /></label>
				<label for="name"><span>Date</span><input class="input-field" type="text" name="dateCreated" value="<?php echo date('Y-m-d'); ?>"/></label>
				<label for="name"><span>Category</span><input class="input-field" type="text" name="category" /></label>
				<label for="name"><span>Content</span><textarea class="textarea-field" name="content"></textarea></label>
				<label for="submit"><input id="myBtn" type="submit" name="submit" value="Post" /></label>
			</form>
		</div>

		<hr>
		<a href="logout.php">Logout</a><br/>
		<a href="index.php">View home page</a>
		<p>Connected as <?php echo $username; ?></p>
	</div>
</body>
</html>