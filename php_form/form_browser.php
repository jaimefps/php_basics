<!DOCTYPE html>
<html lang="en">
<head>
  <title>php form</title>
</head>
<body>


<!--
the contents of the "form"
are turned into an "assosiative array" (like JS object literal)
that can be found in the $_POST variable
-->

<!-- 
the "action" attribute is the path to the file
that contains the code for processing
-->
<form action="form_process.php" method="post">

  <!--the "name" attribute is the key for the $_POST object literal-->
  <input type="text" placeholder="enter username" name="username">
  <input type="password" placeholder="enter password" name="password">
  <br>
  <input type="submit" name="submit">

</form>

</body>

</html>