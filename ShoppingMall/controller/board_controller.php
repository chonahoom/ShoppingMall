<?php
	
	class Board_controller{
			public $dbc;
		/*생성자에서 DBmanager의 DBControl을 객체화시킴.*/		
		function __construct(){					
				$this->dbc = new DBControl();

		}



		/*DBControl의 sql문을 실행시키는 메서드인 useSql메서드를 호출*/
		/*board.php에서 호출*/
		function board_sql_controller(){
			$sql= "select *	from free_board order by board_no desc";
								 		 
			$this->dbc->useSql($sql);

		}


		/*DB의 데이터를 출력*/
		/*board.php에서 호출*/
		function board_output_date(){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){
									$board_no		=	$row['board_no'];
									$board_title	=	$row['board_title'];
									$board_writer	=	$row['board_writer'];
									$board_date		=	$row['board_date'];
									$result .= "
										<tr height='25' bgcolor='#FFFFFF'>	
											<td width='90' align='center'><font color='#686868'>{$board_no}</font></td>	
											<td><a href='index.php?mode=board_read&no={$board_no}'><font color='#4186C7'>{$board_title}</font></a></td>	
											<td width='90' align='center'><font color='#686868'>{$board_writer}</font></td>	
											<td width='90' align='center'><font color='#686868'>{$board_date}</font></td>	
										</tr>
										<tr><td height='1' bgcolor='#DEDCDD'colspan='5'></td></tr>
										";
			};
			echo $result;
		}







		/*board_insert.php에서 호출*/
		function board_insert_sql_controller($date,$board_title,$board_content,$board_file,$session_id){
							
							 	if(!$board_file=="./uploadfile/"){								//첨부파일이 존재하지 않을 때
							 		 $sql= "insert into free_board (board_title, board_content, board_writer, board_date)

							 		 values('{$board_title}', 
							 		 		'{$board_content}',
							 		 		'{$session_id}', 
							 		 		'{$date}'
							 		 		);";
							 	}else{											//첨부파일이 존재할 때
							 		 $sql= "insert into free_board (board_title, board_file, board_content, board_writer, board_date)

							 		 values('{$board_title}', 
							 		 		'{$board_file}', 
							 		 		'{$board_content}',
							 		 		'{$session_id}', 
							 		 		'{$date}'
							 		 		);";
							 	}
			 
			$this->dbc->useSql($sql);

		}







		/*board_modify에서 호출*/
		function board_modify_sql_controller($board_no){
			$sql= "select *	from free_board where board_no = {$board_no} order by board_no desc";				 		 
			$this->dbc->useSql($sql);

		}


		/*board_modify에서 호출*/
		function board_modify_output_date($board_no){
			$result="";
			  while($row = $this->dbc->sttFetchAssoc()){
							$modify			= 	"modify";
							$board_title	=	$row['board_title'];
							$board_writer	=	$row['board_writer'];
							$board_date		=	$row['board_date'];
							$board_content	=	$row['board_content'];
							$board_file 	= 	$row['board_file'];

							$result .= "<form name = 'form2' method = 'post' action = 'index.php?mode=board_update&mode1={$modify}&no={$board_no}'>
										<table border='0' cellpadding='0' cellspacing='0' width='690'>
											<tr><td colspan='5' height='3' bgcolor='8B9CBF'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>제목</td>
												<td width='586' class='cmfont'>
												<input type='text' name='board_title' maxlength='50' size='85' class='cmfont1' value='{$board_title}'
												</td>
											</tr>
											<tr><td colspan='2' height='2'></td></tr>
										
											<tr><td colspan='2' height='2'></td></tr>
											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>작성자</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;<a href='http://blog.naver.com/chonahoom'>{$board_writer}</a></td>
											</tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>날짜</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;{$board_date}</td>
											</tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>내용</td>
												<td width='586' class='cmfont'>
													<p style='padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;'>
													<textarea name='board_content' rows='20' cols='85' class='cmfont1' align='left'>{$board_content}
													</textarea></p>
												</td>
											</tr>
											<tr><td colspan='2' height='2'></td></tr>
										</table>
										</form>
				
										<table border='0' cellpadding='0' cellspacing='0' width='690'>
											<tr><td height='3' bgcolor='8B9CBF'></td></tr>
											<tr><td height='5' bgcolor='white'></td></tr>
										</table>
							";
				}
			echo $result;
		}






		/*board_read에서 호출*/
		function board_read_sql_controller($board_no){
			$sql= "select *	from free_board where board_no = {$board_no} order by board_no desc";				 		 
			$this->dbc->useSql($sql);

		}

		/*board_read에서 호출*/
		function board_read_output_date($userid){
			$result="";
			$board_writer="";
			  while($row = $this->dbc->sttFetchAssoc()){
							$board_file		=	isset($row['board_file'])?$row['board_file']:"";
							$board_no 		=	$row['board_no'];
							$board_title	=	$row['board_title'];
							$board_writer	=	$row['board_writer'];
							$board_date		=	$row['board_date'];
							$board_content	=	$row['board_content'];
							$download_file 	=	$board_file;
							
							$result .= "
										<table border='0' cellpadding='0' cellspacing='0' width='690' align='center'>
											<tr><td colspan='5' height='3' bgcolor='8B9CBF'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>
											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>제목</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;{$board_title}</td>
											</tr>

											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>

											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>작성자</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;<a href='http://blog.naver.com/chonahoom'>{$board_writer}</a></td>
											</tr>

											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>

											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>날짜</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;{$board_date}</td>
											</tr>

											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>
	

											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>첨부파일</td>
												<td width='586' class='cmfont'>&nbsp;&nbsp;
													<form name='form2' method='post' action='./view/Board/board_download.php?no={$board_no}'>
														<input type='hidden' name='filepath' value='{$board_file}'>
														<input type='hidden' name='board_no' value='{$board_no}'>
														{$board_file} ]
														<input type='submit' value='다운로드'>

													</form>	
												</td>
											</tr>

											<tr><td colspan='2' height='2'></td></tr>
											<tr><td colspan='2' height='2'></td></tr>


											<tr>
												<td width='104' height='25' align='center' bgcolor='ECEFF4' class='cmfont'>내용</td>
												<td width='586' class='cmfont'>
													<p style='padding-left:5px;padding-top:5px;padding-right:5px;padding-bottom:5px;'>{$board_content}</p>
												</td>
											</tr>
											<tr><td colspan='2' height='2'></td></tr>
										</table>

										<table border='0' cellpadding='0' cellspacing='0' width='690' align='center'>
											<tr><td height='3' bgcolor='8B9CBF'></td></tr>
											<tr><td height='5' bgcolor='white'></td></tr>
										</table>
							";
				}
			echo $result;
			echo "
						<table border='0' cellpadding='0' cellspacing='0' width='690' align='center'>
							<!--  form3 시작 -->
							<form name = 'form3' method = 'post' action='board.html'>
							<tr>
								
						";

					if($board_writer==$userid){
							echo"				<td align='right'>
												<a href='javascript:Check_Modify_board_read({$board_no});'><img src='images/b_modify.gif' border='0'></a>&nbsp;
												<a href='javascript:Check_Delete_board_read({$board_no});'><img src='images/b_delete.gif' border='0'></a>&nbsp;
												<a href='javascript:history.back()'> <img src='images/b_list.gif' border='0'></a>&nbsp;
								";
					}else{
							echo"				<td align='right'>
												<a href='javascript:history.back()'> <img src='images/b_list.gif' border='0'></a>&nbsp;
										</td>
									
								";
					}
		}









		/*board_update에서 호출*/
		function board_update_modify_sql_controller($board_title,$board_content,$board_no){
							$sql= "update free_board set board_title='{$board_title}',board_content='{$board_content}' where board_no={$board_no}";
									
				$this->dbc->useSql($sql);



		}

		/*board_update에서 호출*/
		function board_update_delete_sql_controller($board_no){
										$sql= "delete from free_board where board_no = {$board_no};";			 
				$this->dbc->useSql($sql);



		}













	}


?>