		<?php
	
					$menu=isset($_GET['menu'])?$_GET['menu']:"";

					$goods_ctr = new Goods_controller();
					$goods_ctr->product_sql_controller($menu);
					$output_menu=$goods_ctr->product_output_menu($menu);
					$output_product_cnt=$goods_ctr->product_rowCount();	//카테고리를 누르면 ~개의 상품이라고 출력하기 위해서 

		?>
			<table border='0' cellpadding='0' cellspacing='5' width='767' class='cmfont' bgcolor='#efefef'>
				<tr>
					<td bgcolor='white' align='center'>
						<table border='0' cellpadding='0' cellspacing='0' width='751' class='cmfont'>
							<tr>
								<td align='center' valign='middle'>
									<table border='0' cellpadding='0' cellspacing='0' width='730' height='40' class='cmfont'>
										<tr>
											<td width='500' class='cmfont'>
												<font color='#C83762' class='cmfont'><b><?php echo $output_menu; ?> &nbsp;</b></font>&nbsp;
											</td>
											<td align='right' width='274'>
												<table width='100%' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
													<tr>
														<td align='right'><font color='EF3F25'><b><?php echo $output_product_cnt ?></b></font> 개의 상품.&nbsp;&nbsp;&nbsp;</td>
														
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!--여기가 카테고리별 상품 나열 -->
			<table width='767' border='0' cellspacing='0' cellpadding='0'>
				
			</table>

			<table border='0' cellpadding='0' cellspacing='0'>
				<!---1번째 줄-->
				<tr>
				<?php
					$goods_ctr->product_output_date();
					
				?>
				</tr>
			</table>
	