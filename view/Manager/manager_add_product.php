			<table border="0" cellpadding="0" cellspacing="0" width="747">
				<tr><td height="13"></td></tr>
				<tr>
					<td height="30" align="center">
						<!-- <img src="images/login_title.gif" width="747" height="30" border="0"> -->
					</td>
				</tr>
				<tr><td height="13"></td></tr>
			</table>
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<!-- <td><img src="images/login_title2.gif" border="0"></td> -->
				</tr>
				<tr><td height="10"></td></tr>
			</table>

			<table border="0" cellpadding="5" cellspacing="1" width="685" bgcolor="cccccc">
				<!-- form2 시작 -->
				<form name="form2" method="post" action="index.php?mode=manager_added_product">
				<input type="hidden" name="check_id" value=""> 
				<tr>
					<td align="center" bgcolor="efefef">
						<table border="0" cellpadding="0" cellspacing="5" width="100%" bgcolor="white">
							<tr>
								<td align="center">
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>상품이름</b></font>
											</td>
											<td>
												<input TYPE="text" name="product_name" maxlength = "12" value="" size="20" class="cmfont1"> 
												
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989" ><b>가격</b></font>
											</td>
											<td>
												<input TYPE="text" name="product_cost" maxlength = "10" size="20" class="cmfont1">
												<font color="898989">원</font>
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"'><b>수량</b></font>
											</td>
											<td>
												<input TYPE="text" name="product_count" maxlength = "10" size="20" class="cmfont1">
												<font color="898989">(단위)</font>
											</td>
										</tr>
										<tr><td colspan="2" height="10"></td></tr>
										<tr><td colspan="2" bgcolor="E6DDD5"></td></tr>
									
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont" >
										<tr>
											<td width="127" height="60">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>업로드 위치</b></font>
											</td>
											<td >
												<select name='product_position' size='2'>
												
												<option value='menu01'>고구마</option>
												<option value='menu02'>김치</option>
												<option value='menu03'>빵</option>
												<option value='menu04'>생선류</option>
												<option value='menu05'>스낵류</option>
												<option value='menu06'>쌀</option>
												<option value='menu07'>야채</option>
												<option value='menu08'>육류</option>
												<option value='menu09'>장난감</option>

												</select>
											
											</td>
										</tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont" >
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>종류</b></font>
											</td>
											<td>
											 	  <font color="898989">1.</font>
												<input type="text" name='product_kind1' size = "4" maxlength = "16" value = "" class="cmfont1">  
												  <font color="898989">2.</font> 
												<input type="text" name='product_kind2' size = "4" maxlength = "16" value = "" class="cmfont1">
												  <font color="898989">3.</font> 
												<input type="text" name='product_kind3' size = "4" maxlength = "16" value = "" class="cmfont1">
						
										</tr>
										<tr><td colspan="2" height="10"></td></tr>
										<tr><td colspan="2" bgcolor="E6DDD5"></td></tr>
										<tr><td colspan="2" height="10"></td></tr>
									</table>
									<table border="0" cellpadding="0" cellspacing="0" width="635" class="cmfont">
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>사이즈</b></font>
											</td>
											<td>
												<input type="text" name='product_size1' size = "4" maxlength = "4" value = "" class="cmfont1">
												<font color="898989">- </font>
												<input type="text" name='product_size2' size = "4" maxlength = "4" value = "" class="cmfont1">
												<font color="898989">- </font>
												<input type="text" name='product_size3' size = "4" maxlength = "4" value = "" class="cmfont1">
											</td>
										</tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>메인사진</b></font>
											</td>
											<td>
												<input type="file" name='main_img' size = "4" maxlength = "4" value = "" class="cmfont1" >
												<font color="898989"> ] </font>
											</td>
										</tr>
										<tr height=10px></tr>
										<tr>
											<td width="127" height="50">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>서브사진</b></font>
											</td>
											<td>
												<input type="file" name='sub_img1' size = "4" maxlength = "4" value = "" class="cmfont1" >
												<font color="898989"> ] </font><br>
												<input type="file" name='sub_img2' size = "4" maxlength = "4" value = "" class="cmfont1" >
												<font color="898989"> ] </font><br>
												<input type="file" name='sub_img3' size = "4" maxlength = "4" value = "" class="cmfont1" >
												<font color="898989"> ] </font><br>
												<input type="file" name='sub_img4' size = "4" maxlength = "4" value = "" class="cmfont1" >
												<font color="898989"> ] </font>
											</td>
										</tr>
										<tr height=10px></tr>
										<tr>
											<td width="127" height="30">
												<img align="absmiddle" src="images/i_dot.gif" border="0"> <font color="898989"><b>상품설명</b></font>
											</td>
											<td>
												<input type="text" name='product_content' size = "50" maxlength = "50" value = "" class="cmfont1">
											</td>
										</tr>
									</table>
								
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</form>
				<!-- form2 끝 -->
			</table> 
			<table border="0" cellpadding="0" cellspacing="0" width="685" class="cmfont">
				<tr>
					<td height="45" align="right">
						<a href="javascript:Check_Value_manager_add_product();"><img src="images/b_add.gif" border="0"></a>&nbsp;&nbsp;
						<a href="javascript:form2.reset();"><img src="images/b_reset.gif" border="0"></a>
					</td>
				</tr>
			</table>

	