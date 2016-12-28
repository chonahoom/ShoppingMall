
					<table border="0" cellpadding="0" cellspacing="0" width="747">
						<tr><td height="13"></td></tr>
						<tr>
							<td height="30"><img src="images/board_title.png" width="746" height="30" border="0"></td>
						</tr>
						<tr><td height="13"></td></tr>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" width="690">
						<?php
								 
							//$_FILES['html에서 넘겨준 id값']['name'];
						    $file_name =$_FILES['board_file']['name'];
						    //$_FILES['html에서 넘겨준 id값']['tmp_name'];
						    $tmp_file   = $_FILES['board_file']['tmp_name'];
						    
						    $file_path = './uploadfile/'.$file_name;
						    //이렇게 하면 위에 경로로 파일이 업로드 된다.
						    move_uploaded_file($tmp_file,$file_path);
						    
							$board_ctr 		= new Board_controller();
							$date 			= isset($_POST['date'])?$_POST['date']:"";
							$board_title 	= isset($_POST['board_title'])?$_POST['board_title']:"";
							$board_content 	= isset($_POST['board_content'])?$_POST['board_content']:"";
							$sessionID		= isset($_SESSION['SE_IDKey'])?$_SESSION['SE_IDKey']:"";
							$board_file		= $file_path;
							
							$board_ctr->board_insert_sql_controller($date,$board_title,$board_content,$board_file,$sessionID);
							
					?>
						<tr><td height="10"></td></tr>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" width="690">
						<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>

						<!--  form2 시작 -->
						<form name="form2" method="post" action="board_insert.php">

						<tr><td colspan="2" height="2"></td></tr>
						<tr>
							<td width="150" height="25" align="center" bgcolor="ECEFF4" class="cmfont">제목</td>
							<td width="586">
								&nbsp;<?php echo $board_title; ?>
							</td>
							<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">작성일</td>
							<td width="586">
								&nbsp;<?php echo $date; ?>
							</td>
						</tr>
						<tr><td colspan="2" height="2"></td></tr>
						<tr>
							<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">첨부파일</td>
							<td width="586">
								&nbsp;<?php echo $board_file; ?>
							</td>
						</tr>
						
						<tr><td colspan="2" height="2"></td></tr>
						
						<tr>
							<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">내용</td>
							<td width="586">
								&nbsp;<?php echo $board_content; ?>
							</td>
						</tr>
						<tr><td colspan="2" height="2"></td></tr>
						</form>
						<!--  form2 끝 -->
					</table>

					<table border="0" cellpadding="0" cellspacing="0" width="690">
						<tr><td height="3" bgcolor="8B9CBF"></td></tr>
						<tr><td height="5" bgcolor="white"></td></tr>
					</table>

					<table border="0" cellpadding="0" cellspacing="0" width="690">
						<tr>
							<td align="right">
								
									<a href="index.php?mode=board"><img src="images/b_list.gif" border="0"></a>
							</td>
							<td width="50"></td>
						</tr>
					</table>
		
				
