<?php 
  session_start();
  include "connection.php";
  $sql = "INSERT INTO tbl_users (user_name, pwd, user_email) VALUES ('$_POST[name]', '$_POST[pass]', '$_POST[email]')";
  
  $return = mysqli_query($mysqli, $sql);

  if(! $return){
    die('Could not enter data: ' . mysqli_error());
  }
  echo 'Data entered Successfully \n';
  mysqli_close($mysqli);
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>New Account</title>
  </head>
  <body>
  <form action="form.html">
    <input type="submit" name="submit" value="plan my trip!">
  </form>
  </body>
  </html>