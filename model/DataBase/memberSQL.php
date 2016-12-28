
<?php
 require_once 'DBmanager.php';

 try{
 	$dbo = connect();

 	function member_input(){
 		if ( isset( $_GET['mode'] ) && $_GET['mode'] == "insert") // 데이터입력모드
 		{
 		
		

 		$sum = $_POST['sub1'] + $_POST['sub2'] + $_POST['sub3'] + 
 			   $_POST['sub4'] + $_POST['sub5']; // 합계계산

 		$avg = $sum / 5; // 평균계산

 		 $sql= "insert into member (uid, passwd, name, birthday, tel, phone, email, zip, address)

 		 values('{$_POST['uid']}', 
 		 		{$_POST['passwd']},
 		 		{$_POST['name']}, 
 		 		{$_POST['birthday']},
 		 		{$_POST['tel1']}, 
 		 		{$_POST['phone']}, 
 		 		{$_POST['email']},
 		 		{$_POST['zip']},
 		 		{$_POST['address']}
 		 		)";
 		

 		$stt = $dbo -> prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL)));				
				  
		$result = $stt->execute();

		if($result){
							echo " 성공";
						}else{
							echo "실패";
						}
 		}	

	}
 
 }catch(PDOException $e){
 	exit("x");
 }

 ?>
