<?php
	
	session_start();

	$login_checked_ID = isset($_SESSION['SE_IDKey'])?$_SESSION['SE_IDKey']:"0";

					$dbc = new DBControl();
						 $sql= "select name	from member where uid='{$login_checked_ID}'";

					$dbc->useSql($sql);
		
					
					 		
					 		
				 while($row = $dbc->sttFetchAssoc()){			
				 
					 	$login_checked_ID=$row['name'];
					 	return $login_checked_ID;
				 }
	
	
?>