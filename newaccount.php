<?php 
  $nameErr = $emailErr = $passErr = "";
  $name = $email = $pass = "";
  echo "php success";
  $mysqli=mysqli_connect('localhost', 'root', 'titanic4', 'vacationdb');
  if (! $mysqli){
    die('Could not connect:' . mysql_error());
  }
  echo "Connected Successfully";

  if(!mysqli_select_db($mysqli, 'vacationdb')){
    echo "Database not selected";
  }
  echo "Selected Successfully";
  $sql = "INSERT INTO tbl_users (user_id, user_name, pwd) VALUES (3, 'Mallika', 'waterloo')";
  
  $return = mysqli_query($mysqli, $sql);

  if(! $return){
    die('Could not enter data: ' . mysqli_error());
  }
  echo 'Data entered Successfully \n';
  mysqli_close($mysqli);
  ?>