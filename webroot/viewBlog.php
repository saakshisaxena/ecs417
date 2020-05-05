<?php

  //Make this connection as a separate conncetion file and then include once wherever needed!!!!!
    $servername = getenv("MYSQL_SERVICE_HOST");
    $username = getenv("DATABASE_USER");
    $password=getenv("DATABASE_PASSWORD");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $db=getenv("DATABASE_NAME");

    $conn = new mysqli($servername, $username, $password, $db);
    //echo "gReat work :DD";
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ob_start();
?>



<html>
  <head>
    <link rel="alternate.stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
      body{
        margin: 3%;
        margin-bottom: 2%;
        background:  url("https://thepbsblog.files.wordpress.com/2015/12/blog-laptop.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        color: white;
        background-blend-mode: color-dodge;
        text-align: left;
        font-family: 'Liu Jian Mao Cao', cursive;
        font-size: small;
        margin-top: 0;
        }
        body h2 {
           text-align: center;
           font-size: 200%;
         }
         p {
           text-align: right;
           font-size: 90%;
         }
         /* Turn off parallax scrolling for all tablets and phones. Increase/decrease the pixels if needed */
         @media only screen and (max-device-width: 1366px) {
           .overflow-auto {
             background-attachment: scroll;
           }
         }
         /* width */
         ::-webkit-scrollbar {
           width: 10px;
         }

         /* Track */
         ::-webkit-scrollbar-track {
           background: #f1f1f1;
         }

         /* Handle */
         ::-webkit-scrollbar-thumb {
           background: #888;
         }

         /* Handle on hover */
         ::-webkit-scrollbar-thumb:hover {
           background: #555;
         }
         header {
           margin-bottom: 5%;
         }
         #blog {
           text-shadow: 2px 2px 8px #000000;
                 border: 2px solid black;
            padding: 2%;
         }
         body strong {
           font-size: 175%;
           font-family: "Courier New", Courier, monospace;
         }
         .overflow-auto {


            /* Set a specific height */
            height: 500px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          .bg-dark {
            background-color: transparent !important;
        }
        nav a {
          text-align: center;
        }



    </style>

  </head>

  <body>
    <header>
    <!-- Navbar (sit on top) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="topnav" >
      <a href="#home" class="navbar-brand"><span cloHOME <span class="sr-only">(current)</span> </a>
       <a class="navbar-brand" href="#smthspecial" style="color:white; ">Saakshi Saxena</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--  <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
          </a> -->
          <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
              <a href="index.php#topnav" class="nav-link" style="color:white;">HOME <span class="sr-only">(current)</span> </a>
            </li>
          <!--  <li class="nav-item">
              <a href="index.php#about" class="nav-link" style="color:white;"> ABOUT</a>
            </li> -->
            <li class="nav-item">
              <a href="index.php#portfolio" class="nav-link" style="color:white;"> PORTFOLIO</a>
            </li>
            <li class="nav-item">
              <a href="viewBlog.php" class="nav-link" style="color:white;"> BLOG</a>
            </li>
              <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
                <i class="fa fa-search"></i>
              </a> -->
            <!--  <li class="nav-item" >
                <a href="" class="nav-link" id="sp"> Surprise Me</a>
              </li> -->
            </ul>
           </div>
      </nav>
  </header>
    <div id="blog" class="overflow-auto" >
      <h2> Blog</h2>
      <p> <?php //USE prepared statements.......use placeholders
      $sql = "SELECT * FROM blog ORDER BY date DESC, time DESC ;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row

          while($row = $result->fetch_assoc()) {
            if(! ($row["text"] == null)){

               $newdate= date("jS M Y, ", strtotime($row["date"]));
               $newtime= date("h:ia ", strtotime($row["time"]));
              echo /*" <strong> Date:</strong> "*/"<p>&#128336; " . $newdate./* " <strong> Time:</strong> " .*/ $newtime./*" UTC ".*/ "</p> <br> <strong>" . $row["title"]. "</strong><br>";
              echo " <em> " . $row["text"]. "</em><br>". "<br><hr> <br>";

            }
          }

      } else {
          echo "0 results <br> Redirecting to login page.";
          header("refresh:2; url=login.html");
          exit();
      }
      ob_end_flush();
        ?> </p>
      <a style="font-size: 125%;" href="addPost.html"> <strong>Add a post</strong> </a>

    </div>
  </body>

</html>
<?php
    $conn->close();
?>
