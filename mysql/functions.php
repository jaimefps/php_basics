<!--import dependencies -->
<?php  include "db.php"; ?>
<?php

  function createRows() {
    if (isset($_POST['submit'])) {
      
      global $connection;
      
      // grab the values from the super global $_POST
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // escaping SQL injections
      // on each variable that will be part of the query:
      $username = mysqli_real_escape_string($connection, $username);
      $password = mysqli_real_escape_string($connection, $password);
      
      // hash config variable (see documentaiotn for more info):
      // $2y = type of hash ; $10 is the amount of salt in the hash
      $hashFormat = "$2y$10";
      $salt = "iusesomecrazystrings22";
      // concatenate the previous two:
      $hashF_and_salt = $hashFormat . $salt;
      
      // encrypt password with "crypt" : the prebuilt php hashing function.
      $password = crypt($password, $hashF_and_salt);

      // code for inserting data:
      // set the db query as a string in a variable
      $query = "INSERT INTO users(username, password) ";

      // ".=" concatenates the previous variable to the follwing code;
      // note that type 
      $query .= "VALUES ('$username', '$password')";

      // "mysqli_query" is a prebuilt function that has parameters
      // "connection" and "query".
      $result = mysqli_query($connection, $query);

      if (!$result) {
        // prebuilt error handling in "mysqli"
        die("Query FAILED: " . mysqli_error());
      } else {
        echo "Record created";
      }
    }
  }

  
  function readRows() {
    global $connection;
    // code for reading data:
    // set the db query as a string in a variable
    $query = "SELECT * FROM users";
    // "mysqli_query" is a prebuilt function that has parameters
    // "connection" and "query".
    $result = mysqli_query($connection, $query);

    if (!$result) {
      // prebuilt error handling in "mysqli"
      die("Query FAILED: " . mysqli_error());
    } else {
      echo "Record Read";
    }
    while ($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }


  function showAllData() { 
    // brings in a variable that is in the global scope, 
    // but outside the function, into the scope of the function...
    global $connection;
    
    // set the db query as a string in a variable
    $query = "SELECT * FROM users ";
    // "mysqli_query" is a prebuilt function that has parameters
    // "connection" and "query".
    $result = mysqli_query($connection, $query);

    if (!$result) {
      // prebuilt error handling in "mysqli"
      die("Query FAILED: " . mysqli_error());
    }
    // "mysqli_fetch_assoc" outputs an associative array
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      echo "<option value='$id'>$id</option>";
    }
  }


  function UpdateTable() {
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Query FAILED: " . mysqli_error($connection));
    } else {
      echo "Record Updated";
    }
  }


  function deleteRows() {
    if (isset($_POST['submit'])) {
      global $connection;

      $id = $_POST['id'];

      $query = "DELETE FROM users ";
      $query .= "WHERE id = $id ";

      $result = mysqli_query($connection, $query);
      if (!$result) {
        die("Query FAILED: " . mysqli_error($connection));
      } else {
        echo "Record Deleted";
      } 
    }
  }

?>