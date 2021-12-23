<?php

  include 'db.php';
  
  $job = $_POST["job"];
  $company = $_POST["company"];
  $country = $_POST["country"] ? $_POST["country"] : null;
  $street = $_POST["street"] ? $_POST["street"] : null;
  $streetNumber = $_POST["streetNumber"] ? $_POST["streetNumber"] : null;
  $postCode = $_POST["postCode"] ? $_POST["postCode"] : null;
  $obligation = $_POST["obligation"] ? $_POST["obligation"] : null;
  $education = $_POST["education"] ? $_POST["education"] : null;
  $sallary = $_POST["sallary"] ? $_POST["sallary"] : null;
  $town = $_POST["town"] ? $_POST["town"] : null;
  $content = $_POST["content"] ? $_POST["content"] : null;

  $randomNumber = rand(1, 4);
  $pictureLink = "images/more-from-" . $randomNumber . ".png";
  
  
  $sql = "INSERT INTO `offers` (job, company, country, street, streetNumber, postCode, obligation, education, sallary, town, content, pictureLink) VALUES ('$job', '$company', '$country', '$street', '$streetNumber', '$postCode', '$obligation', '$education', '$sallary', '$town', '$content', '$pictureLink')";

  if ($cnn->query($sql) === TRUE) {                                                                                                                                     
    // redirect to detail page with success status
    header("Location: ../offer.php?status=0");
    $cnn->close();
    die();

  } else {
    // redirect to add offer form with error status
    header("Location: ../offer.php?status=1");
    $cnn->close();
    die();
  }

?>
