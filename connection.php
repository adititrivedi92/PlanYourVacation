<?php 
  $mysqli=mysqli_connect('localhost', 'root', 'titanic4', 'vacationdb');
  if (! $mysqli){
    die('Could not connect:' . mysql_error());
  }
  echo "Connected Successfully";
  if(!mysqli_select_db($mysqli, 'vacationdb')){
    echo "Database not selected";
  }
  echo "Selected Successfully";
?>
