<?php
//Make this connection as a separate conncetion file and then include once wherever needed!!!!!
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
/*$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}*/

// values from form
$username = $_POST['name'];
$pwd = $_POST['pwd'];
$email = $_POST['email'];

 //To add an intry in the table in our database
$sql = "INSERT INTO login (name, email, pwd) VALUES ('$username', '$email', '$pwd')" ;

if ($conn->query($sql) === TRUE) {
 echo "<h6>Registration Successful</h6>
 <p><a href='exercise1.html'>Home</a></p>";
 } else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}


//To check if a fiel is empty using MYSQL..........error handling
//if (empty(($username))) header("location: ../signup.php?error=emptyfirld&uid=".$username."&mail=".$email) exit();

/*//To check from database to validate the stuff given by username
$name= $_POST['username'];
$email= $_POST['email'];
//USE prepared statements.......use placeholders
$sql = "SELECT password FROM logindetails WHERE email=?;";
$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)) {echo "something went wrong"; exit();}
echo 'successful';
else {
  mysqli__stmt_bind_param($stmt, "s");
}
/*$result = mysqli_query($conn, $sql);

$resultCheck= mysqli_num_rows($result);
if($resultCheck > 0){
  while($row = mysqli_fetch_assoc($result)){
    echo $row['email'];
    echo '$email';
    if($email == $row['email'])
    echo $row['password']. "<br />";
    else {
        echo 'Oops !';
    }
  }
} //echo 'yes result';*/

//if login successful
session_start();
$_SESSION['name'] = $username;
$_SESSION['email'] = $email;

$conn->close();

//for the page to be redirected
//header("refresh:5; url=login.html");

?>
