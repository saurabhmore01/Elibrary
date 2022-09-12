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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  background: url('about.jpg') no-repeat center;
  background-size: cover;
  padding: 50px;
  text-align: center;
  color: white;
  width: 100%;
  height: 70vh;
  
}

.container {
  padding: 0 100px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
  color: grey;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
.topnav 
{
  overflow: hidden;
  background-color: darkorange;
}


.topnav a 
{
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}

.topnav a:hover 
{
  background-color: #ddd;
  color: black;
}


@media screen and (max-width: 1250px) {
  .column {
    width: 100%;
   /* display: block;*/
  }
}
</style>
</head>
<body>
  <div class="topnav">
   
  <a href="logout.php" target="_parent" style="float:right">LOGOUT</a>
  <a href="feedback1.php" target="_parent" style="float:right">FEEDBACK</a>
  <a href="about.php" target="_parent" style="float:right">ABOUT US</a>
  <a href="bookhome1.php" target="_parent"  style="float:right">BOOKS</a>
  <a href="homepage.php" style="float:right">HOME</a>
  <a href="" style="float:left">Hello <?php echo $_SESSION['username'];?> </a>

</div>

<div class="about-section">
  <h1>Who we are</h1>
  <p><font size="7">Designers, Thinkers & Executors.</font></p>
  <p>Start reading, start inspiring</p>
</div>

<h2 style="text-align:center"><p><font size="3">An e-library or Digital library is a physical site and/ or website that provide around the clock online access to digitized audio, video, and written material. It provides free copies of books, journals, etc. available to the users. Normally these materials are classics which have no copyright digital formats (as opposed to print, microform, or other media) and accessible by computers. The digital content may be stored locally, or accessed remotely via computer networks. A digital library is a type of information retrieval system. Digital Libraries are an increasingly popular research area that encompasses more than traditional information retrieval or database methods and techniques. There are many numbers of definitions</font></p></h2><br>

<h2 style="text-align:center"><p><font size="5">Our Team</font></p></h2>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2 style="text-align:center">Mr.Mahesh Malusare</h2>
         <p class="title" style="text-align:center">Web Designer</p>
        <p style="text-align:center">Backend Development </p>
        <p style="text-align:center">maheshmalusare35@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2 style="text-align:center">Mr.Saurabh More</h2>
        <p class="title" style="text-align:center">Web Designer</p>
        <p style="text-align:center">Home Page Development</p>
        <p style="text-align:center">saurabhmore100@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <div class="container">
        <h2 style="text-align:center">Mr.Sainath Patil</h2>
        <p class="title" style="text-align:center">Web Designer</p>
        <p style="text-align:center">Login & Registration page Development </p>
        <p style="text-align:center">saipatil1430@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2 style="text-align:center">Mr.Gopal Patil</h2>
        <p class="title" style="text-align:center">Web Designer</p>
        <p style="text-align:center">Feedback Page Development </p>
        <p style="text-align:center">buntyp6362@gmail.com.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>