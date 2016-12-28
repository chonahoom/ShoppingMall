			<?php
				$mode = isset($_GET['mode'])?$_GET['mode']:"";

				  if($mode =="login_error"){
				  	echo "<script>alert('ID또는 PASSWARD가 잘못되었습니다.');</script>";
				  }
			?>
			
				
			
			
			<!-- 화면 우측(로그인) S -->	
			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<!-- MEMBER 그림 -->
						<img src="images/login_title.gif" width="747" height="30" border="0">
					</td>
				</tr>
				<tr><td height="47"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="720">
				<tr>
					<td width="747" align="center" valign="top">
						<table border="0" cellpadding="0" cellspacing="8" width="523" bgcolor="#12aa53">
							<tr>
								<td height="210" align="center" bgcolor="white">
									<table border="0" height="120" cellpadding="0" cellspacing="0" width="440">
										<tr>
											<td width="120" align="center">
												<img src="images/login_image1.gif" width="110" height="90" border="0"><!-- 자물쇠그림 -->
											</td>
											<td width="320">
												<table border="0" cellpadding="0" cellspacing="0" width="320">
													<tr>
														<td height="35">
															<p style="padding-left:10px;"><img src="images/login_image2.gif" width="220" height="21" border="0"></p>
														</td>
													</tr>
												</table>
												<table border="0" cellpadding="0" cellspacing="0" width="320">

													<!-- form2 시작 -->
													<!-- member_check로 post방식으로 전달 -->
													<form name = "form2" method = "post" action='./view/login/login_session.php'> 
													<tr>
														<td width="220" height="25">
															<p style="padding-left:10px;">
															<img align="absmiddle" src="images/login_id.gif" width="40" height="13" border="0"> 
															<input type="text" name="uid" size="20" maxlength="12" class="cmfont1">	<!-- ID적는 text칸 -->
															</p>
														</td>
														<td width="100">
														
														<a href="javascript:Login_Check()" onfocus="this.blur()"><img align="absmiddle" src="images/b_login.gif" width="50" height="39" border="0"></a>
														<input type="hidden" name='mode' value="checked_login">
														</td>
													</tr>
													<tr>
														<td width="220" height="25">
															<p style="padding-left:10px;">
															<img align="absmiddle" src="images/login_pw.gif" width="40" height="13" border="0"> 
															<input type="password" name="pwd" size="20" maxlength="12" class="cmfont1"><!-- Pass적는 text칸 -->
															</p>
														</td>
													</tr>
													</form>
													<!--form2 끝 -->
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
		</td>
	</tr>
</table>

