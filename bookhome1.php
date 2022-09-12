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
  <title>Library Books</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
  p
  {
      background-color: darkorange;
      box-sizing:border-box;
      font-size:30px;
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
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover 
{
  background-color: #ddd;
  color: black;
}

  






</style>
</head>
<body>
  
  <div class="topnav">
  <a href="logout.php" target="_parent" style="float:right">LOGOUT</a>
  <a href="feedback1.php" target="_parent" style="float:right">FEEDBACK</a>
  <a href="about.php" target="_parent" style="float:right">ABOUT US</a>
  <a href="" target="_parent"  style="float:right">BOOKS</a>
  <a href="homepage.php" style="float:right">HOME </a>
  <a href="" style="float:left">Hello <?php echo $_SESSION['username'];?> </a>

</div>



 <p>GENERAL KNOWLEDGE BOOKS</p>


 <a href="https://www.google.co.in/books/edition/Encyclopedia_of_General_Science_for_Gene/tBvzDwAAQBAJ?hl=en&gbpv=1&dq=general+science&printsec=frontcover"><img src="GKbook1.jpeg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/General_Knowledge_2019/JFJRDwAAQBAJ?hl=en&gbpv=1"> <img src="gkbook111.jpeg" width="155px" height="225px"></a>
   <a href="https://www.google.co.in/books/edition/General_Knowledge_2020/B7SODwAAQBAJ?hl=en&gbpv=1"><img src="gkbook112.jpg" width="155px" height="225px"></a>
    <a href="https://www.google.co.in/books/edition/General_Knowledge_Genius/wlTYDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook113.jpg" width="155px" height="225px"></a>
     <a href="https://www.google.co.in/books/edition/General_Knowledge_Manual_2020/AiS-DwAAQBAJ?hl=en&gbpv=1"><img src="gkbook114.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/The_Fundamentals_of_General_Knowledge_fo/qpCBDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook115.jpg" width="155px" height="225px"></a><br>
      <a href="https://www.google.co.in/books/edition/Social_Harmony/hGNtCwAAQBAJ?hl=en&gbpv=1"><img src="gkbook116.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/Computer_Knowledge_for_SBI_IBPS_Clerk_PO/iW8rDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook117.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/The_Ecology_Environment_Compendium_for_I/RLctDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook118.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/Vedic_Mathematics_Sixteen_Simple_Mathema/CONPBPWB8HsC?hl=en&gbpv=1"><img src="gkbook119.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/Ignited_Minds/9KM3lT94M1MC?hl=en&gbpv=1"><img src="gkbook120.jpg" width="155px" height="225px"></a>
      <a href="https://www.google.co.in/books/edition/English_Grammar_Made_Easy/d-XFL9MQNZUC?hl=en&gbpv=1"><img src="gkbook121.jpg" width="155px" height="225px"></a>
      
       <a href="https://www.google.co.in/books/edition/3_Months_Current_Affairs_April_to_June_2/Q4T-DwAAQBAJ?hl=en&gbpv=1&dq=general+knowledge+2020&printsec=frontcover"><img src="gkbook122.png" width="155px" height="225px"></a>
        <a href="https://www.google.co.in/books/edition/Magbook_General_Science_2020/mhrzDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook123.jpg" width="155px" height="225px"></a>
       <a href="https://www.google.co.in/books/edition/Growth_of_the_Soil/KZHBDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook124.jpg" width="155px" height="225px"></a>
       <a href="https://www.google.co.in/books/edition/GATE_General_Aptitude_Engineering_Mathem/yiO-DwAAQBAJ?hl=en&gbpv=1"><img src="gkbook125.jpg" width="155px" height="225px"></a>
        <a href="https://www.google.co.in/books/edition/Rapid_Samanya_Gyan_2020_for_Competitive/remMDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook126.jpg" width="155px" height="225px"></a>
        <a href="https://www.google.co.in/books/edition/Bharat_2020/Mn_RDwAAQBAJ?hl=en&gbpv=1"><img src="gkbook127.jpg" width="155px" height="225px"></a>



<p>ENGINEERING BOOKS</p>


  <a href="https://www.google.co.in/books/edition/Basic_Mechanical_Engineering/8kA8BAAAQBAJ?hl=en&gbpv=1"><img src="engineering1.jpeg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Industrial_Engineering/eqfOEDSmcc8C?hl=en&gbpv=1"><img src="engineering2.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Electrochemical_Engineering/uadMDwAAQBAJ?hl=en&gbpv=1"><img src="engineering3.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Elements_of_Mechanical_Engineering_GTU/zIorDAAAQBAJ?hl=en&gbpv=1"><img src="engineering4.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Electronics_Engineering/exlZBAAAQBAJ?hl=en&gbpv=1"><img src="engineering5.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Electrical_Engineering/a7fGuMGQ3XMC?hl=en&gbpv=1"><img src="engineering6.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Fire_Engineering_s_Handbook_for_Firefigh/i4bmE2TqY6sC?hl=en&gbpv=1"><img src="engineering7.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Textbook_of_Engineering_Chemistry_4th_Ed/V2FDDAAAQBAJ?hl=en&gbpv=1"><img src="engineering8.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Project_Management_for_Business_and_Engi/29j4KfaZZKMC?hl=en&gbpv=1"><img src="engineering9.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Information_Technology_for_Energy_Manage/F2XH3A-n2cEC?hl=en&gbpv=1"><img src="engineering10.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Cybersecurity_Engineering_a_Secure_Infor/b1s8AwAAQBAJ?hl=en&gbpv=1"><img src="engineering11.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Programming_with_C++/Zw0jqouq61gC?hl=en&gbpv=1"><img src="engineering12.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Core_Java_Tm_Volume_1_Fundamentals_8_E/96gMhjaAviMC?hl=en&gbpv=1"><img src="engineering13.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Object_Oriented_Programming_and_Java/r10U16kgmkwC?hl=en&gbpv=1"><img src="engineering14.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Pro_PHP_Security/lVXnmsCCd3wC?hl=en&gbpv=1"><img src="engineering15.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/PHP_and_MySQL_Manual/qPrWL98_RDQC?hl=en&gbpv=1"><img src="engineering16.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/HTML_and_CSS/aGjaBTbT0o0C?hl=en&gbpv=1"><img src="engineering17.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/HTML_CSS_JavaScript_in_easy_steps/C3L1DwAAQBAJ?hl=en&gbpv=1"><img src="engineering18.jpg" width="155px" height="225px"></a>
  
  <p>MAGAZINES</p>


  <a href="https://www.google.co.in/books/edition/Value_Investing_And_Behavioral_Finance/YwAiBAAAQBAJ?hl=en&gbpv=1"><img src="magazine1.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Stocks_to_Riches_Insights_on_Investor_Be/no8iBAAAQBAJ?hl=en&gbpv=1"><img src="magazine2.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/India_s_first_magazine_on_India_Bureaucr/DaMEuVBMzL4C?hl=en&gbpv=1"><img src="magazine3.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Southscope_India_s_Leading_South_Film_Ma/MBkXAOmQDhoC?hl=en&gbpv=1"><img src="magazine4.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Sports_Car_Market_magazine_February_2009/-SixJrUESDcC?hl=en&gbpv=1"><img src="magazine5.jpg" width="155px" height="225px"></a>
  <a href="https://www.google.co.in/books/edition/Kasturi_e_magazine/CK7mDwAAQBAJ?hl=en&gbpv=1"><img src="magazine6.jpg" width="155px" height="225px"></a>



  <p>VIDEO & REFERENCE RESOURCE</p>


 <center><video controls autoplay width="500" height="350"><source src ="Video 1.mp4" type="video/mp4"></source> </video><br><button><a href=" https://youtu.be/588vIeynWFw">links of this video</button></a></center><br>
 <center><video controls autoplay width="500" height="350">
 <source src="Video 2.mp4" type="video/mp4"></source></video><br><button><a href="https://youtu.be/l9o33uBi40U">links of this video</a></button></center><br>
</body>
</html>
