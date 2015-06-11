<?php

  $myfile = fopen("data/results.csv", "a+") or die("Can't open file");

  fwrite($myfile,  $_SERVER['REMOTE_ADDR'] . ';');
  fwrite($myfile,  date('H:i:s d-m-y') . ';');
  
  foreach ($_POST as $key => $value) {
    fwrite($myfile,  $value . ';');
  }
  
  fwrite($myfile, "\n");
  fclose($myfile);
  
  print "OK";
?>
