			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30"><img src="images/product_title3.gif" width="746" height="30" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			
						<!-- DB에서 해당상품 뽑아오기 -->
								<?php
										
										$product_no = isset($_GET['no'])?$_GET['no']:"";
										
										$goods_ctr = new Goods_controller();
										$goods_ctr->product_detail_sql_controller($product_no);
					 					$goods_ctr->product_detail_output_date($product_no);
								?>
							