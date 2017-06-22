<?php

  // isset & $_POST
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mock data for users 
    $users = array('jaime', 'michelle', 'jorge', 'maria');

    // dry code
    $max = 10;
    $min = 5;

    // mock username validation
    if(strlen($username) < $min) {
      echo "username must have more than 5 characters";
    } else if (strlen($username > $max)) {
      echo "username cannot be longer than 10 characters";
    }

    // mock check if user exists
    if (!in_array($username, $users)) {
      echo "Create an account if you are a new user!";
    } else {
      echo "Welcome";
    }

  }
?>