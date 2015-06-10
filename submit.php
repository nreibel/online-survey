<?php

  $myfile = fopen("results.csv", "a+") or die("Can't open file");

  foreach ($_POST as $key => $value) {
    fwrite($myfile,  $value . ';');
  }
  
  fwrite($myfile, "\n");
  fclose($myfile);
  
  print "OK";
?>