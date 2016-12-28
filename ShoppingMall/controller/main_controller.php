<?php
	class Main_Require_controller{
		function require_page($mode){
					switch ($mode) {
							case 'product':
								require_once './view/Goods/product.php';
								break;
							case 'product_detail':
								require_once './view/Goods/product_detail.php';
								break;
							case 'product_search':
								require_once './view/Goods/product_search.php';
								break;	
							case 'order':
								require_once './view/Order/order.php';
								break;
							case 'order_ok':
								require_once './view/Order/order_ok.php';
								break;
							case 'jumun':
								require_once './view/Order/jumun.php';
								break;		
							case 'jumun_info':
								require_once './view/Order/jumun_info.php';
								break;	
							case 'login_session':
								require_once './view/login/login_session.php';
								break;	
							case 'member_login':
								require_once './view/member/member_login.php';
								break;	
							case 'member_agree':
								require_once './view/member/member_agree.php';
								break;		
							case 'member_join':
								require_once './view/member/member_join.php';
								break;		
							case 'member_joinend':
								require_once './view/member/member_joinend.php';
								break;	
							case 'member_edit':
								require_once './view/member/member_edit.php';
								break;		
							case 'member_update':
								require_once './view/member/member_update.php';
								break;	
							case 'manager_page':
								require_once './view/Manager/manager_page.php';
								break;		
							case 'manager_add_product':
								require_once './view/Manager/manager_add_product.php';
								break;	
							case 'manager_added_product':
								require_once './view/Manager/manager_added_product.php';
								break;	
							case 'board':
								require_once './view/Board/board.php';
								break;
							case 'board_read':
								require_once './view/Board/board_read.php';
								break;
							case 'board_modify':
								require_once './view/Board/board_modify.php';
								break;
							case 'board_update':
								require_once './view/Board/board_update.php';
								break;
							case 'board_new':
								require_once './view/Board/board_new.php';
								break;	
							case 'board_insert':
								require_once './view/Board/board_insert.php';
								break;	
								
							default:
								require_once './view/Goods/new_goods.php';
								break;
					}
		}
	}


?>