				<?php
					$order_ctr = new Order_controller();
					$order_ctr->jumun_info_sql_controller();
					$order_ctr->jumun_info_output_date(); 		
				?>


				<tr><td height="1" bgcolor="8B9CBF" colspan="4"></td></tr>

			<?php
					$order_number = isset($_GET['no'])?$_GET['no']:"";
					$order_ctr->jumun_info_2_sql_controller($order_number);
					$order_ctr->jumun_info_2_output_date($order_number); 
			?>
				
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr><td height="2" bgcolor="8B9CBF"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="690">
				<tr>
					<td height="40" class="cmfont" align="right">
						<img src="images/b_list.gif" border="0" OnClick="location.href='index.php?mode=jumun'" style="cursor:hand">&nbsp;&nbsp;&nbsp;
					</td>
				</tr>
			</table>
