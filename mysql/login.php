<?php include "includes/header.php";?>

<div class="container">
  <div class="col-xs-6">

    <!-- "action" attribute sets the path to the file that has the process code-->
    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control">
      </div>  

      <input class="btn btn-primary" type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>

<?php include "includes/footer.php";?>