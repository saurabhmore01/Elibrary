<?php

session_start();

?>




<!DOCTYPE html>
<html>
<head>
  <title>login Form E-Library</title>
  <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <style type="text/css">
    body
{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("login.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
  height:100%;
  overflow: hidden;
}
.center
{
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%,-50%);
  width: 400px;
    background-image: linear-gradient(to bottom right,#ff99dd,#ffff66);
    /*border-radius: 10px;*/
}
.center h1
{
  text-align: center;
  padding: 0 020px 0;
  /*border-bottom: 1px solid silver;*/
}
.center form
{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt
{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt input
{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border:none;
    background: none;
    outline: none;
}
.txt label
{
  position: absolute;
  top: 50%;
  left: 5px;
  color: blue;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
    transition: .5s;
}
.txt span::before
{
    content: '';
    position: absolute;
    top:40px;
    left: 0;
    width: 100%;
    height: 2px;
    background: #2691d9;
}
.txt input:focus ~label,
.txt input:valid ~label
{
  top: -5px;
  color:#2691d9;
}
.txt input:focus ~span::before,
.txt input:valid ~span::before
{
  width: 100%;
}
/*.pass
{
  margin:-5px 0 20px 5px;
  color:#a6a6a6;
  cursor: pointer;
}
.pass hover
{
  text-decoration: underline; 
}*/
input[type="submit"]
{
  width: 100%;
  height: 50px;
  border: 1px solid ;
  background: #2691d9;
  border-radius: 25px;
  font-size: 18px;
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
.signup
{
  margin:30px 0;
    text-align: center;
    font-size: 16px;
}
.signup a
{
  color: blue;
  text-decoration: underline; 
} 
.eye
{
   position: absolute;
   right:15px;
   transform: translate(0,-50);
   top: 35%;
   cursor: pointer;
}
.fa{
  font-size: 20px;
  color:#7a797e;
}
  </style>

</head>
<body>
  
<div class="center">
  <h1>Login</h1>
  <form action="index.php" method="post">
    <div class="txt">
      <input type="text" name="username" required autocomplete="off">
      <span></span>
      <label>Username</label>
    </div>

    <div class="txt">
      <input type="password" id="pass" name="password" required autocomplete="off">
      <span></span>
      <div class="eye"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></div>
      <label>Password</label>
    </div>

    <input type="submit" name="submit" value="Login">
         <div class="signup">
    Not yet Register?<a href="register.php"> Sign Up</a>
          </div>
  </form>
</div>
<script type="text/javascript">
  var state=false;
  function toggle()
  {
    if (state) 
    {
      document.getElementById("pass").setAttribute("type","password");
      document.getElementById("eye").style.color='#7a797e';
      state=false;
    }
    else
    {
       document.getElementById("pass").setAttribute("type","text");
       document.getElementById("eye").style.color='#5887ef';
      state=true;
    }
    
  }
</script>

</body>
</html>






<?php
 $conn=new mysqli('localhost','id15674490_root','Malusare@123456','id15674490_mahesh');
  
 


if(isset($_POST['submit']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
 
  $username_search ="select *from register where username='$username' ";
  $query =mysqli_query($conn,$username_search);


  $username_count =mysqli_num_rows($query);

  if($username_count )
  {
    $username_pass = "select *from register where password='$password' ";
     $query =mysqli_query($conn,$username_pass);

     


       $username_pass =mysqli_num_rows($query);

    
      if($username_pass)
       {
          ?>
               <script >
                alert("Login succesfully");
               </script>
              <?php
              $_SESSION['username']=$username;
              ?>
              <script >
                location.replace("homepage.php");
               </script>

              <?php

        }
        else
        {
          ?>
                 <script >
                alert("Password Incorrect");
                  </script>
                 <?php
         }
    }
    else{

         ?>
             <script >
                alert("Invalid Username");
                 </script>
                    <?php

          }


  }



?>  
