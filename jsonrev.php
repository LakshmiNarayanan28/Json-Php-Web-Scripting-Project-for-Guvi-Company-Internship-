<?php
include "database.php";

 ?>

 <?php
$sql="SELECT * FROM student";
   $res=$db->query($sql);
  
	    $data_array = array();
	            
	         while($row=$res->fetch_assoc())
			 {
				$data_array[] = $row;
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
 

 