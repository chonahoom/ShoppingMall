<?php
class Member_controller{
			public $dbc;
		/*생성자에서 DBmanager의 DBControl을 객체화시킴.*/		
		function __construct(){					
				$this->dbc = new DBControl();

		}



		/*DBControl의 sql문을 실행시키는 메서드인 useSql메서드를 호출*/
		/*member_edit.php에서 호출*/
		function member_edit_sql_controller($userid){
			$sql= "select * from member where uid='{$userid}'";					 		 
			$this->dbc->useSql($sql);

		}


		/*DB의 데이터를 출력*/
		/*member_edit.php에서 호출*/
		function member_edit_output_date($userid){

			$result="";
	

			 while($row = $this->dbc->sttFetchAssoc()){
											$name 			= $row['name'];
									 		$passwd 		= $row['passwd'];
										 	$email 			= $row['email'];
										 	$address 		= $row['address'];  
										 	$birthday 		= explode("-",$row['birthday']);
										 	$tel 			= explode("-",$row['tel']);
										 	$phone 			= explode("-",$row['phone']);
										 	$zip 			= explode("-",$row['zip']);


									 	$result.= "
									 	<form name='form2' method='post' action='index.php?mode=member_update'>
										<tr>
												<td align='center' bgcolor='efefef'>
													<table border='0' cellpadding='0' cellspacing='5' width='100%'' bgcolor='white'>
														<tr>
															<td align='center'>
									 		<table border='0' cellpadding='0' cellspacing='0' width='635' class='cmfont'>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>아이디</b></font>
											</td>
											<td>{$userid}</td>
										</tr>
										
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>새비밀번호</b></font>
											</td>
											<td>
												<input type='password' name='passwd1' maxlength='10' size='20' class='cmfont1'> &nbsp;
											</td>
										</tr>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>새비밀번호 확인</b></font>
											</td>
											<td>
												<input type='password' name='passwd2' maxlength='10' size='20' class='cmfont1'>
											</td>
										</tr>
										<tr><td colspan='2' height='10'></td></tr>
										<tr><td colspan='2' bgcolor='E6DDD5'></td></tr>
										<tr><td colspan='2' height='10'></td></tr>
									</table>
									<table border='0' cellpadding='0' cellspacing='0' width='635' class='cmfont'>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>이 름</b></font>
											</td>
											<td>
												<input type='text' name='name' maxlength='10' value='{$name}' size='20' class='cmfont1'>
											</td>
										</tr>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>생년월일</b></font>
											</td>
											<td>
												<input type='text' name='birthday1' size='4' maxlength='4' value='{$birthday[0]}' class='cmfont1'><font color='898989'>년</font> 
												<input type='text' name='birthday2' size='2' maxlength='2' value='{$birthday[1]}' class='cmfont1'><font color='898989'>월</font> 
												<input type='text' name='birthday3' size='2' maxlength='2' value='{$birthday[2]}' class='cmfont1'><font color='898989'>일</font> 
												<input type='radio' name='sm' value='0' checked><font color='898989'>양력</font> 
												<input type='radio' name='sm' value='1' ><font color='898989'>음력</font></td>
										</tr>
										<tr><td colspan='2' height='10'></td></tr>
										<tr><td colspan='2' bgcolor='E6DDD5'></td></tr>
										<tr><td colspan='2' height='10'></td></tr>
									</table>
									<table border='0' cellpadding='0' cellspacing='0' width='635' class='cmfont'>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>전화 번호</b></font>
											</td>
											<td>
												<input type='text' name='tel1' size='4' maxlength='4' value='{$tel[0]}'   class='cmfont1'><font color='898989'>-</font>
												<input type='text' name='tel2' size='4' maxlength='4' value='{$tel[1]}' class='cmfont1'><font color='898989'>-</font>
												<input type='text' name='tel3' size='4' maxlength='4' value='{$tel[2]}' class='cmfont1'>
											</td>
										</tr>
										<tr>
											<td width='140' height='30'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>핸드폰 번호</b></font>
											</td>
											<td>
												<input type='text' name='phone1' size='4' maxlength='4' value='{$phone[0]}'  class='cmfont1'><font color='898989'>-</font>
												<input type='text' name='phone2' size='4' maxlength='4' value='{$phone[1]}' class='cmfont1'><font color='898989'>-</font>
												<input type='text' name='phone3' size='4' maxlength='4' value='{$phone[2]}' class='cmfont1'>
											</td>
										</tr>
										<tr>
											<td width='140' height='50'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>주 소</b></font>
											</td>
											<td>
												<input type='text' name='zip1' size='4' maxlength='3' value='{$zip[0]}' class='cmfont1'><font color='898989'>-</font>
												<input type='text' name='zip2' size='4' maxlength='3' value='{$zip[1]}' class='cmfont1'><a href='javascript:FindZip()'><img align='absmiddle' src='images/b_zip.gif' border='0'></a><br>
												<input type='text' name='address' size='50' maxlength='200' value='{$address}' class='cmfont1'><br>
											</td>
										</tr>
										<tr>
											<td width='140' height='50'>
												<img align='absmiddle' src='images/i_dot.gif' border='0'><font color='898989'><b>E-Mail</b></font>
											</td>
											<td>
												<input type='text' name='email' size='50' maxlength='50' value='{$email}' class='cmfont1'>
											</td>
										</tr>
										<tr><td colspan='2' height='10'></td></tr>
										<tr><td colspan='2' bgcolor='E6DDD5'></td></tr>
										<tr><td colspan='2' height='10'></td></tr>
									</table>
									 	";
										
			};
			echo $result;
		}



		/*member_joined에서 호출*/
		function member_joined_sql_controller(){
			 $sql= "insert into member (uid, passwd, name, birthday, tel, phone, email, zip, address)

			 		 values('{$_POST['uid']}', 
			 		 		'{$_POST['passwd']}',
			 		 		'{$_POST['name']}', 
			 		 		'{$_POST['birthday1']}/{$_POST['birthday2']}/{$_POST['birthday3']}',
			 		 		'{$_POST['tel1']}-{$_POST['tel2']}-{$_POST['tel3']}', 
			 		 		'{$_POST['phone1']}-{$_POST['phone2']}-{$_POST['phone3']}', 
			 		 		'{$_POST['email']}',
			 		 		'{$_POST['zip1']}-{$_POST['zip2']}',
			 		 		'{$_POST['address']}'
			 		 		);";
 					 		 
			$this->dbc->useSql($sql);

		}



		/*member_update에서 호출*/
		function member_update_sql_controller(){
						$sql= "update member set 
				 		 		passwd='{$_POST['passwd1']}',
				 		 		name='{$_POST['name']}',
				 		 		birthday='{$_POST['birthday1']}-{$_POST['birthday2']}-{$_POST['birthday3']}',
				 		 		tel='{$_POST['tel1']}-{$_POST['tel2']}-{$_POST['tel3']}',
				 		 		email='{$_POST['email']}',
				 		 		zip='{$_POST['zip1']}-{$_POST['zip1']}',
				 		 		address='{$_POST['address']}',
				 		 		phone='{$_POST['phone1']}-{$_POST['phone2']}-{$_POST['phone3']}'
				 		 		where uid='{$_SESSION['SE_IDKey']}'
				 		 		";
 					 		 
			$this->dbc->useSql($sql);

		}

}
?>