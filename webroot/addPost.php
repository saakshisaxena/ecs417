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


$currentdate = gmdate("d.m.Y");

$currenttime = gmdate("H:i:s");

$title = $_POST['title'];

$correcttitle= str_replace("'","\'",$title);


$blogtext = $_POST['blogtext'];

$correctblog= str_replace("'","\'",$blogtext);


 //To add an intry in the table in our database
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $sql = "INSERT INTO blog (date, time, title, text ) VALUES ('$currentdate', '$currenttime', '$correcttitle', '$correctblog' )" ;

    if ($conn->query($sql) === TRUE) {
     echo "<h6>Registration Successful</h6>";


     } else {

     echo "Error: " . $sql . "<br>" . $conn->error."<br> <h4>Blog not saved!<br>If a single quote is used, replace it with a double quote.</h4>";
     header("refresh:10; url=viewBlog.php");
    }

    $conn->close();
  }

header("refresh:2; url=viewBlog.php");
?>
