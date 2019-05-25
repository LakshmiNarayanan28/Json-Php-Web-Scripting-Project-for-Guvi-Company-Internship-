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

<title>Guvi Intern</title>
</head>
<body background="im8.jpg">


<center>
<h2>Our Users Request And Queries..</h2>
<?php
   $sql="SELECT STUDENT.NAME,STUDENT.MAIL,request.MES,request.LOGS from STUDENT inner join request on STUDENT.ID=request.ID";
   $res=$db->query($sql);
   if($res->num_rows>0)
   {
	   echo "<table border=4 width=800 height=150>
	   <tr>
	   <th>SNO</th>
	   <th>NAME</th>
	   <th>EMAIL</th>
	   <th>MESSAGE</th>
	   <th>LOG</th>
	   </tr>
	   
	   ";
	             $i=0;
	         while($row=$res->fetch_assoc())
			 {
				 $i++;
				 echo "<tr>";
				 echo "<td>{$i}</td>";
				 echo "<td>{$row["NAME"]}</td>";
				 echo "<td>{$row["MAIL"]}</td>";
				 echo "<td>{$row["MES"]}</td>";
				 echo "<td>{$row["LOGS"]}</td>";
				 echo "</tr>";
			 }
					   echo "</table>";
			 }
   else
   {
	   echo "<h2>NO RECORDS FOUND</h2>";
   }
  
  ?>

</center>


</body>
</html>
