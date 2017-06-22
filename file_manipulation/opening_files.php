<?php 

  $file = "name_of_file.txt";
  
  // The "fopen()" function returns whether it worked or not,
  // it takes two parameters: the name of the file, 
  // and the action "w" that stands for 'write'.
  // If the file doesnt already exist; it creates the file.
  // so we save that value in a variable:
  $handle = fopen($file, 'w');

  // should always close the file afterwards.
  fclose($handle);

?>