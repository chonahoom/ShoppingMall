<?php
class Order_controller{
			public $dbc;
		/*생성자에서 DBmanager의 DBControl을 객체화시킴.*/		
		function __construct(){					
				$this->dbc = new DBControl();

		}



		/*DBControl의 sql문을 실행시키는 메서드인 useSql메서드를 호출*/
		/*jumun.php에서 호출*/
		function jumun_sql_controller(){
			$sql= "select * from order_product where order_uid = '{$_SESSION['SE_IDKey']}' order by order_num desc";				 		 
			$this->dbc->useSql($sql);

		}


		/*DB의 데이터를 출력*/
		/*jumun.php에서 호출*/
		function jumun_output_date(){

			$result="";
			$new_line_count = 1;

			 while($row = $this->dbc->sttFetchAssoc()){
											$order_product_no = $row['order_num'];
										 	$order_product_name = $row['order_pname'];
										 	$order_product_option1 = $row['order_option1'];
										 	$order_product_option2 = $row['order_option2'];
										 	$order_product_count = $row['order_pcount'];
										 	$order_product_finalcost = $row['order_final_cost'];

										 	$result.= "
													<tr>
														<td height='30' align='center'><font color='686868'>{$order_product_no}</font></td>
														<td align='center'>
															<a href='index.php?mode=jumun_info&no={$order_product_no}'><font color='#0066CC'>
																{$order_product_name} &nbsp;[{$order_product_option1}/{$order_product_option2}]
															</font></a>
														</td>
														<td align='center'><font color='686868'>{$order_product_count}</font></td>
														<td align='center'><font color='686868'>{$order_product_finalcost} 원</font></td>
														
													</tr>
												";
			};
			echo $result;
		}







		/*jumun_info.php에서 호출*/
		function jumun_info_sql_controller(){
			$sql= "select * from member where uid='{$_SESSION['SE_IDKey']}'"; 		 
			$this->dbc->useSql($sql);

		}


		/*jumun_info.php에서 호출*/
		function jumun_info_output_date(){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){
					$o_name = $row['name'];
				 	$o_tel = $row['tel'];
				 	$o_phone = $row['phone'];
				 	$o_email = $row['email'];

					$result.= "
							<table border='0' cellpadding='0' cellspacing='0' width='747'>
								<tr><td height='13'></td></tr>
								<tr>
									<td height='10' align='center'><img src='images/jumun_title.gif' width='746' height='30' border='></td>
								</tr>
							
							</table>
							<br>

							<table border='0' cellpadding='0' cellspacing='0' width='690'>
								<tr>
									<td><img src='images/jumun_title4.gif' border='0' align='absmiddle'></td>
								</tr>
								<tr><td height='5'></td></tr>
							</table>
							<table border='0' cellpadding='0' cellspacing='0' width='685' class='cmfont'>
								<tr><td height='2' bgcolor='8B9CBF'></td></tr>
							</table>


							<table border='0' cellpadding='0' cellspacing='1' width='685' bgcolor='#EEEEEE' class='cmfont'>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;주문자명</td>
									<td bgcolor='#FFFFFF' colspan='3'>&nbsp;<font color='#686868'>{$o_name}</font></td>
								</tr>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;전화번호</td>
									<td width='242' bgcolor='#FFFFFF'>&nbsp;<font color='#686868'>{$o_tel}</font></td>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;휴대폰</td>
									<td width='243' bgcolor='#FFFFFF'>&nbsp;<font color='#686868'>{$o_phone}</font></td>
								</tr>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;이메일</td>
									<td bgcolor='#FFFFFF' colspan='3'>&nbsp;<font color='#686868'>{$o_email}</font></td>
								</tr>
						";
			};
			echo $result;
		}

		/*jumun_info.php에서 호출*/
		function jumun_info_2_sql_controller($order_number){
			 $sql= "select post_num, post_client, post_tel, post_phone, post_zip, post_address, post_memo
					 		 		 from post_info where post_num={$order_number} and post_uid='{$_SESSION['SE_IDKey']}'";		 
			$this->dbc->useSql($sql);

		}

		/*jumun_info.php에서 호출*/
		function jumun_info_2_output_date($order_number){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){
						$post_name = $row['post_client'];
						$post_tel = $row['post_tel'];
						$post_phone = $row['post_phone'];
						$post_zip = $row['post_zip'];
						$post_address = $row['post_address'];
						$pst_memo = $row['post_memo'];

						 	$result.= "
								 	<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;수취인명</td>
									<td bgcolor='#FFFFFF' colspan='3'>&nbsp;<font color='#686868'>{$post_name}</font></td>
								</tr>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;전화번호</td>
									<td width='242' bgcolor='#FFFFFF'>&nbsp;<font color='#686868'>{$post_tel}</font></td>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;휴대폰</td>
									<td width='243' bgcolor='#FFFFFF'>&nbsp;<font color='#686868'>{$post_phone}</font></td>
								</tr>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;배달주소</td>
									<td bgcolor='#FFFFFF' colspan='3'>&nbsp;<font color='#686868'>[{$post_zip}] &nbsp; {$post_address}</font></td>
								</tr>
								<tr height='25'>
									<td width='100' bgcolor='#F2F2F2'>&nbsp;메모</td>
									<td bgcolor='#FFFFFF' colspan='3'>&nbsp;<font color='#686868'>{$pst_memo}</font></td>
								</tr>

						 	";
				 	break;
			};
			echo $result;
		}











		/*order.php에서 호출*/
		function order_sql_controller($option1,$option2,$product_no){
				 $sql= "select product_name, product_cost, FORMAT(product_cost,0) money,
								product_position,main_img, product_kind{$option1} as product_kind, 
								product_size{$option2} as product_size from product where product_no={$product_no}";		 
			$this->dbc->useSql($sql);

		}

		/*order.php에서 호출*/
		function order_output_date($option1,$option2,$product_no,$pr_cnt){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){
											$main_img_root 			= $row['product_position']."/". $row['main_img'];
										 	$product_name 			= $row['product_name'];
										 	$product_kind 			= $row['product_kind'];
										 	$product_size 			= $row['product_size']; 
										 	$product_cost 			= $row['product_cost'];
										 	$product_output_cost 	= $row['money'];
										 	
										 	
										 
										 	$sum 		  	= $pr_cnt * $product_cost;
										 	$final_sum		= $sum+3500;
										 	$result.= "<tr bgcolor='#FFFFFF'>
												<td height='60' align='center'>
													<table cellpadding='0' cellspacing='0' width='100%' border='0'>
														<tr>
															<td width='60'>
																<a href='index.php?mode=product_detail&no={$product_no}'><img src='product/{$main_img_root}' width='50' height='50' border='0'></a>
															</td>
															<td class='cmfont'>
																<a href='index.php?mode=product_detail&no={$product_no}'><font color='#0066CC'>{$product_name}</font></a><br>
																[옵션]</font> {$product_kind} / {$product_size}
															</td>
														</tr>
													</table>
												</td>
												<td align='center'><font color='#464646'>{$pr_cnt}&nbsp;개</font></td>
												<td align='center'><font color='#464646'>{$product_output_cost}</font> 원</td>
												<td align='center'><font color='#464646'>{$sum}</font> 원</td>
											</tr>
											<tr>
												<td colspan='5' bgcolor='#F0F0F0'><table width='100%' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
														<tr>
															<td align='right' bgcolor='#F0F0F0'>
																<font color='#0066CC'><b>> 총 합계금액 </b></font> : 상품대금({$sum}원) + 배송료(3,500원) = <font color='#FF3333'>
																<b>{$final_sum} 원</b></font>&nbsp;&nbsp
															</td>
														</tr>";


															/*구매한 상품의 정보를 나타내는 정보를 송신*/
										$result.= "	<form name='form2' method='post' action='index.php?mode=order_ok'>
													<input type='hidden' name='o_product_name' value='{$product_name}'>
													<input type='hidden' name='o_product_option1' value='{$product_kind}'>
													<input type='hidden' name='o_product_option2' value='{$product_size}'>
													<input type='hidden' name='o_product_count' value='{$pr_cnt}'>
													<input type='hidden' name='o_product_cost' value='{$product_cost}'>
													<input type='hidden' name='o_product_finalcost' value='{$final_sum}'>
													
												";
			};
			echo $result;
		}



		/*order.php에서 호출*/
		function order_2_sql_controller(){
				  $sql= "select name,tel,phone,email,zip,address from member where uid='{$_SESSION['SE_IDKey']}'";	

			$this->dbc->useSql($sql);

		}

		/*order.php에서 호출*/
		function order_2_output_date(){
			$result="";
			 while($row = $this->dbc->sttFetchAssoc()){
											$name 			= $row['name'];
										 	$email 			= $row['email'];
										 	$address 		= $row['address'];  
										
										 	$tel 			= explode("-",$row['tel']);
										 	$phone 			= explode("-",$row['phone']);
										 	$zip 			= explode("-",$row['zip']);


										 	$result.= "
			<table width='710' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
				<tr>
					<td align='left' valign='top' width='150' STYLE='padding-left:45;padding-top:5'>
						<font size='2' color='#B90319'><b>주문자 정보</b></font>
					</td>
					<td align='center' width='560'>

						<table width='560' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
							<tr height='25'>
								<td width='150'><b>주문자 성명</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									
									<input type='text'   name='o_name' size='20' maxlength='10' value='{$name}' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>전화번호</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='o_tel1' size='4' maxlength='4' value='{$tel[0]}' class='cmfont1'> -
									<input type='text' name='o_tel2' size='4' maxlength='4' value='{$tel[1]}' class='cmfont1'> -
									<input type='text' name='o_tel3' size='4' maxlength='4' value='{$tel[2]}' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>휴대폰번호</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='o_phone1' size='4' maxlength='4' value='{$phone[0]}' class='cmfont1'> -
									<input type='text' name='o_phone2' size='4' maxlength='4' value='{$phone[1]}' class='cmfont1'> -
									<input type='text' name='o_phone3' size='4' maxlength='4' value='{$phone[2]}' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>E-Mail</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='o_email' size='50' maxlength='50' value='{$email}' class='cmfont1'>
								</td>
							</tr>
							<tr height='50'>
								<td width='150'><b>주소</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='o_zip1' size='3' maxlength='3' value='{$zip[0]}' class='cmfont1' > -
									<input type='text' name='o_zip2' size='3' maxlength='3' value='{$zip[1]}' class='cmfont1' >
									<a href='javascript:FindZip(1)'><img src='images/b_zip.gif' align='absmiddle' border='0'></a> <br>
									<input type='text' name='o_address' size='50' maxlength='200' value='{$address}' class='cmfont1' ><br>
								</td>
							</tr>
						</table>

					</td>
				</tr>
				<tr height='10'><td></td></tr>
			</table>

			<!-- 배송지 정보 -->
			<table width='710' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
				<tr height='3' bgcolor='#CCCCCC'><td></td></tr>
				<tr height='10'><td></td></tr>
			</table>

			<table width='710' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
				<tr>
					<td align='left' valign='top' width='150' STYLE='padding-left:45;padding-top:5'><font size=2 color='#B90319'><b>배송지 정보</b></font></td>
					<td align='center' width='560'>

						<table width='560' border='0' cellpadding='0' cellspacing='0' class='cmfont'>
							<tr height='25'>
								<td width='150'><b>주문자정보와 동일</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='radio' name='same' onclick='SameCopy_order(1)'>예 &nbsp;
									<input type='radio' name='same' onclick='SameCopy_order(0)'>아니오
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>받으실 분 성명</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='r_name' size='20' maxlength='10' value='' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>전화번호</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='r_tel1' size='4' maxlength='4' value='' class='cmfont1'> -
									<input type='text' name='r_tel2' size='4' maxlength='4' value='' class='cmfont1'> -
									<input type='text' name='r_tel3' size='4' maxlength='4' value='' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>휴대폰번호</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='r_phone1' size='4' maxlength='4' value='' class='cmfont1'> -
									<input type='text' name='r_phone2' size='4' maxlength='4' value='' class='cmfont1'> -
									<input type='text' name='r_phone3' size='4' maxlength='4' value='' class='cmfont1'>
								</td>
							</tr>
							<tr height='25'>
								<td width='150'><b>E-Mail</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='r_email' size='50' maxlength='50' value='' class='cmfont1'>
								</td>
							</tr>
							<tr height='50'>
								<td width='150'><b>주소</b></td>
								<td width='20'><b>:</b></td>
								<td width='390'>
									<input type='text' name='r_zip1' size='3' maxlength='3' value='' class='cmfont1' > -
									<input type='text' name='r_zip2' size='3' maxlength='3' value='' class='cmfont1' >
									<a href='javascript:FindZip(2)'><img src='images/b_zip.gif' align='absmiddle' border='0'></a> <br>
									<input type='text' name='r_address' size='50' maxlength='200' value='' class='cmfont1' ><br>
								</td>";
										 	

										 	
			};
			echo $result;
		}











		function order_ok_sql_controller(){
				   $sql= "insert into post_info (post_uid, post_client, post_tel, post_phone, post_email, post_zip, post_address, post_memo)

				 		 values('{$_SESSION['SE_IDKey']}', 
				 		 		'{$_POST['r_name']}',
				 		 		'{$_POST['r_tel1']}-{$_POST['r_tel2']}-{$_POST['r_tel3']}',
				 		 		'{$_POST['r_phone1']}-{$_POST['r_phone2']}-{$_POST['r_phone3']}', 
				 		 		'{$_POST['r_email']}',
				 		 		'{$_POST['r_zip1']}-{$_POST['r_zip2']}',
				 		 		'{$_POST['r_address']}',
				 		 		'{$_POST['r_memo']}'
				 		 		);";

			$this->dbc->useSql($sql);

					$sql= "insert into order_product (order_uid, order_pname, order_option1, order_option2, order_pcount, order_pcost, order_final_cost)

				 		 values('{$_SESSION['SE_IDKey']}', 
				 		 		'{$_POST['o_product_name']}',
				 		 		'{$_POST['o_product_option1']}',
				 		 		'{$_POST['o_product_option2']}',
				 		 		'{$_POST['o_product_count']}', 
				 		 		'{$_POST['o_product_cost']}',
				 		 		'{$_POST['o_product_finalcost']}'
				 		 		);";				
			$this->dbc->useSql($sql);
		}


}
?>