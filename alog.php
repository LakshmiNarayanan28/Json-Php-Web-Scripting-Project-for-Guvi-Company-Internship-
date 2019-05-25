<?php
			if(isset($_POST["submit"]))
			{
				 $sql="SELECT * FROM admin where ANAME='{$_POST["aname"]}' and APASS='{$_POST["apass"]}'";
				  $res=$db->query($sql);
				  if($res->num_rows>0)
				  {
					  $row=$res->fetch_assoc();
					  $_SESSION["AID"]=$row["AID"];
					  $_SESSION["ANAME"]=$row["ANAME"];
					  header("location:view.php");
				  }
				  else
				  {
					  echo "<center><h2>Invalid user details</h2></center>";
				  }
			}
			?>