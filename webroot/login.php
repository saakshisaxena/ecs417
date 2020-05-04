<?php

$servername = getenv("MYSQL_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password=getenv("DATABASE_PASSWORD");
$dbport = getenv("MYSQL_SERVICE_PORT");
$db=getenv("DATABASE_NAME");

$conn = new mysqli($servername, $username, $password, $db);

//echo "gReat work :DD";
// Check connection
if ($conn->connect_error) {
//echo "aww :\(";
die("Connection failed: " . $conn->connect_error);
}


//$username = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

$sql = "SELECT * FROM login WHERE email='$email';";
$result = $conn->query($sql);
$actiondone= false;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      if($row['pwd']==$pwd){
        echo 'success <br><br>' ;
        $_SESSION['name'] = $row["name"];
        echo "<h3>Welcome ".$_SESSION['name']." :) </h4>";
        header("refresh:2; url=addpost.html");
        $actiondone = true;
      }

    }
} else {
    echo "login failed <br>";
    echo "Redirecting to Sign up page.";
    header("refresh:2; url=signin.html");
    $actiondone = true;
}
if(!$actiondone)
 {echo "Something went wrong :( <br> Enter correct password for that email address.";
header("refresh:2; url=login.html");}










  session_start();
  //$_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $email;

  $conn->close();
?>
<!--<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title> Hello  </title>
</head>
<body>


</body>
</html>-->
