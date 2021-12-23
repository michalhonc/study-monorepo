<?php
error_reporting(E_ALL & ~E_NOTICE);
include_once("connection.php");

 $sql = "SELECT id, title, dateCreated, category  FROM blogs ORDER BY dateCreated DESC";
 $result = mysqli_query($dbCon, $sql);

 while ($row = mysqli_fetch_array($result)) {
     $title = $row['title'];
     $dateCreated = $row['dateCreated'];
     $category = $row['category'];
    


?>
<!DOCTYPE html>
<html>
<head>
    <title>Archive</title>
</head>
<body>

        <p><?php echo $dateCreated; ?></p>
        <a href="single.php?title=title"><h1><?php echo $title; ?></h1></a>
        <p><?php echo $category; ?></p>
        <hr>
</body>
</html>
<?php 
   }     
    ?>
