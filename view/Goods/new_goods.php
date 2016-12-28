<!-- 화면 우측(신상품) 시작 -->	
			
			
			<table width='767'>
				<tr>
					<td height='60'>
						<img src='images/main_newproduct.jpg' width='767' height='40'>
					</td>
				</tr>
			</table>

			<table border='0' cellpadding='0' cellspacing='0'>
				<!---1번째 줄-->
				<tr>
				<?php
				

					$goods_ctr = new Goods_controller();
					$goods_ctr->new_goods_sql_controller();
					$goods_ctr->new_goods_output_date();
				
				?>
					
				</tr>
				<tr><td height='10'></td></tr>
			</table>

			<!-- 화면 우측(신상품) 끝 -->	