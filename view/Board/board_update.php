
			<!-- 업데이트-->
				<?php

						$board_ctr = new Board_controller();
							$board_no = isset($_GET['no'])?$_GET['no']:"";
							$mode =  isset($_GET['mode1'])?$_GET['mode1']:"delete";

							if($mode=="modify"){
								$board_title = isset($_POST['board_title'])?$_POST['board_title']:"";
								$board_content = isset($_POST['board_content'])?$_POST['board_content']:"";
								$board_ctr->board_update_modify_sql_controller($board_title,$board_content,$board_no);
							}else{
								$board_ctr->board_update_delete_sql_controller($board_no);
								
							}
							
									
										 	
			?>

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<img src="images/login_title.gif" width="747" height="30" border="0">
					</td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td><img src="images/login_title2.gif" border="0"></td>
				</tr>
				<tr><td height="15"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="685" bgcolor="cccccc">
				<tr>
					<td align="center" bgcolor="efefef">
						<table border="0" cellpadding="0" cellspacing="5" width="100%" bgcolor="white">
							<tr>
								<td align="center">
									<table border="0" cellpadding="0" cellspacing="0" width="635">
										<tr>
											<td height="30">
												<font size="3" color="898989"><b>Update 완료</b></font>
											</td>
										</tr>
										<tr><td colspan="2" height="10"></td></tr>
										<tr><td colspan="2" bgcolor="E6DDD5"></td></tr>
										<tr><td colspan="2" height="10"></td></tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td height="30">
												<font color="898989"><br><br><br>
												수정또는 삭제를 완료하였습니다.
												</font><br><br><br>
												
											</td>
										</tr>
									</table>
									<table border='0' align=right>
										<tr>
											<td>
												<a href="index.php?mode=board"><img src="images/shopping_start.png" width='60px' height='60px'></a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>	

