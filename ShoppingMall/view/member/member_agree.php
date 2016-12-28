			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<p><img src="images/login_title.gif" width="747" height="30" border="0"></p>
					</td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>

			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td><img src="images/login_title1.gif" width="85" height="15" border="0"></td>
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="685" bgcolor="cccccc">
				<tr>
					<td align="center" bgcolor="efefef">
						<table border="0" cellpadding="0" cellspacing="30" width="100%" bgcolor="white">
							<tr>
								<td align="center">
									<table border="0" cellpadding="0" cellspacing="0" width="100%" class="cmfont">
										<tr>
											<td>
												<p><textarea style="font-size:9pt; letter-spacing:-1px; line-height:18px; border-style:solid;border-width:1px;border-color:DCDCDC; color:464646; background:F6F6F6; width:605px; height:383px;padding:20px;">
													NH 농협아니고 이제는 '나훔'입니다.
													 동의하십니까?
													</textarea></p>
											</td>
										</tr>
										<tr>
											<td height="30">
												<!-- form2  시작 -->
												<form name = "form2">
												<input type="checkbox" name="agree" value="ok">
												이용약관 내용에 동의하시면 선택해 주십시오.
												</form>
												<!-- form2 끝 -->
											</td>
										</tr>
									</table>
									
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td height="45" align="right">
						<!--  이용약관 확인 자바스크립트  -->
						<script language = "javascript">
							function CheckAgree() 
							{
								if (form2.agree.checked == false) 
								{
									alert("이용약관 내용에 동의를 체크해 주십시오.");
									return;
								}
								location.href = "index.php?mode=member_join";
							}
						</script>
						<a href="javascript:CheckAgree()"><img src="images/b_agreeok.gif" border="0"></a> 
						<a href="index.php"><img src="images/b_agreeno.gif" border="0"></a>
					</td>
				</tr>
			</table>


	