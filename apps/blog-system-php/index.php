<?php
	error_reporting(E_ALL & ~E_NOTICE);

	

?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
  <head>
    <title>Michal Honc</title>
    
    <meta charset='utf-8'>
    <meta name='description' content='Můj web'>
    <meta name='keywords' content='blog, myblog'>
    <meta name='author' content='Michal Honc'>
    
    <meta property="og:locale" content="cs_CZ">
    <meta property="og:site_name" content="Název webu">
    <meta property="og:type" content="website">  <!-- typ sdíleného objektu, pro články se používá content="article" -->
    <meta property="og:url" content="http://absolutni-adresa-sdileneho-objektu">
    <meta property="og:title" content="Titulek objektu">  <!-- například titulek článku bez názvu webu, ten se udává zvlášť -->
    <meta property="og:image" content="http://absolutni-adresa-obrazku.png">  <!-- tento obrázek se zobrazí u sdíleného odkazu -->
    <meta property="og:description" content="Krátký popis">  <!-- popisek OG objektu -->
    
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <!--<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>!-->
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css"/>

    <!--[if lt IE 9]>
        <script src="js/html5shiv-printshiv.js"></script>
    <![endif]-->
</head>
<body>
	<nav class="menu">
      <ul>
        <li><a href="#1">blog</a></li>
        <li><a href="archive.php">archive</a></li>
        <li><a href="#3">subscribe</a></li>
        <li><a href="#4">contact</a></li>
        <li><a href="#1"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
        <li><a href="#2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#3"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
        <li><a href="#4"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      </ul>

    </nav>
    
    <section class="logo-section">
        <img href="index.html" src="img\logo.png" alt="Af">
        <div class="quote">
            <p>We know what we are, but know not what we may be.</p>
            <p style="font-style: italic;">William Shakespeare</p>
        <hr>
        </div>
    </section>

    <div class="container">
	<?php 
	include_once("connection.php");

	$sql = "SELECT * FROM blogs ORDER BY id DESC";
	$result = mysqli_query($dbCon, $sql);

	while ($row = mysqli_fetch_array($result)) {
		$title = $row['title'];
		$subtitle = $row['subtitle'];
		$autor = $row['autor'];
		$dateCreated = $row['dateCreated'];
		$category = $row['category'];
		$content = $row['content'];
	?>
    <article class="art">
		<h1><?php echo $title; ?></h1>
		<h2>,,<?php echo $subtitle; ?>“ </h2>
		<p class="autor"><?php echo $dateCreated; ?> - <?php echo $autor; ?>, <?php echo $category; ?></p>
		<p><?php echo $content; ?></p>

		<ul class="share-buttons">
              <li style="color: grey; ">Share it</li>
              <li><a href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank"><img src="img/flat_web_icon_set/color/Facebook.png"></a></li>
              <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet"><img src="img/flat_web_icon_set/color/Twitter.png"></a></li>
              <li><a href="https://plus.google.com/share?url=" target="_blank" title="Share on Google+"><img src="img/flat_web_icon_set/color/Google+.png"></a></li>
              <li><a href="http://pinterest.com/pin/create/button/?url=&description=" target="_blank" title="Pin it"><img src="img/flat_web_icon_set/color/Pinterest.png"></a></li>
              <li><a href="http://wordpress.com/press-this.php?u=&t=&s=" target="_blank" title="Publish on WordPress"><img src="img/flat_web_icon_set/color/Wordpress.png"></a></li>
            </ul>
	</article>
	<?php 
		}
	?>
	</div>


	<a href="admin.php">Admin</a>
	<script src="js/script.js"></script>
</body>
</html>