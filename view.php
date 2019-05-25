<?php
session_start();
include "database.php";


if(!isset($_SESSION["AID"]))
{
	header("location:alogin.php");
}
	
?>

<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Guvi Intern</title>

</head>
<body background="im9.jpg">



<center>
     <h2>The Details about the Users</h2>
    	<button class="button1"><a href="ahome.php">All User Data </button>
		<button class="button1"><a href="viewrequest.php">View User Request </button>
	</center>
    <center>   <button class="button2"><a href="logout.php">Logout</a></button>    </center>
 
 
<h4>Note:***Make sure to Logout***</h4>


 
</body>
</html>





