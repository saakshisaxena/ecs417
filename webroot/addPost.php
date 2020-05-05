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
echo 'after connection';
$timezone  = -5; //(GMT -5:00) EST (U.S. & Canada)
$currentdate = gmdate("Y.m.d", time() + 3600*($timezone+date("I")));
echo gmdate("Y.m.d", time() + 3600*($timezone+date("I")));
$currenttime = gmdate("H:i:s", time() + 3600*($timezone+date("I")));
echo gmdate("H:i:s", time() + 3600*($timezone+date("I")));
$title = $_POST['title'];

$correcttitle= str_replace("'","\'",$title);


$blogtext = $_POST['blogtext'];

$correctblog= str_replace("'","\'",$blogtext);
$correctblog= str_replace("\n","<br />",$blogtext);

echo 'outside if';
 //To add an intry in the table in our database
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
echo 'inside if post ...';
    $sql = "INSERT INTO blog (date, time, title, text ) VALUES ('$currentdate', '$currenttime', '$correcttitle', '$correctblog' )" ;
echo 'before if conn ...';
    if ($conn->query($sql) === TRUE) {
     echo "<h6>Registration Successful</h6>";
echo 'inside if success ';
    // <p><a href='exercise1.html'>Home</a></p>";
     } else {
echo 'before error';
     echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }

//header("refresh:2; url=viewBlog.php");
?>
