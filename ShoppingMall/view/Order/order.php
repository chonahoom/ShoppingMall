			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center"><img src="images/jumun_title.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="710">
				
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="710" class="cmfont" bgcolor="#CCCCCC">
				<tr bgcolor="F0F0F0" height="23" class="cmfont">
					<td width="440" align="center">상품</td>
					<td width="70"  align="center">수량</td>
					<td width="100" align="center">가격</td>
					<td width="100" align="center">합계</td>
				</tr>
				
				<?php
					$option1 	= isset($_POST['opts1'])?$_POST['opts1']:"";
					$option2 	= isset($_POST['opts2'])?$_POST['opts2']:"";
					$pr_cnt 	= isset($_POST['count'])?$_POST['count']:"";
					$product_no = isset($_GET['no'])?$_GET['no']:"";
				
					$order_ctr = new Order_controller();
					$order_ctr->order_sql_controller($option1,$option2,$product_no);
					$order_ctr->order_output_date($option1,$option2,$product_no,$pr_cnt);

				?> 

						</table>
					</td>
				</tr>
			</table>




			<br><br>

			<!-- 주문자 정보 -->
			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
			</table>
							<?php
									$order_ctr->order_2_sql_controller();	
									$order_ctr->order_2_output_date();
							?>
							</tr>
							<tr height="50">
								<td width="150"><b>배송시요구사항</b></td>
								<td width="20"><b>:</b></td>
								<td width="390">
									<textarea name="r_memo" cols="60" rows="3" class="cmfont1"></textarea>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height="10"><td></td></tr>
			</table>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr height="3" bgcolor="#CCCCCC"><td></td></tr>
				<tr height="10"><td></td></tr>
			</table>

			</form>

			<table width="710" border="0" cellpadding="0" cellspacing="0" class="cmfont">
				<tr>
					<td align="center">
						<img src="images/b_order3.gif" onclick="Check_Value_order()" style="cursor:hand">

					

					</td>
				</tr>
				<tr height="20"><td></td></tr>
			</table>


