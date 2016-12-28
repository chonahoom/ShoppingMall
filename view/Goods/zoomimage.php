
<html>
<head>
<title>제품 확대 이미지</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<LINK REL="STYLESHEET" HREF="include/css.css" TYPE="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="eeeeee">
							<?php
										require_once '../../model/DataBase/DBmanager.php';

										$product_no = isset($_GET['no'])?$_GET['no']:"";
										
										$dbc = new DBControl();
										 		 $sql= "select  product_name, product_position,main_img from product where product_no={$product_no}";
										 		 
										 		$dbc->useSql($sql);

										 
										 while($row = $dbc->sttFetchAssoc()){	
										 	$name = $row['product_name'];
										 	$main_img = $row['main_img'];
										 	$product_position = $row['product_position'];
										 }
							?>
<table width="540" height="520" border="0" cellpadding="0" cellspacing="0">
	<tr> 
		<td height="37" colspan="2"><img src="../../images/zoom_title.gif" width="540" height="41"></td>
	</tr>
	<tr> 
		<td width="540" height="500" align="center" valign = "top">
			<table width="100%" height="33" border="0" cellpadding="0" cellspacing="0"  align="center">
				<tr>
					<td width="100%" height="24" align="center"><font color="#333333" style="font-size:10pt"><b><?php echo $name ?></b></font></td>
				</tr>
			</table>
			<table width="500" border="1" cellpadding="0"  cellspacing="0" bordercolor="#CCCCCC" >
				<tr> 
					<td width="500" height="500" align="center" valign = "middle" bgcolor="white">
							<a href="javascript:window.close();"><img src="../../product/<?php echo $product_position.'/'.$main_img ?>" width="500" height="500" border="0"></a>
					</td>
				</tr>
			</table>
			<table width="500" height="5" cellpadding="0"  cellspacing="0" bordercolor="#CCCCCC">
				<tr height = "5"><td></td></tr>
			</table>
		</td>
	</tr>
	<tr> 
		<td height="30" colspan="2" align="center">
		<a href="javascript:window.close();"><img src="../../images/b_close.gif" border="0"></a>
		</td>
	</tr>
	<tr> 
		<td height="20" colspan="2" align="center">
	</td>
   </tr>	
</table>
</body>
</html>
