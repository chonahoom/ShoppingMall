
			<table width='767' border='0' cellspacing='0' cellpadding='0'>
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
					$findtext=isset($_POST['findtext'])?$_POST['findtext']:"";
					$goods_ctr->product_search_sql_controller($findtext);	
					$goods_ctr->product_search_output_date();
				?>
					
				</tr>
				<tr><td height='10'></td></tr>
			</table>

			
