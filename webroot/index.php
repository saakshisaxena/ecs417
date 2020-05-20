<?php
  session_start();
 ?>
<!Doctype html>
<html>
  <head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Saakshi Saxena."> <!-- This will often show up in search results.-->
    <title> Saakshi Saxena </title>
    <link rel="alternate.stylesheet" type="text/css" href="reset.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="index.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- add this to the css thing to make it phone etc responsive @media only screen and (max-width: 480px) {...} -->

  </head>

  <body>
    <div>
      <header>
        <hgroup>
          <!-- Top Navbar -->
          <nav class="navbar navbar-expand-lg navbar-light bg-dark" id="topnav">
            <a href="#home" class="navbar-brand"><span cloHOME <span class="sr-only">(current)</span> </a>
             <a class="navbar-brand" href="#smthspecial">Saakshi Saxena</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                 <li class="nav-item active">
                    <a href="#topnav" class="nav-link">HOME <span class="sr-only">(current)</span> </a>
                  </li>
                  <li class="nav-item">
                    <a href="#portfolio" class="nav-link"> PORTFOLIO</a>
                  </li>
                  <li class="nav-item">
                    <a href="viewBlog.php" class="nav-link"> BLOG</a>
                  </li>
                </ul>
              </div>
            </nav>
        </hgroup>
      </header>
<!--main elements of the page -->
       <div class="row">
         <div class="col-3">
<!-- side nav bar -->
          <aside class="sidenav" id="left">
            <?php
            if (isset($_SESSION['name'])) {
              echo '<p style="color: white; font-size: 50%;"> Welcome '.$_SESSION['name'].'</p>';
            }
             ?>
            <p style="color: #A9A9A9; font-size: 25px;"><strong> <em> Contact Me </em> </strong></p>
            <p>  <a href="https://uk.linkedin.com/in/saakshi-saxena-29797b174" target="_blank"> <figure> <image widht=50 height=50 src="https://www.keesingtechnologies.com/wp-content/uploads/2018/07/Linkedin-Icon.png"> <figcaption style="font-size: 60%; "> LinkedIn </figcaption></figure> </a> </p>
            <p> <a href="https://saakshisaxena.wordpress.com/author/saakshisaxena2000/" target="_blank"> <figure> <image widht=50 height=50 src="https://s.w.org/style/images/about/WordPress-logotype-simplified.png"> <figcaption style="font-size: 60%;"> Wordpress </figcaption></figure> </a> </p>
              <?php
                          if (isset($_SESSION['name'])) {
                            echo '<form action="logout.php" method="post">
                              <button style="font-size: 15px; margin-left: 0;" type="submit" name="logout-submit">Logout </button>
                            </form>';
                          }
                          else {
                            echo '<a style="font-size: 15px;  background: white;" href = "login.html">Login</a>
                            <p style="color: white; font-size: 50%; "> or </p>
                            <a style="font-size: 15px;  background: white;" href = "signin.html">Signin</a>';
                          }
                   ?>
          </aside>
          </div>
<!-- MAIN -->
            <article class="col-9 main" >
              <section id="aboutme" ><h2> About Me</h2>
                <p style="font-size:50%"> I am Saakshi Saxena, student at Queen Mary University Of London. </p>
                <p style="font-size:50%">Right from middle-school, I always enjoyed programming but didn't want to
                  limit myself to technical concepts only. I started with qBasic, Logo during schooling and ventured
                   into  OOPS and web programming languages as I grew up. My first mini project was a set theorem
                   prover where I combined two of my favourite subjects (mathematics and programming) to make it
                   easy for students and lecturers to verify set theorms. Later I also did mini projects in IoT
                   (traffic lights) and participated in Vodafone's "Code like a girl" program where I worked on
                   a web application. I am currently working on a project in Robotics (as part of AI society initiative)
                    and exploring cloud computing by deploying resources in Google Cloud. </p>
                <p style="font-size:50%">Apart from this, I also volunteered for activities like being a crew member for
                   Anime League gaming event and worked as a part-time administrator at a tuition centre to get non-tech related exposure. </p>
              </section>
              <div id="edu" class="overflow-auto"><h2> Education and Qualifications </h2>
                <br>
                <div class="row">
                  <table style="font-size:50%" class="table">
                   <caption> Academic Qualifications </caption>
                    <thead class="thead-dark">
                      <tr>
                        <th> Institution </th>
                        <th> Subjects </th>
                        <th> Marks </th>
                        <th> Average </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><strong>Queen Mary University of London </strong> BSc Computer Science 2019-2022</td>
                        <td> Computer Science (Currently in 1st year) </td>
                        <td> N/A </td>
                        <td>N/A </td>
                      </tr>
                      <tr>
                        <td rowspan="5"><strong>Page Institution </strong> (Year 12) Board of Intermediate Education</td>
                        <td> Mathematics</td>
                        <td> 96%</td>
                        <td rowspan="5">96.4% </td>
                      </tr>
                      <tr>
                        <td> English</td>
                        <td> 92%</td>
                      </tr><tr>
                        <td> French</td>
                        <td> 99%</td>
                      </tr><tr>
                        <td> Science (Physics)</td>
                        <td> 100%</td>
                      </tr><tr>
                        <td> Science (Chemistry)</td>
                        <td> 95%</td>
                      </tr>
                      <tr>
                        <td rowspan="5"><strong>Page Institution </strong> (Year 11) Board of Intermediate Education</td>
                        <td> Mathematics</td>
                        <td> 99%</td>
                        <td rowspan="5">95%</td>
                      </tr><tr>
                        <td> English</td>
                        <td> 87%</td>
                      </tr><tr>
                        <td> French</td>
                        <td> 96%</td>
                      </tr><tr>
                        <td> Science (Physics)</td>
                        <td> 98%</td>
                      </tr><tr>
                        <td> Science (Chemistry)</td>
                        <td> 95%</td>
                      </tr>
                      <tr>
                        <td rowspan="4"><strong>St. Joseph's Public School </strong> (Year 10) CISCE (ICSE), India</td>
                        <td> Computer Science</td>
                        <td> 100%</td>
                        <td rowspan="4">94.25%</td>
                      </tr><tr>
                        <td> Mathematics</td>
                        <td> 95%</td>
                      </tr><tr>
                        <td> English</td>
                        <td> 90%</td>
                      </tr><tr>
                        <td> Science</td>
                        <td> 92%</td>
                      </tr>
                    </tbody>
                    <tr>
                      <td>
                  </table>
              </div>
              </div>
<!--Skills and Achievements -->
              <div id="skills" class="overflow-auto"><h2> Skills and Achievements </h2>
                <div class="row">
                  <table style="font-size:50%" class="table table-striped">

                    <tr>
                      <td> Programming Languages </td>
                      <td> Java, JavaScript, Html, CSS, Scratch </td>
                    </tr>
                    <tr>
                      <td> Programming Methodologies</td>
                      <td>Structured Programming, Object Oriented Programming  </td>
                    </tr>
                    <tr>
                      <td> Data structures and Algorithms</td>
                      <td>Data structures and Algorithms	Arrays, Strings, Searching and Sorting Algorithms, ArrayLists  </td>
                    </tr><tr>
                      <td> MS Office</td>
                      <td> Word, Excel, PowerPoint</td>
                    </tr><tr>
                      <td> Operating Systems</td>
                      <td>Windows, Raspbian, Linux  </td>
                    </tr><tr>
                      <td> Web-development</td>
                      <td> JavaScript, CSS, Bootstrap, HTML, PHP </td>
                    </tr>
                  </table>
                  </div>
                  <div class="row">
                  <theader> Awards and recognition </theader>
                    <table style="font-size:50%" class="table table-striped">
                      <tr>
                        <td>Year 10:</td>
                        <td>Received academic award for <strong> top performance</strong>. </td>
                      </tr>
                      <tr>
                        <td>Year 11:</td>
                        <td>Received <strong> Best student of the Anveshan </strong>award. </td>
                      </tr>
                      <tr>
                        <td>Year 12:</td>
                        <td>Received <strong> Best Outgoing </strong>student award. </td>
                      </tr>
                      <tr>
                        <td>Undergraduate:</td>
                        <td>Got chosen for <strong>scholarship by Queen Mary University of London</strong> for academic excellence. </td>
                      </tr>
                  </table>
                  </div>
            </div>


<!-- PORTFOLIO -->
            <div id="portfolio" class="overflow-auto"><h2> Portfolio</h2>
                <div style="font-size:65%; text-align:left; background: rgba(255, 255, 255, 0.5); padding: 2%;"> <img src="https://media.giphy.com/media/26u49nPqBN5Is1SOk/giphy.gif" alt="Papers" height="100" width="100" style="float: left;"> <strong style="padding-left:15%;"> Technical paper </strong>(Year1, Professional research and practice)
                  <br> Analysis of cloud and its opportunities (benefits), security challenges of hybrid cloud, highlighting cases from banking sector, proposing solutions for a real-world security compromise which happened in AWS as a case study.
                </div>
                <br />
                <h4> <strong>Projects</strong> </h4>
                <ul id="uledu">
              <li>  <div style="font-size:93%; text-align:left;"> <img src="https://media.giphy.com/media/xTk9ZZvJbApGt3vy3C/giphy.gif" alt="Cloud" height="125" width="125" style="float: left;"> <strong style="padding-left:15%; font-size:125%;"> Gaming application on Google Cloud </strong> <br>Currently developing a Mansion explorer game and deploying it on Google Cloud platform with high availability, autoscaling and Global load balancing features.
                  <strong>Platforms/Languages:</strong> Java, Linux, JOption pane
                  <strong>Key Characteristics:</strong>
                  •	Graphical user interface using JOption pane
                  •	High Availability across multiple GCP regions
                  •	Autoscaling based on spikes in gaming activity
                  •	Global load balancing to distribute traffic across regions
                  •	Redundancy/Failover features to avoid downtime
                  </div> </li>
                  <br />
              <li>  <div style="font-size:93%; text-align:left;"> <img src="https://media.giphy.com/media/2ikwIgNrmPZICNmRyX/giphy.gif" alt="Website" height="100" width="100" style="float: left;"> <strong style="padding-left:15%; font-size:125%;"> Website creation  </strong> <br>Bucket list is a website which is meant to be a socializing platform for all age groups to share their experiences with other explorers, suggest the best and connect with people who share the same interests. It is      mostly a front end based creation which is under improvements.
                <strong>Platforms/ Languages:</strong> JavaScript, Bootstrap, CSS, HTML, Github.
              </div> </li>
              <br />
              <li>  <div style="font-size:93%; text-align:left;"> <img src="https://media.giphy.com/media/d8isjk1UBPFTm0EBbd/giphy.gif" alt="Sets" height="100" width="125" style="float: left;"> <strong style="padding-left:15%; font-size:125%;"> Set Theorem Prover </strong> <br>Theorem prover is a tool to verify various set theorems. It can be used by students/examiners/mathematicians to confirm if the set equations are valid or not. It’s also a fun way of learning core functionalities of sets. It’s an extension of “Set Calculator”(a mini project before this) which has a “Theorem Proving Engine” to calculate the set operations and validate whether the operations are equal or not. It has an easy menu driven interface to take user input and validate the Set theorems (both basic and compound operations).
              <strong>Platforms/Languages:</strong> Java, OOPS, Data structures (Hash set), BlueJ Java Editor
              <strong>Key Characteristics:</strong>
              •	Supports core set operations (Union, Intersection, Not)
              •	Supports compound set operations (For example: NOT(AUB) = NOT(A) n NOT(B))
              •	Uses Java Set library (Hash sets)
              •	Menu driven, extensible architecture, modular approach, reusable functions
              </div> </li>
              <br />
              <li>  <div style="font-size:93%; text-align:left;"> <img src="https://media.giphy.com/media/S1xV8cDgf7xJu/giphy.gif" alt="Lights" height="125" width="100" style="float: left;"> <strong style="padding-left:15%; font-size:125%;"> Traffic Lights Controller </strong> <br>This project is to implement traffic light controller by integrating electronics with computer programming. It can be extended to interface with other devices forming the basis of IoT.
              This project constitutes of two parts
              Traffic lights circuit integration with Raspberry PI
              Design and implementation of software for traffic light controller algorithm
              <strong>Hardware Platform:</strong> Raspberry Pi3 Model B.
              <strong>Operating System:<strong> Raspbian
              <strong>Language:</strong> Scratch Programming Interface
              <strong>Key Characteristics: </strong>
              •	Traffic light LED circuit
              •	Programmable traffic light controller interface
              •	Extensible architecture
              </div> </li>
            </ul>
            </div>

<!-- Work Experience -->
              <div id="experience" class="overflow-auto"><h2>Experience</h2>
              <p style="font-size:75%">  Work Experience </p>
              <ol style="font-size:50%">
                <li>
                <dt>	Part-Time Job as an Administrator </dt>
                <dd>Worked as an Administrator at a tuition center for 3 months. Learned working in a fast-passed environment and communicating between parents and authorities. Was responsible for smooth functioning of the center. </dd>
              </li>
              <br>
              <li>
                <dt>	Vodafone Code Like A Girl</dt>
                <dd> Attended Vodafone’s workshop on JavaScript, CSS, HTML, Bootstrap and more. Created few websites during those 4 days. Was the lead of a group presentation at the end of the program. <dd>
              </li>
              <br>
              <li>
                <dt>	Volunteering</dt>
              <dd>  Volunteered at the London Anime League and Gaming Con.  Responsible for registrations and smooth functioning of the event. </dd>
              </li>
              </ol>
            </div>
          </article>
          </div>
          <footer id= "last">
           <p><a href="#topnav"> to top </a> </p>
           <p style="font-family: "Times New Roman", Times, serif;"><a target="_blank" href = "https://uk.linkedin.com/in/saakshi-saxena-29797b174"> LinkedIn </a>
             | <a target="_blank" href = "mailto://saakshisaxena2000@gmail.com"> Contact Saakshi </a>
             | <a target="_blank" href = "https://www.facebook.com/saakshi.saxena2000"> Facebook </a> </p>
           <em style="font-family: "Times New Roman", Times, serif;"> Copyright &copy 2020 Saakshi Saxena </em>
           </footer>
        </div>

  </body>
</html>
