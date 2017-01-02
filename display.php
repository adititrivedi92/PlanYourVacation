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

  $id = $_POST['test'];
  echo $id;
  $sql = "select user_id, user_name, pwd from tbl_users where user_id = '$id' ";
  $disp = mysqli_query($mysqli, $sql);
  while ($result = mysqli_fetch_array($disp, MYSQL_ASSOC)) {
    echo "<br /> user id" . $result['user_id'];
    echo "<br /> name" . $result['user_name'];
    echo "<br /> password" . $result['pwd'];
  }

?>