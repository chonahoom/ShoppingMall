	<?php
				$mode = isset($_POST['mode'])?$_POST['mode']:$_GET['mode'];
				require_once "../../model/DataBase/DBmanager.php";
				  if($mode =="checked_login"){
				  	ID_PASSWD_checked();
				  	Manager_checked();
				  }else if($mode =="checked_logout"){
				  	Logout_checked();
				  }
								  function ID_PASSWD_checked(){
								  			$dbc = new DBControl();
					
												  	global $id_session,$pw_session;

													$userID = isset($_POST['uid'])?$_POST['uid']:"";	
													$userPW = isset($_POST['pwd'])?$_POST['pwd']:"";
																				
																
													$sql = "select * from member where uid='{$userID}' and passwd='{$userPW}';";

												$dbc->useSql($sql);


													$same_uid_check_for_login = $dbc->stt->rowCount();

													if($same_uid_check_for_login){
														Session_create($userID,$userPW);
													}else{
														echo "<script>alert('아이디 또는 비밀번호가 일치하지 않습니다.');</script>";
														Header("Location: ../../index.php?mode=member_login");															
													}
											
								}
								
								function Manager_checked(){
									 
									 $dbc = new DBControl();
									
												  	global $id_session,$pw_session;

													$userID = isset($_POST['uid'])?$_POST['uid']:"";																
																
													$sql = "select manager from member 
															where uid='{$userID}'  
															and manager='1';";
												$dbc->useSql($sql);

													$same_uid_check_for_login = $dbc->stt->rowCount();

													if($same_uid_check_for_login){
														Session_manager();
													}
											
								}

								function Session_manager(){
									$_SESSION['SE_IDKey'] = 'manager';
								}

								function Session_create($arg_id_session,$arg_pw_session){
									
												session_start();

												$_SESSION['SE_IDKey'] = $arg_id_session;
												$_SESSION['SE_PWKey'] = $arg_pw_session;			
												
										Header("Location: ../../index.php?mode=on");		
								}

							function Logout_checked(){
								session_start();
								unset($_SESSION['SE_IDKey']);
								unset($_SESSION['SE_PWKey']);
								
								Header("Location: ../../index.php?mode=off");
							}	
				
				?>