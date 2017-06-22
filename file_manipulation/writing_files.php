<?php 

  $file = "name_of_file.txt";
  
  // The "fopen()" function returns whether it worked or not,
  // it takes two parameters: the name of the file, 
  // and the action "w" that stands for 'write'.
  // If the file doesnt already exist; it creates the file.
  // so we save that value in a variable:
  if($handle = fopen($file, 'w')) {
    
    // "fwrite()" is the prebuilt function for writing to file.
    fwrite($handle, 'This text was written by the "fwrite()" function in wirting_file.php');
    
    // should always close the file afterwards.
    fclose($handle);
  } else {
    echo "Application failed to write file.";
  }



?>