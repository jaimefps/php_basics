<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<?php deleteRows(); ?>


<?php include "includes/header.php";?>

  <div class="container">
    <div class="col-xs-6">
    <h1 class="text-center">Delete User</h1>
    <!-- "action" attribute sets the path to the file that has the process code-->
    <form action="login_delete.php" method="post">
      <div class="form-group">
       Choose the ID you want to DELETE:
       <br>
       <br>
        <!-- drop down menu-->
        <select name="id" id="">
          <?php
            showAllData();
          ?>
        </select>
        
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Delete">
    </form>

    </div>
  </div>
  
<?php include "includes/footer.php";?>