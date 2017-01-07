<?php 
  session_start();
  include "connection.php";
  $sql = "SELECT user_id FROM tbl_users WHERE user_name = '$_POST[name]' AND pwd = '$_POST[pass]' ";
  
  $return = mysqli_query($mysqli, $sql);
  $numrow = mysqli_num_rows($return);
  
  if ($return){
    while ($row = mysqli_fetch_assoc($return)){
      printf ($row['user_id']);
    }
  }
  $var=7;

  $_SESSION['userid'] = $var;
  echo $var;

  if(! $return){
    die('Could not enter data: ' . mysqli_error());
  }
  if ($numrow==0)
    echo "Invalid login";
  else
    echo "Login successful";
  mysqli_close($mysqli);
  ?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>New Account</title>
  </head>
  <body>
  <form action="book.html">
    <input type="submit" name="submit" value="plan my trip!">
  </form>
  </body>
  </html>