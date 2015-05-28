<?php

  $myfile = fopen("results.csv", "a");

  foreach ($_POST as $key => $value) {
    fwrite($myfile,  $key . '=' . $value . ';');
  }
  
    fwrite($myfile, "\n");
    
  fclose($myfile);
  
  print "OK";
?>