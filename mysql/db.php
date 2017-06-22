<?php
  // one way to connect to the database from here:
  // set a variable to mysqli_connect(server, db_user, db_pass, db_name);
  // export the connection variable to all necessary files.
  $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if (!$connection) {
    die('Database connection failed');
  }
?>