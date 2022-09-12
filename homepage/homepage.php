<?php

session_start();

if(!isset($_SESSION['username']))
{

  header('location:index.php');
}

?>



<!DOCTYPE html>
<html>

    <head>
      <title>Home Page E-library</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style type="text/css">
          body
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 200px;
  text-align: center;
  background: white;
      background: url(book.jpg);
  background-size: 1500px 1000px;
}

.site-logo {
  margin-left: 20px;
}
}

.header h1 {
  font-size: 100px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: darkorange;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;

}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 70px;
   background: url(book3.jpg);
   background-size: 500px 100px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 40px;
  margin-top: 20px;

}
.fa {
  padding: 10px;
  font-size: 30px;
  width: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.4;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: linear-gradient(#ff6600,#ffa366);
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>

          
        </style>
    </head>
<body>
<style>
h2 {
  text-shadow: 2px 2px #FF0000;
}
</style>
<div class="header">
  <h1></h1>
  <p></p>
</div>

<div class="topnav">
  <a href="logout.php" target="_parent" style="float:right">LOGOUT</a>
  <a href="feedback1.php" target="_parent" style="float:right">FEEDBACK</a>
   <a href="about.php" target="_parent" style="float:right">ABOUT US</a>
  <a href="bookhome1.php" target="_parent"  style="float:right">BOOKS</a>
  <a href="" style="float:right">HOME</a>
  <a href="" style="float:left">Hello <?php echo $_SESSION['username'];?> </a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">

<h2><center><u><marquee scrollamount="10">....E-LIBRARY....</marquee></u></center></h2>
         
		  <div class="fakeimg" style="height:200px; background: url(book2.jpg);
           background-size: 1000px 409px;"></div>
		   
      
      <p><b>INTRODUCTION..</b></p>
	  
      <p><b>
         In this era of technology, many of the libraries don't have their 
       own websites. For an establishment the importance of a website 
       cannot be over emphasised. An organization without a website  
       can  be  said  to  be  locking  a  very  significant  factor  in  its 
       development. Nowadays people want to explore the services and 
       products  of  an  organization  on  their  desktop,  and  explore  its 
       services in order to make up their mind whether or not to deal 
       with that organization. A website not only lends credence to its 
       services but also creates a confidence among its users that they 
       are going to be provided with services of very high order.  
       For a new library user, library website is the first and foremost 
       starting point for visiting the library and exploring its resources 
       and services. Once you show your presence on the web, the size 
       of the library does not matter. It is because the importance of a 
       library  website  cannot  be  overlooked.  Even  though  there  are 
       many libraries which do not have the library website because of 
       various reasons.   You need not have a big and bulky website to 
       promote the services of your library, but you can have a simple and pin-pointed site, showing the comprehensive view of your 
       library.
	   </b>
 
    </marquee>
	</div>
    <div class="card">
      <h3> <center>AIMS OF LIBRARY WEBSITE</center></h3>
      <div class="fakeimg" style="height:300px; background: url(book4.png);
   background-size: 1050px 350px;"></div>
      <p>
        
           <marquee direction ="up">
		   <b>
		   1)  Providing  a  guide  to  the  availability  of  learning 
           resources  the  library  holds,  and  services  the  library 
           provides <br>
           2)  Providing  the  people  a  way  of  their  rights  to  exploit 
           these resources <br>
           3) Providing a platform to the patrons to start their search 
           process to avoid ambiguity in accessing the resources <br>
           4) Providing  a  device  to  make  the  users  aware  and 
           competent  enough  to  be  able  to  use  the  library 
           resources as self dependent learning resource users.<br>
		   5)To publicize the resources and services of the library 
            and make the users aware about them.<b></p>
		   </marquee>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h4>About Us</h4>
      <div class="fakeimg" style="height:100px;"></div>
      <p><b>we have lots of books in our Books section.<br>
	      <marquee direction ="up">
	     1)GENERAL KNOWLEDGE BOOKS.<br>
		 2)ENGINEERING BOOKS.<br>
		 3)MAGZINES.<br></p>
		 </marquee>
		 <p>*You can give us feedback in feedback section.*</b></p>
		 <p><b>*You can enroll yourself with LoginID*</b></p>
    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p></p></div>
     
    </div>
    <div class="card">
      <h3>Follow Me</h3>
     
      <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a><br>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a><br>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a><br>
    </div>
  </div>
</div>

<div class="footer">
  <p>copyright © E-library
  </p>
</div>

</body>
</html>
  