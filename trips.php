<?php
session_start();
include "connection.php";
$id = $_SESSION['userid'];
echo "you r a fool";
printf($id,"ans");
//$sql = "INSERT INTO trips (user_id, city1, city2, start, finish, status) VALUES ('$uid', '$_POST[start]', '$_POST[destination]', '$_POST[departure]', '$_POST[return]', NULL)";
  
  //$return = mysqli_query($mysqli, $sql);

  //if(! $return){
  //  die('Could not enter data: ' . mysqli_error());
 //}
  //echo 'Data entered Successfully \n';
  //mysqli_close($mysqli);
?>
