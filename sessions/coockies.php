<?php
  // values to be passed to the cookie maker.
  $name = "some_cookie_name";
  $value = 100;
    // time() is "now";
    // we add how much time we want to add to it for its expiration;
    // in this case the cookie expires a week from "now"
  $expiration = time() + (60*60*24*7);

  // prebuilt function for setting cookies.
  setcookie($name, $value, $expiration);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  // $_COOKIE is the super global that has the cookies
  if (isset($_COOKIE['some_cookie_name'])) {
    $mem = $_COOKIE['some_cookie_name'];
    // this will echo the VALUE of the cookie with the given name.
    echo $mem;
  } else {
    $mem = '';
  }
  
  // in essence, this example is simply showing how we can detect data
  // this data can then be used to customize the website experience to each user.

  ?>
</body>
</html>