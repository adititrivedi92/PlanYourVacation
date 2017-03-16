<html>
<body>
<h1>Welcome!</h1>
<?php  
$firstErr = $lastErr = $emailErr = $pwdErr ="";
$first = $last = $email = $pwd = "";

if (isset($_POST["submit"])){
  if($first = test_input($_POST["first"])){
    echo $first;
    echo "<br>";
  }
  else{
    $firstErr = "First name required!";
    echo $firstErr;
    echo "<br>";
  }
  
  if($last = test_input($_POST["last"])){
    echo $last;
    echo "<br>";
  }
  else{
    $lastErr = "Last name required!";
    echo $lastErr;
    echo "<br>";
  }
  if($pwd = test_input($_POST["password"])){
    echo $pwd;
  }
      
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
 ?>
</body>
</html>