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
  $sql = "SELECT * FROM tbl_users WHERE user_name ='Aditi' AND pwd = 'jjjjj' ";
  
  $return = mysqli_query($mysqli, $sql);
  $numrow = mysqli_num_rows($return);


  if(! $return){
    die('Could not enter data: ' . mysqli_error());
  }
  if ($numrow==0)
    echo "Invalid login";
  else
    echo "Login successful";
  mysqli_close($mysqli);
  ?>