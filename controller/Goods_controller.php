<?php
class Goods_controller{
			public $dbc;
		/*생성자에서 DBmanager의 DBControl을 객체화시킴.*/		
		function __construct(){					
				$this->dbc = new DBControl();

		}



		/*DBControl의 sql문을 실행시키는 메서드인 useSql메서드를 호출*/
		/*new_goods.php에서 호출*/
		function new_goods_sql_controller(){
			$sql= "select product_no, product_name, FORMAT(product_cost,0) money, product_count,
					 		 				product_position, main_img from product order by product_no desc";						 		 
			$this->dbc->useSql($sql);

		}


		/*DB의 데이터를 출력*/
		/*new_goods.php에서 호출*/
		function new_goods_output_date(){

			$result="";
			$new_line_count = 1;

			 while($row = $this->dbc->sttFetchAssoc()){
					if($new_line_count%5 == 1){
						$result .= "<tr>";
					}

					$no = $row['product_no'];
					$mode = 'product_detail';

					$result .= "<td width='150' height='205' align='center' valign='top'>
						<table class='cmfont'>
							<tr> 
								<td> 
									<a href='index.php?mode={$mode}&no={$no}'><img src='product/{$row['product_position']}/{$row['main_img']}' width='120' height='140' border='0'></a>
								</td>
							</tr>
							<tr><td height='5'></td></tr>
							<tr> 
								<td height='20' align='center'>
									<a href='index.php?mode={$mode}&no={$no}'>
									{$row['product_name']}</a>&nbsp; 
								</td>
							</tr>
							<tr>
								<td align='center'>
									<img src='images/i_hit.gif' align='absmiddle' vspace='1'>
									<img src='images/i_new.gif' align='absmiddle' vspace='1'> 
								</td
							</tr>
							<tr><td height='20' align='center'><b>{$row['money']} 원</b></td></tr>
						</table>

					</td>";

					if($new_line_count%5==0){
						$result .= "</tr>";
					}

					$new_line_count+=1;
			};
			echo $result;
		}



		/*product에서 호출*/
		function product_sql_controller($menu){
			$sql= "select product_no, product_name, FORMAT(product_cost,0) money, product_count,
					 		 				product_position, main_img from product where product_position='{$menu}' order by product_no desc";					 		 
			$this->dbc->useSql($sql);
		}

		/*product에서 호출*/
		function product_rowCount(){
			return $this->dbc->stt->rowCount();
		}

		/*product에서 호출*/
		function product_output_date(){

			$result="";
			$new_line_count = 1;

			 while($row = $this->dbc->sttFetchAssoc()){
					if($new_line_count%5 == 1){
						$result .= '<tr>';
					}

					$no = $row['product_no'];
					$mode = 'product_detail';



					$result .= "<td width='150' height='205' align='center' valign='top'>
						<table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
							<tr> 
								<td align='center'> 
									<a href='index.php?mode={$mode}&no={$no}'><img src='product/{$row['product_position']}/{$row['main_img']}' width='120' height='140' border='0'></a>
								</td>
							</tr>
							<tr><td height='5'></td></tr>
							<tr> 
								<td height='20' align='center'>
									<a href='index.php?mode={$mode}&no={$no}'>
									<font color='444444'>{$row['product_name']}</font></a>&nbsp; 
								</td>
							</tr>
							<tr>
								<td align='center'>
									<img src='images/i_hit.gif' align='absmiddle' vspace='1'>
									<img src='images/i_hot.gif' align='absmiddle' vspace='1'> 
								</td
							</tr>
							<tr><td height='20' align='center'><b>{$row['money']} 원</b></td></tr>
						</table>

					</td>";

					if($new_line_count%5==0){
						$result .='</tr>';
					}

					$new_line_count+=1;
			};
			echo $result;
		}

		/*product에서 호출*/
		function product_output_menu($menu){
				switch ($menu){
						case 'menu01';
							$output_menu = '고구마 카테고리';
							break;
						case 'menu02';
							$output_menu = '김치 카테고리';
							break;
						case 'menu03';
							$output_menu = '빵 카테고리';
							break;
						case 'menu04';
							$output_menu = '생선류 카테고리';
							break;
						case 'menu05';
							$output_menu = '스낵류 카테고리';
							break;
						case 'menu06';
							$output_menu = '쌀 카테고리';
							break;
						case 'menu07';
							$output_menu = '야채 카테고리';
							break;
						case 'menu08';
							$output_menu = '육류 카테고리';
							break;
						case 'menu09';
							$output_menu = '장난감 카테고리';
							break;								
					}

			return $output_menu;
		}









		/*product_detail에서 호출*/
		function product_detail_sql_controller($product_no){
			 $sql= "select product_no, product_name, FORMAT(product_cost,0) money, product_count, product_position,
										 		 				main_img,sub_img1, sub_img2, sub_img3, sub_img4,
										 		 				product_kind1, product_kind2, product_kind3,
										 		 				product_size1, product_size2, product_size3,
										 		 				product_content from product where product_no={$product_no} order by product_no desc";
			$this->dbc->useSql($sql);

		}
		/*product_detail에서 호출*/
		function product_detail_output_date($product_no){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){	
					/* form2 시작 */
										 		
													$result.="<form name='form2' method='post' action='index.php?mode=order&no={$product_no}'>
														<input type='hidden' name='no' value='0000'>
														<input type='hidden' name='kind' value='insert'>

														<table class='product_detail_table1'>
															<tr>
																<td width='335' align='center' valign='top'>
																	<!-- 상품이미지 -->
																	<table  width='315' height='260' bgcolor='D4D0C8'>
																		<tr>
																			<td align='center'>
																				<img src='./product/{$row['product_position']}/{$row['main_img']}' class='product_detail_mainimg' onclick='Zoomimage_product_detail({$row['product_no']})'>
																			</td>
																		</tr>
																	</table>
																</td>
															<td width='410'>
															<!-- 상품명 -->
															<table cellpadding='0' cellspacing='0' width='370' class='cmfont'>
																			 	<tr><td colspan='3' bgcolor='E8E7EA'></td></tr>
																<tr>
																	<td width='80' height='45' class='product_detail_padding'>
																		<img src='images/i_dot1.gif' width='3' height='3' align='absmiddle'>
																		<font color='666666'><b>제품명</b></font>
																	</td>
																	<td width='1' bgcolor='E8E7EA'></td>
																	<td class='product_detail_padding'>
																		<font color='282828'>{$row['product_name']}</font><br>
																		<img src='images/i_hit.gif' align='absmiddle' vspace='1'> <img src='images/i_new.gif' align='absmiddle' vspace='1'> 
																	</td>
																</tr>
																<tr><td colspan='3'></td></tr>
																<!-- 시중가 -->
																<tr>
																	<td width='80' height='35' class='product_detail_padding' align='center'>
																		<img src='images/i_dot1.gif' width='3' height='3' border='0' align='absmiddle'>
																		<font color='666666'><b>소비자가</b></font>
																	</td>
																	<td width='1' bgcolor='E8E7EA'></td>
																	<td width='289' class='product_detail_padding'><font color='666666'>{$row['money']}</font></td>
																</tr>
																<tr><td colspan='3' bgcolor='E8E7EA'></td></tr>
																<!-- 판매가 -->
																<tr>
																	<td width='80' height='35' class='product_detail_padding'>
																		<img src='images/i_dot1.gif' width='3' height='3' border='0' align='absmiddle'>
																		<font color='666666'><b>판매가</b></font>
																	</td>
																	<td width='1' bgcolor='E8E7EA'></td>
																	<td class='product_detail_padding'><font color='0288DD'><b>{$row['money']}</b></font></td>
																</tr>
																<tr><td colspan='3' bgcolor='E8E7EA'></td></tr>
																<!-- 옵션 -->
																<tr>
																	<td width='80' height='35' class='product_detail_padding'>
																		<img src='images/i_dot1.gif' width='3' height='3' border='0' align='absmiddle'>
																		<font color='666666'><b>옵션선택</b></font>
																	</td>
																	<td width='1' bgcolor='E8E7EA'></td>
																	<td class='product_detail_padding'>
																		<select name='opts1' class='cmfont1'>
																			<option value='x'>선택하세요</option>
																			<option value='1'>{$row['product_kind1']}</option>
																			<option value='2'>{$row['product_kind2']}</option>
																			<option value='3'>{$row['product_kind3']}</option>
																		</select> &nbsp;
																		<select name='opts2' class='cmfont1'>
																			<option value='x'>선택하세요</option>
																			<option value='1'>{$row['product_size1']}</option>
																			<option value='2'>{$row['product_size2']}</option>
																			<option value='3'>{$row['product_size3']}</option>
																		</select>
																	</td>
																</tr>
																<tr><td colspan='3' bgcolor='E8E7EA'></td></tr>
																<!-- 수량 -->
																<tr>
																	<td width='80' height='35' class='product_detail_padding'>
																		<img src='images/i_dot1.gif' width='3' height='3' border='0' align='absmiddle'>
																		<font color='666666'><b>수량</b></font>
																	</td>
																	<td width='1' bgcolor='E8E7EA'></td>
																	<td class='product_detail_padding'>
																		<input type='text' name='count' value='1' size='3' maxlength='5' class='cmfont1'> <font color='666666'>개</font>
																	</td>
																</tr>
																<tr><td colspan='3' bgcolor='E8E7EA'></td></tr>
															</table>
															<table width='370' class='cmfont'>
																<tr>
																	<td height='70' align='center' class='cmfont1'>
														";

														if(isset($_SESSION['SE_IDKey'])){
															$result.="
																			<a href='javascript:check_form2_product_detail()'><img src='images/b_order.gif' border='0' align='absmiddle'></a>
																			&nbsp;&nbsp;&nbsp;
															
															";
														}else{
															$result.= "로그인을 해주세요";
														}

														$result.="				
																	</td>
																</tr>
															</table>


															<table width='370' class='cmfont'>
																<tr>
																	<td height='30' align='center'>
																		<img src='images/product_text1.gif' border='0' align='absmiddle'>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>
												</form>
												<!-- form2 끝  -->



												<table class='product_detail_table1'>
													<tr><td height='22'></td></tr>
												</table>

												<!-- 상세설명 -->
												<table class='product_detail_table1'>
													<tr><td height='13'></td></tr>
												</table>
												<table class='product_detail_table1'>
													<tr>
														<td height='30' align='center'>
															<img src='images/product_title.gif' width='746' height='30' border='0'>
														</td>
													</tr>
												</table>
												<table class='product_detail_table1' >
													<tr><td height='13'></td></tr>
													<tr>
														<td height='200' valign=top >
															
															<br>
															<br>
															<center>
															<img src='product/{$row['product_position']}/{$row['main_img']}' width='300px' height='350px'><br><br><br>
															<img src='product/{$row['product_position']}/{$row['sub_img1']}' width='300px' height='350px'>&nbsp
															<img src='product/{$row['product_position']}/{$row['sub_img2']}' width='300px' height='350px'><br><br>
															<img src='product/{$row['product_position']}/{$row['sub_img3']}' width='300px' height='350px'>&nbsp
															<img src='product/{$row['product_position']}/{$row['sub_img4']}' width='300px' height='350px'><br><br>
															</center>
														</td>
													</tr>
												</table>

												
												<table class='cmfont'>
													<tr><td height='10'></td></tr>
												</table>
												<table width='746'>
													<tr>
														<td align='center' class='cmfont'>{$row['product_content']}</td>
													</tr>
												</table>
												<table class='product_detail_table1'>
													<tr><td height='10'></td></tr>
												</table>";
				}
			echo $result;
		}











		/*product_search에서 호출*/
		function product_search_sql_controller($findtext){
			$sql="select product_no, product_name, FORMAT(product_cost,0) money, product_count,
					 		 				product_position, main_img from product where product_name like '%{$findtext}%' order by product_no desc"; 
			$this->dbc->useSql($sql);

		}

		/*product_search에서 호출*/
		function product_search_output_date(){
			$result="";
			$new_line_count = 1;
			 while($row = $this->dbc->sttFetchAssoc()){	
					if($new_line_count%5 == 1){
						$result.="<tr>";
					}

					$no = $row['product_no'];

					$result.="<td width='150' height='205' align='center' valign='top'>
						<table border='0' cellpadding='0' cellspacing='0' width='100' class='cmfont'>
							<tr> 
								<td align='center'> 
									<a href='index.php?mode=product_detail&no={$no}'><img src='product/{$row['product_position']}/{$row['main_img']}' width='120' height='140' border='0'></a>
								</td>
							</tr>
							<tr><td height='5'></td></tr>
							<tr> 
								<td height='20' align='center'>
									<a href='index.php?mode=product_detail&no={$no}'>

									<font color='444444'>{$row['product_name']}</font></a>&nbsp; 
									<img src='images/i_hit.gif' align='absmiddle' vspace='1'>
									<img src='images/i_new.gif' align='absmiddle' vspace='1'> 
								</td>
							</tr>
							<tr><td height='20' align='center'><b>{$row['money']} 원</b></td></tr>
						</table>

					</td>";

					if($new_line_count%5==0){
						$result.="</tr>";
					}

						$new_line_count+=1;
					
				}
			echo $result;
		}







}
?>