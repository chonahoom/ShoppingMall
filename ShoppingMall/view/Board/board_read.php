
			<!-- 게시글 읽기 -->

			<table border="0" cellpadding="0" cellspacing="0" width="747" align='center'>
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/board_title.png" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

	<?php

							$board_ctr = new Board_controller();

							$board_no 	= isset($_GET['no'])?$_GET['no']:"";
							$userid 	= isset($_SESSION['SE_IDKey'])?$_SESSION['SE_IDKey']:"";
							
							$board_ctr->board_read_sql_controller($board_no);
							$board_ctr->board_read_output_date($userid);

					
					echo "</tr>
									</form>
									<!--  form2 끝 -->
								</table>";
	?>

