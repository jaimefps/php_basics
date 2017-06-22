<?php
  // prebuilt fucntion that starts a session: 
  // it creates a cookie
  session_start();

  // note that this echos the value created in the "session1.php" file;
  // the value set on 'greeting' carries over to other pages.
  echo $_SESSION['greeting'];  
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
</body>
</html>