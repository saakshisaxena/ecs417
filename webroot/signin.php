
<?php
//Make this connection as a separate conncetion file and then include once wherever needed!!!!!
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

// values from form
$username = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

 //To add an intry in the table in our database
$sql = "INSERT INTO login (name, email, pwd) VALUES ('$username', '$email', '$pwd')" ;

if ($conn->query($sql) === TRUE) {
 echo "<h6>Registration Successful</h6>";
 header("refresh:2; url=addpost.html");
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}



session_start();
$_SESSION['name'] = $username;
$_SESSION['email'] = $email;

$conn->close();

//for the page to be redirected
//header("refresh:5; url=login.html");

?>
