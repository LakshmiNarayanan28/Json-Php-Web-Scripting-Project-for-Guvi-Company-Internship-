<?php
session_start();
include "database.php";


if(!isset($_SESSION["ID"]))
{
	header("location:ulogin.php");
}
	
?>

<html>
<head>

<title>Guvi Intern</title>

 <link rel="stylesheet" href="style.css">

</head>
<body background="im2.jpg">



<center>

<?php
	   if(isset($_POST["submit"]))
	   {
		   $sql="insert into request (ID,MES,LOGS) values ({$_SESSION["ID"]},'{$_POST["mess"]}',now())";
		      $res=$db->query($sql);
			 
					 echo "<p>YOUR REQUEST SUCCESSFULLY SEND DUDE</p>";
			  
			  
	   }
   ?>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
        
			  
		  
		  <h2 style="color:white">Type Your Queries as Messages</h2>
		  <textarea class="textarea" required name="mess"></textarea><br><br>
		        
				 
				 <button class="button1" type="submit" name="submit">Send Message..</button>
			  
			  
			  <button class="button2"><a href="logout.php">Logout</a></button> 
   </form>


</center>





</body>
</html>



