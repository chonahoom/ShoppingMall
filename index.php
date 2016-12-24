<html>
<head>
<TITLE>Main</TITLE>
<META charset='utf-8'>
<script language="Javascript" src="./include/common.js"></script>
<link type="text/css" rel="stylesheet" href="./include/font.css">
</head>

<body>

	<!-- 좌측 로고 및 상단 메뉴 -->
		<div>
				<?php   require_once "./model/DataBase/DBmanager.php"; 
						require_once "./controller/board_controller.php";
						require_once "./controller/Goods_controller.php";
						require_once "./controller/manager_controller.php";
						require_once "./controller/member_controller.php";
						require_once "./controller/order_controller.php";
						require_once "./view/Main/header.php"; ?>

		</div>	

<table width="960" border="0"  cellspacing="0" cellpadding="0" align="center">
	<tr><td height="10" colspan="2"></td></tr>
	<tr>
		<td height="100%" valign="top">
			<!--  화면 좌측메뉴 시작 (main_left.php) -->
			<table width="181" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td valign="top"> 
						<!--  Category -->
						<?php require_once './view/Main/category.php' ?> 
					</td>
				</tr>
				<tr>
					<td height="10"></td>
				</tr>
				<tr> 
					<td> 
						<!--  자유게시판 -->	
						<?php require_once './view/Main/free_board.php' ?> 	
					</td>
				</tr>
			</table>
			<!-- 좌측 메뉴 끝-->
		</td>
		<td width="10"></td>
			<!-- 상품 진열 -->
		<td valign="top">
				<?php
				 	require_once './controller/main_controller.php';
					$mode = isset($_GET['mode'])?$_GET['mode']:"";
					$new_page = new Main_Require_controller();
					$new_page->require_page($mode);
				 ?> 	
		</td>
	</tr>
</table>
				<?php require_once './view/Main/footer.php' ?> 
</body>
</html>
