<?php
session_start();
 include "database.php"


 
 ?>
 <?php
 include "alog.php"
?>
<html>
<head>

<title>Guvi Intern</title>
<link rel="stylesheet" href="style.css">
</head>
<body background="im1.jpg">


            
			<center>
<h3>ADMIN LOGIN HERE</h3>
<form action="alogin.php" method="post">
  <h4>ADMIN NAME</h4>
  <input class="cock" type="text" name="aname" required>
  <h4>PASSWORD</h4>
  <input  class="cock" type="password" name="apass" required>
  
     <button class="button1" type="submit" name="submit">
	 Login now
	 </button>
  </form>
  
  </center>
  

</body>
</html>



