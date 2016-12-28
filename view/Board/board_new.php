
			<!-- 게시글 등록 -->
		
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/board_title.png" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr><td colspan="5" height="3" bgcolor="8B9CBF"></td></tr>

				<!--  form2 시작 -->
				<form name="form2" method="post" action="index.php?mode=board_insert" enctype="multipart/form-data"> 
					<?php
						date_default_timezone_set("Asia/Seoul");
						$date = date("Y-m-d");
						echo "<input type='hidden' name='date' value='{$date}'>";
					?>
				<tr><td colspan="2" height="2"></td></tr>
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">제목</td>
					<td width="586">
						&nbsp;<input type="text" name="board_title" maxlength="50" size="85" class="cmfont1">
					</td>
				</tr>

				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>

				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">파일첨부</td>
					<td width="586">
						&nbsp;<input type="file" name="board_file" maxlength="50" size="85" class="cmfont1">]
					</td>
				</tr>

				<tr><td colspan="2" height="2"></td></tr>
				<tr><td colspan="2" height="2"></td></tr>
				
				<tr>
					<td width="104" height="25" align="center" bgcolor="ECEFF4" class="cmfont">내용</td>
					<td width="586">
						&nbsp;<textarea name="board_content" rows="20" cols="85" class="cmfont1"></textarea>
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
							<a href="javascript:Check_Value_board_new()"><img src="images/b_save.gif" border="0"></a>&nbsp;
							<a href="javascript:history.back()"><img src="images/b_list.gif" border="0"></a>
					</td>
					<td width="50"></td>
				</tr>
			</table>



