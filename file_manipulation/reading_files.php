<?php 

  $file = "name_of_file.txt";
  
  // The "fopen()" function returns whether it worked or not,
  // it takes two parameters: the name of the file, 
  // and the action "r" that stands for 'read'.
  // If the file doesnt already exist; it creates the file.
  // so we save that value in a variable:
  if($handle = fopen($file, 'r')) {
    
    // "fread()" is the prebuilt function for reading the file.
    // the second parameter is the number of bites to read.
    // each bite is a character
    echo $content = fread($handle, 20);
    // or if you want to read the whole file:
    // filesize() is a prebuilt function that gives the file size
    // such that if given as the second paramenter, 
    // you get back the whole file.
    echo $content = fread($handle, filesize($file));
    
    // should always close the file afterwards.
    fclose($handle);
  } else {
    echo "Application failed to write file.";
  }



?>