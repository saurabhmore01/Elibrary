
<html>
<head>
  <title>Register Form E-Library</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="register.css">
  <style type="text/css">
    body
{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url("register.jpeg");
  background-repeat: no-repeat;
  background-size: cover;
  height: 100%;
  overflow: hidden;
}
.center
{
  position: absolute;
  top: 50%;
  left: 25%;
  transform: translate(-50%,-50%);
  width: 400px;
   background-image: linear-gradient(to bottom right,#ff99dd,#ffff66);
    border-radius: 10px;
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
.container {
  /*background-color: #f1f1f1;*/
  padding: 0px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: yellow;
  color: #000;
  position: relative;
  padding: 0px;
  margin-top: -230px;
  margin-left: 370px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  width: 220px;
  height: 200px;
}

#message p {
  padding: 0px 35px;
  font-size: 12px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -15px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -15px;
  content: "✖";
}

  </style>
    <script type="text/javascript">
      function validation() 
      {
        var a=document.getElementById("un").value;
        var b=document.getElementById("em").value;
        var c=document.getElementById("pn").value;
        var d=document.getElementById("pass").value;
        var e=document.getElementById("cpass").value;



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



        if(b.indexOf('@') <=0)
        {
              alert(" Invalid @ position");
              return false;
        }


        if((b.charAt(b.length-4)!='.') && (b.charAt(b.length-3)!='.'))
        {
              alert(" Invalid . position");
              return false;
        }


        if(isNaN(c))
        {
              alert(" In phone only numbers are allowed");
              return false;
        }


        if(c.length!=10)
        {
              alert(" Phone number must be 10 digit");
              return false;
        }

        if((c.charAt(0)!=9) && (c.charAt(0)!=8) && (c.charAt(0)!=7))
        {
              alert(" Phone number must be  start with 9,8,7");
              return false;
        }

        if(d!=e)
        {
              alert(" Password and confirm password should not match");
              return false;
        }

         

      }


    </script>
</head>
<body>
  
<div class="center">
  <h1>Register</h1>
  <form action="register1.php" onsubmit="return validation()" method="post">
    <div class="txt">
      <input type="text" id="un" name="username" required autocomplete="off">
      <span id="unm"></span>
      <label>UserName</label>
    </div>

    <div class="txt">
      <input type="text" id="em" name="email"  required autocomplete="off">
      <span id="emm"></span>
      <label>Email id</label>
    </div>

    
    <div class="txt">

      <input type="text" id="pn" name="phoneno" required autocomplete="off">
      <span id="pnm"></span>
      <label>Phone no</label>
    </div>

    <div class="txt">
      <input type="password" id="pass" name="password" onclick="valid()" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete="off">
      <span id="passm"></span> 
      <div class="eye"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i></div>
      <label>Password</label>
    </div>
    <div id="message">
  <h6>Password must contain the following:</h6>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>

    <div class="txt">
      <input type="password"  id="cpass" name="confirmpassword" required autocomplete="off">
      <span id="cpassm"></span>
       <div class="eye"><i class="fa fa-eye" aria-hidden="true" id="eyes" onclick="toggles()"></i></div>
      <label>Confirm Password</label>
    </div>


    <input type="submit" name="submit" value="Register">
         <div class="signup">
     If you already register? Go for<a href="index.php"> Sign In</a>
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
<script type="text/javascript">
  var state=false;
  function toggles()
  {
    if (state) 
    {
      document.getElementById("cpass").setAttribute("type","password");
      document.getElementById("eyes").style.color='#7a797e';
      state=false;
    }
    else
    {
       document.getElementById("cpass").setAttribute("type","text");
       document.getElementById("eyes").style.color='#5887ef';
      state=true;
    }
  }
</script>

<script>
var myInput = document.getElementById("pass");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function valid() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function valid() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function valid() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

</body>
</html>


