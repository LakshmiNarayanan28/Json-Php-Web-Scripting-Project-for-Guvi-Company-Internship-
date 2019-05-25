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
<link rel="stylesheet" href="style.css">
 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>
</head>
<body background="im8.jpg">


<center>
<h2>Registered Details of our Users retrived from PHP</h2>
<?php
   $sql="SELECT * FROM student";
   $res=$db->query($sql);
   if($res->num_rows>0)
   {
	   echo "<table border=1 width=400 height=150>
	   <tr>
	   <th>SNO</th>
	   <th>NAME</th>
	   <th>MOBILE</th>
	   <th>MAIL</th>
	   <th>OCCUPATION</th>
	    <th>GENDER</th>
		 <th>CITY</th>
		  <th>LANGUAGES KNOWN</th>
	   <th>LOGS</th>
	   </tr>
	   ";
	   $data_array = array();
	             $i=0;
	         while($row=$res->fetch_assoc())
			 {
				 $data_array[] = $row;
				 $i++;
				 echo "<tr>";
				 echo "<td>{$i}</td>";
				 echo "<td>{$row["NAME"]}</td>";
				 echo "<td>{$row["MOBILE"]}</td>";
				 echo "<td>{$row["MAIL"]}</td>";
				 echo "<td>{$row["DEP"]}</td>";
				  echo "<td>{$row["GENDER"]}</td>";
				   echo "<td>{$row["CITY"]}</td>";
				    echo "<td>{$row["LANGUAGESKNOWN"]}</td>";
				 echo "<td>{$row["LOGS"]}</td>";
				 
				 echo "</tr>";
			 }
					   echo "</table>";
			
	     
   }
   else
   {
	   echo "<p class='error'>No Records Found</p>";
   }
  
  ?>
  <?php
  $fp = fopen('studRecords.json', 'w');
 if(!fwrite($fp, json_encode($data_array)))
 {
die('Error : File Not Opened. ' . mysql_error());

 }
 else{
	 echo "Json Data Retrieved Successfully!!!";
 }
 fclose($fp);
 
 ?>
 <h2>Registered Details of our Users retrived from JSON</h2>
 <table border=1 width=400 height=150 id="emptable" > 
<tr>
<th>SNO</th>
<th>NAME</th>
<th>MOBLIE</th>
<th>MAIL</th>
<th>DEPARTMENT</th>
<th>GENDER</th>
<th>CITY</th>
<th>LANGUAGES KNOWN</th>
<th>LOGS</th>
</tr>
</table>
<script>
  $(document).ready(function()
  {
	  $.getJSON("studRecords.json", function(data){
		  var emp= '';
		  $.each(data, function(key,value){
			  emp+='<tr>';
			  emp+='<td>'+(key+1)+'</td>';
			  emp+='<td>'+value.NAME+'</td>';
			  emp+='<td>'+value.MOBILE+'</td>';
			  emp+='<td>'+value.MAIL+'</td>';
			  emp+='<td>'+value.DEP+'</td>';
			  emp+='<td>'+value.GENDER+'</td>';
			  emp+='<td>'+value.CITY+'</td>';
			  emp+='<td>'+value.LANGUAGESKNOWN+'</td>';
			    emp+='<td>'+value.LOGS+'</td>';
			  emp+='</tr>';
	  });
				  $('#emptable').append(emp);
				  
			  
		  
		  });
  });

</script>
<h3>Note:***Make Sure Your Internet Is On For Retrieving JSON data***</h3>
  
 <br><br><br> <button class="button2"><a href="logout.php">Logout</a></button>  
  

</center>





</body>
</html>



