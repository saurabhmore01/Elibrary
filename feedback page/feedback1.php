<?php

session_start();

if(!isset($_SESSION['username']))
{

  header('location:index.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Form</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  

.centered {
  position: absolute;
  top: 50%;
  left: 45%;
  transform: translate(-50%,-50%);
  width: 400px;
  /*  background-image: linear-gradient(to bottom right,#ff99dd,#ffff66);*/
  box-sizing: border-box;
}
   body
   {
  	    margin: 0;
        padding: 0;
       font-family: sans-serif;
       background-image: url("feed.jpg");
       background-repeat: no-repeat;
       background-size: cover;
       height: 100vh;
       overflow: hidden;
}
input[type="submit"]
{
  width: 45%;
  height:30px;
  border: 1px solid ;
  background: #2691d9;
  border-radius: 25px;
  font-size: 15px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover
{
  border-color: #2691d9;
  transition: .5s;
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

  		
  </style>

  <script type="text/javascript">
   function validation() 
      {
        var a=document.getElementById("un").value;
        var b=document.getElementById("em").value;
        var c=document.getElementById("pn").value;
        


        if((a.length <= 3) ||(a.length > 20))
        {
              alert(" Please username should be greater then 3 alphabet");
              return false;
        }

        if(!isNaN(a))
        {
              alert(" Username only character are allowed");
              return false;
        }



       

      }

 
  </script>
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

 <form action="feedback.php" onsubmit="return validation()" method="post">
  <div class="centered">
   <h1>FEEDBACK </h1>
   <input type="text" id="un" name="username" placeholder="username" required autocomplete="off"><br><br>
 
  <textarea placeholder="comment" name="text" row="4" required autocomplete="off" style="width: 172px;"></textarea><br><br>
  <input type="submit" name="submit" value="SUBMIT">
  </div>
</form>
</body>
</html>

