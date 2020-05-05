<?php


$servername = getenv("MYSQL_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$password=getenv("DATABASE_PASSWORD");
$dbport = getenv("MYSQL_SERVICE_PORT");
$db=getenv("DATABASE_NAME");

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {

die("Connection failed: " . $conn->connect_error);
}

$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada)
$currentdate = gmdate("Y.m.d", time() + 3600*($timezone+date("I")));

$currenttime = gmdate("H:i:s", time() + 3600*($timezone+date("I")));

$title = $_POST['title'];

$correcttitle= str_replace("'","\'",$title);


$blogtext = $_POST['blogtext'];

$correctblog= str_replace("'","\`",$blogtext);
$correctblog= str_replace("`","\`",$blogtext);
$correctblog= str_replace("\n","<br />",$blogtext);


 //To add an intry in the table in our database
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "INSERT INTO blog (date, time, title, text ) VALUES ('$currentdate', '$currenttime', '$correcttitle', '$correctblog' )" ;

    if ($conn->query($sql) === TRUE) {
     echo "<h6>Registration Successful</h6>";


     } else {

     echo "Error: " . $sql . "<br>" . $conn->error."<br> Blog not saved!";
    }

    $conn->close();
  }

header("refresh:2; url=viewBlog.php");
?>
