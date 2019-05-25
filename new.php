<?php

include "database.php";


?>

<html>
<head>

<title>Guvi Intern</title>

 <link rel="stylesheet" href="style.css">
</head>
<body background="bab.jpg">

 <?php
	   if(isset($_POST["submit"]))
	   {
		   
			   $sql="insert into student(NAME,MOBILE,MAIL,DEP,GENDER,CITY,LANGUAGESKNOWN) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}'
			   ,'{$_POST["dep"]}','{$_POST["gen"]}','{$_POST["city"]}','{$_POST["lk"]}')";
			   $db->query($sql);
			   echo "<center><p class='success'>REGISTRATION SUCCESS..THANKYOU</p></center>";
		   		   
	   }
   ?>
   <center>
   <h3>USER REGISTER HERE</h3>
   <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" >
         <h4> <label>YOURNAME</label></h4>
		      <input class="cock" type="text" name="name" required>
			<h4>  <label>MOBILE NUMBER</label></h4>
			  <input class="cock" type="number_format" name="pass" required>
			  
			<h4>  <label>EMAIL-ID(Password)</label></h4>
			  <input class="cock" type="email" name="mail" required>
			 <h4><label>OCCUPATION</label></h4>
			<h4> <select class="cock" name="dep" required>
			                   <option value="">Select</option>
							    <option value="student">Student</option>
								<option value="Working">Working</option>
								<option value="Research person">Research Person</option>
								<option value="Others">Others</option>
								 
								   </select><h4>
								   
								   <h4>  <label>GENDER</label></h4>
			  <input class="cock" type="text" name="gen" required>
			  					   <h4>  <label>CITY</label></h4>
			  <input class="cock" type="text" name="city" required><br><br>
			  <h4>  <label>LANGUAGES KNOWN</label></h4>
			  <input class="cock" type="text" name="lk" required>
			    
			  
								  
		  <button class="button1" type="submit" name="submit">Register</button>
		  <button class="button2"><a href="logout.php">Goto Home Page</a></button> 
			  
   </form>
  
   </center>


</body>
</html>

