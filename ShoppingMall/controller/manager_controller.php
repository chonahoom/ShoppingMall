<?php
	class Manager_controller{
			public $dbc;
		/*생성자에서 DBmanager의 DBControl을 객체화시킴.*/		
		function __construct(){					
				$this->dbc = new DBControl();

		}

	/*DBControl의 sql문을 실행시키는 메서드인 useSql메서드를 호출*/
		/*new_goods.php에서 호출*/
		function manager_sql_controller(){
			$sql= "insert into product (product_name, product_cost, product_count, product_position, product_kind1, product_kind2, product_kind3,
 		  product_size1, product_size2, product_size3, main_img, sub_img1, sub_img2, sub_img3, sub_img4, product_content)

 		 values('{$_POST['product_name']}', 
 		 		'{$_POST['product_cost']}',
 		 		'{$_POST['product_count']}',
 		 		'{$_POST['product_position']}', 
 		 		'{$_POST['product_kind1']}', 
 		 		'{$_POST['product_kind2']}', 
 		 		'{$_POST['product_kind3']}', 
 		 		'{$_POST['product_size1']}', 
 		 		'{$_POST['product_size2']}', 
 		 		'{$_POST['product_size3']}', 
 		 		'{$_POST['main_img']}', 
 		 		'{$_POST['sub_img1']}', 
 		 		'{$_POST['sub_img2']}', 
 		 		'{$_POST['sub_img3']}', 
 		 		'{$_POST['sub_img4']}', 
 		 		'{$_POST['product_content']}' 		 		
 		 		);";				 		 
			$this->dbc->useSql($sql);

		}


	



	}
?>