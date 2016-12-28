<html>
<head>
<title>중복ID 조회</title>
<meta  charset="utf-8">
<script language = "javascript">
	function Close_me(check)
	{
		opener.form2.check_id.value = check;
		self.close();
	}
</script>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="300" cellspacing="0" cellpadding="0">
	<tr>
		<td  height="30" bgcolor="$12aa53"><font color="white" size="3"><b>&nbsp;중복 ID 조사</b></font></td>
	</tr>
	<tr><td  height="40"></td></tr>
<?php
require_once "../../model/DataBase/DBmanager.php";
$dbc = new DBControl();

 		 $sql= "select uid from member where uid='{$_GET['uid']}';";

 		$dbc->useSql($sql);
		

		$same_uid_check = $dbc->stt->rowCount();

		

		if(!$same_uid_check){ ?>
							<!-- 중복 아이디가 없는 경우 -->
							<tr>
								<td height="50" valign="middle" align="center">
									<font color="#666666"><b>
															<?php 
																$Get_ID = $_GET['uid'];
																echo "{$Get_ID}는 사용가능한 아이디 입니다.";
															?>
														  </b></font>  
								</td>
							</tr>
							<tr>
								<td height="50" align="center">
									<a href="javascript:Close_me('yes')"><img src="../../images/b_ok1.gif" border="0"></a>
								</td>
							</tr>

						<?php }else if($same_uid_check){	?>
						<!-- 중복 아이디가 있는 경우-->

						<tr>
							<td height="50" valign="middle" align="center">
								<font color="#666666"><b><?php 
															$Get_ID = $_GET['uid'];
															echo "{$Get_ID}는 이미 사용중인 아이디 입니다.";
														?></b></font>  
							</td>
						</tr>
						<tr>
							<td height="50" align="center">
								<a href="javascript:Close_me('')"><img src="../images/b_ok1.gif" border="0"></a>
							</td>
						</tr>

				<?php } ?>




</table>
	 
</body>
</html>