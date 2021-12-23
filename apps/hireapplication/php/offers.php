<?php

  include 'db.php';
    
  $sql = 'SELECT * FROM offers';
  $result = $cnn->query($sql);


  $dbdata = array();

  while ($row = $result->fetch_assoc())  {
    $dbdata[]=$row;
  }

  echo json_encode($dbdata);

?>
