

			

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/board_title.png" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			

			<table border="0" cellpadding="0" cellspacing="0" width="690" class="cmfont">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>
				<tr bgcolor="F2F2F2" >
					<td width="90" height="25" align="center">번호</td>
					<td align="center">제목</td>
					<td width="90" align="center">작성자</td>
					<td width="120" align="center">작성일</td>
					
				</tr>

				<tr><td height="1" bgcolor="#DEDCDD"colspan="5"></td></tr>

				<?php
							$board_ctr = new Board_controller();
							$board_ctr->board_sql_controller();
							$board_ctr->board_output_date();	
				?>


				<tr><td colspan="5" height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<!-- form2 시작 -->
				<form name="form2" method="post" action="board.html">
				<input type="hidden" name="page" value="1">
				<tr>
					<td align="right">
					<?php
						if(isset($_SESSION['SE_IDKey'])?$_SESSION['SE_IDKey']:"")
							echo "<a href='index.php?mode=board_new'><img src='images/b_new.gif' border='0'></a>&nbsp;";
					?>
					</td>
				</tr>
				</form>
				<!-- form2 끝 -->
			</table>

	
