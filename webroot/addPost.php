<?php


$user = 'root';
$password='';
$db='miniprojectdb';

$conn = new mysqli('localhost', $user, $password, $db);
//echo "gReat work :DD";
// Check connection
if ($conn->connect_error) {
//echo "aww :\(";
die("Connection failed: " . $conn->connect_error);
}

$currentdate = date("Y.m.d");

$currenttime = date("H:i:s");

$title = $_POST['title'];

$correcttitle= str_replace("'","\'",$title);


$blogtext = $_POST['blogtext'];

$correctblog= str_replace("'","\'",$blogtext);
$correctblog= str_replace("\n","<br />",$blogtext);


 //To add an intry in the table in our database
$sql = "INSERT INTO blog (date, time, title, text ) VALUES ('$currentdate', '$currenttime', '$correcttitle', '$correctblog' )" ;

if ($conn->query($sql) === TRUE) {
 echo "<h6>Registration Successful</h6>";
// <p><a href='exercise1.html'>Home</a></p>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("refresh:2; url=viewBlog.php");
?>
