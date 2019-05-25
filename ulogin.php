<?php
session_start();
 include "database.php"
 
 ?>


<html>
<head>

<title>Guvi Intern</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="im1.jpg">


            <?php
			if(isset($_POST["submit"]))
			{
				 $sql="SELECT * FROM student where NAME='{$_POST["name"]}' and MAIL='{$_POST["mail"]}'";
				  $res=$db->query($sql);
				  if($res->num_rows>0)
				  {
					  $row=$res->fetch_assoc();
					  $_SESSION["ID"]=$row["ID"];
					  $_SESSION["NAME"]=$row["NAME"];
					  header("location:request.php");
				  }
				  else
				  {
					  echo "<center><p class='error'>Invalid user details</p></center>";
				  }
			}
			?>
			<center>
<h2>USER LOGIN HERE</h2>
<form action="ulogin.php" method="post">
  <h3>USER NAME</h3>
  <input  class="cock"type="text" name="name" required>
  <h3>EMAIL AS PASSWORD</h3>
  <input  class="cock" type="password" name="mail" required>
  
   <button class="button1" type="submit" name="submit">
	 Login now
	 </button>
  </form>
  </center>
  
  

</body>
</html>



