<?php

  $databaze = 'ete32e_1819zs_08';
  $uzivatel = 'ete32e_1819zs_08';
  $heslo = 'mVRPcy';

  if (!($cnn = mysqli_connect('localhost', $uzivatel, $heslo)))
    die('Nepodarilo se pripojit k databazovemu serveru.');
  if (!mysqli_select_db($cnn, $databaze))
    die('Nepodarilo se otevrit databazi.');
    
  mysqli_set_charset($cnn,"utf8");

?>
