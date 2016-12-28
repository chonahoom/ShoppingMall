
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/board_title.png" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

		<?php
						$board_ctr = new Board_controller();

						$board_no = isset($_GET['no'])?$_GET['no']:"";

						$board_ctr->board_modify_sql_controller($board_no);
						$board_ctr->board_modify_output_date($board_no);			
		?>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!--  form2 시작 -->
			
				<tr>
					<td align="right">
							<a href="javascript:Check_Value_board_modify()"><img src="images/b_save.gif" border="0"></a>&nbsp;
							<a href="javascript:history.back()"> <img src="images/b_list.gif" border="0"></a>&nbsp;
					</td>
				</tr>
				
			</table>	
