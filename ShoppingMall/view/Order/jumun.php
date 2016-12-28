
		

			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="20"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td><img src="images/jumun_title1.gif" border="0" align="absmiddle"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td colspan="5" height="3" bgcolor="#12aa53"></td></tr>
				<tr bgcolor="F2F2F2">
					<td width="80" height="30" align="center">주문번호</td>
					<td width="300"  align="center">제품명 [옵션1/옵션2]</td>
					<td width="80" align="center">수량</td>
					<td width="100" align="center">합계가격</td>
				</tr>
					<?php
										$order_ctr = new Order_controller();
										$order_ctr->jumun_sql_controller();
										$order_ctr->jumun_output_date(); 		 
					?>		

				<tr><td colspan="5" height="2" bgcolor="#12aa53"></td></tr>
			</table>
			<br>
			
