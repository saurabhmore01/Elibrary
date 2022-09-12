<?php
 $conn=new mysqli('localhost','id15674490_root','Malusare@123456','id15674490_mahesh');
  
  /*if($conn)
  {
    ?>
    <script >
      alert("Connection succesfully");
    </script>
    <?php
  }
  else
  {
    ?>
    <script >
      alert("No Connection");
    </script>
    <?php
  }*/



$username=$_POST['username'];
$text=$_POST['text'];



$sql="insert into feedback(username,text) values('$username','$text')";

if($conn->query($sql))
{
    ?>
    <script >
      alert("Record Insert succesfully");
    </script>
    <?php
    ?>
              <script >
                location.replace("feedback1.php");
               </script>
               <?php
  }
  else
  {
    ?>
    <script >
      alert("Failed To Insert Record");
    </script>
    <?php
  }


?>