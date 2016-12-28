<table width="959" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr> 
		<td>
			<!--  상단 왼쪽 나훔 로고 -->
			<table border="0" cellspacing="0" cellpadding="0" width="182">
				<tr>
					<td><a href="index.php">
							<img src="./images/top_logo.png" width="160" height="50" border="0">
						</a></td>
				</tr>
			</table>
		</td>
		<td align="right" valign="bottom">


			<!--  상단메뉴 시작 (main_topmemnu.php) : 미접속시: Home/로그인/회원가입 접속시: Home/정보수정/로그아웃/주문조회  -->	
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<?php
					
						require_once "./view/Login/check_session.php"; 
						if($login_checked_ID=='manager'){	//관리자 접속시
							echo	"<td><a href='index.php?mode=manager_page'><img src='images/top_menu01_1.png' border='0' width='70px'></a></td>
							<td><img src='images/top_menu_line.gif' width='11'></td>";
						}
						if(!$login_checked_ID){		//미접속시
						echo	'<td><a href="index.php"><img src="images/top_menu01.gif" border="0"></a></td>
							<td><img src="images/top_menu_line.gif" width="11"></td>
							<td><a href="index.php?mode=member_login"><img src="images/top_menu02.gif" border="0"></a></td>
							<td><img src="images/top_menu_line.gif" width="11"></td>
							<td><a href="index.php?mode=member_agree"><img src="images/top_menu03.gif" border="0"></a></td>
							';
						}else{						//접속시
								echo	'<td><a href="index.php"><img src="images/top_menu01.gif" border="0"></a></td>
							<td><img src="images/top_menu_line.gif" width="11"></td>

							<td><a href="./view/login/login_session.php?mode=checked_logout"><img src="images/top_menu02_1.gif" border="0"></a></td>
							<td><img src="images/top_menu_line.gif" width="11"></td>

							<td><a href="index.php?mode=member_edit"><img src="images/top_menu03_1.gif" border="0"></a></td>
							<td><img src="images/top_menu_line.gif" width="11"></td>

							<td><a href="index.php?mode=jumun"><img src="images/top_menu06.gif" border="0"></a></td>';
						}
					?>
				</tr>
			</table>
			<!--  상단메뉴 끝 (main_topmemnu.php -->	
		</td>
	</tr>
</table>


<table width="959" border="0" bgcolor='black' cellspacing="0" cellpadding="0" align="center">
	<tr>
	  <td><img src="images/main_image1.png" width="100%" height="175"></td>
	</tr>
</table>

<!-- 상품 검색 시작 (main_top.php) -->

<table width="959" height="25" border="0"  cellspacing="0" cellpadding="0" align="center">

	<tr bgcolor="#F0F0F0">
		<td width="181" align="center"><font color="#666666">
		
		<?php
				
			if($login_checked_ID){
				echo  "&nbsp; ようこそ！ &nbsp;&nbsp; <br><b>{$login_checked_ID} </b>様♥</font>";
			}else{
				echo "로그인이 필요합니다!";
			}
		?>


		</td>
		<td style="font-size:9pt;color:#666666;font-family:돋움;padding-left:5px;"></td>
		<td align="right" style="font-size:9pt;color:#666666;font-family:돋움;"><b>상품검색 ▶&nbsp;</b></td>


		<!-- form1 시작 -->
		<form name="form1" method="post" action="index.php?mode=product_search">
		<td width="135">
			&nbsp;
			<input type="text" name="findtext" maxlength="40" size="20" class="cmfont1">&nbsp;
		</td>
		</form>
		<!-- form1 끝 -->


		<td width="60">
			<a href="javascript:Search()"><img src="images/i_search1.gif" border="0"></a></td>
		</tr>
	<tr><td height="1" colspan="5" bgcolor="#E5E5E5"></td></tr>


 </table>
<!-- 상품 검색 끝 (main_top.php) -->

