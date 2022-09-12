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
  }

*/

$username=$_POST['username'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$password=$_POST['password'];

$query= mysqli_query($conn,"SELECT * FROM register WHERE username='$username'");
if (mysqli_num_rows($query)>0) 
{
               ?>
               <script >
               alert("Username is already use....");
               </script>
               <?php
               ?>
              <script >
                location.replace("register.php");
               </script>
               <?php
}
else
{

$query= mysqli_query($conn,"SELECT * FROM register WHERE email='$email'");
if (mysqli_num_rows($query)>0) 
{
               ?>
               <script >
               alert("Email is already use....");
               </script>
               <?php
               ?>
              <script >
                location.replace("register.php");
               </script>
               <?php
}
else
{

$query= mysqli_query($conn,"SELECT * FROM register WHERE phoneno='$phoneno'");
if (mysqli_num_rows($query)>0) 
{
               ?>
               <script >
               alert("Phoneno is already use....");
               </script>
               <?php
               ?>
              <script >
                location.replace("register.php");
               </script>
               <?php
}
else
{



$sql="insert into register(username,email,phoneno,password) values('$username','$email','$phoneno','$password')";

if($conn->query($sql))
{
  	?>
  	<script >
  		alert("Record Insert succesfully");
  	</script>
  	<?php
    ?>
              <script >
                location.replace("emailvalid.php");
               </script>
               <?php
  }
  else
  {
  	?>
  	<script >
  		alert("Failed To Insert Record"+<?php echo $sql?>);
  	</script>
  	<?php
  	 ?>
              <script >
                location.replace("register.php");
               </script>
               <?php
  	
  }
}
}
}
?>