<?php
require_once("database.php"); 
  
				$sql = "select * from email_lists  ";
				$res = mysql_query($sql);
				if($res)
				{
					if(mysql_num_rows($res) > 0)
					{
						while($row = mysql_fetch_assoc($res))
						{		
						
							if(emailAlreadyExists($email,"log","email") == false )
							{
								$sql = "insert into log (email) values ('".$email."')";
								echo $sql;
								$r = mysql_query($sql);
							}
							
					}
				 
				}
			
?>
