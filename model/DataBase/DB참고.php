
<?php
 // 데이터베이스연결
 require_once 'DBmanager.php';

 // 데이터베이스선택
 // 트라이
 try{
 	
 	$dbo = connect();

 		if ( isset( $_GET['mode'] ) && $_GET['mode'] == "insert") // 데이터입력모드
 		{
 		
		

 		$sum = $_POST['sub1'] + $_POST['sub2'] + $_POST['sub3'] + 
 			   $_POST['sub4'] + $_POST['sub5']; // 합계계산

 		$avg = $sum / 5; // 평균계산

 		 $sql= "insert into stud_score (name, sub1, sub2, sub3, sub4, sub5, sum, avg)

 		 values('{$_POST['name']}', 
 		 		{$_POST['sub1']},
 		 		{$_POST['sub2']}, 
 		 		{$_POST['sub3']},
 		 		{$_POST['sub4']}, 
 		 		{$_POST['sub5']}, 
 		 		{$sum}, {$avg});";
 		

 		$stt = $dbo -> prepare($sql);/*,				
				  array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));*/
		

		$result = $stt->execute();

		if($result){
							echo " 성공";
						}else{
							echo "실패";
						}
 		}	


 
 }catch(PDOException $e){
 	exit("x");
 }

 ?>

 <meta charset = "utf8" />
 <h3>1) 성적입력하기</h3>

 <form action="score_listNH.php?mode=insert" method='post'>
 <table width="850" border="1" cellpadding="5">
 <tr><td> 이름: <input type="text" size="6" name="name">&nbsp;
 과목1 : <input type="text" size="3" name="sub1">&nbsp;
 과목2 : <input type="text" size="3" name="sub2">&nbsp;
 과목3 : <input type="text" size="3" name="sub3">&nbsp;
 과목4 : <input type="text" size="3" name="sub4">&nbsp;
 과목5 : <input type="text" size="3" name="sub5">
 </td>
 <td align="center">
 <input type="submit" value="입력하기">
 </td>
 </tr>
 </table>
 </form>

 <p>
 <h3>2) 성적출력하기</h3>
<p><a href ="score_listNH.php?mode=big_first">[성적순정렬]</a>
 <a href ="score_listNH.php?mode=small_first">[성적역순정렬]</a></p>
 <p>
 <!--제목표시시작-->
 <table width="720" border="1" cellpadding="5">
 <tr align="center" bgcolor="#eeeeee">
 <td>번호</td>
 <td>이름</td>
 <td>과목1</td>
 <td>과목2</td>
 <td>과목3</td>
 <td>과목4</td>
 <td>과목5</td>
 <td>합계</td>
 <td>평균</td>
 <td>&nbsp;</td>
 </tr>

 <!--제목표시끝-->

 <?php
 // select 명령저장
 // 성적순정렬(내림차순)



 if( isset($_GET['mode']) && $_GET['mode'] == "big_first")
 $sql = "select * from stud_score order by sum desc;";
 
 // 성적순정렬(오름차순)
 else if ( isset( $_GET['mode'] ) && $_GET['mode'] == "small_first") 
 $sql = "select * from stud_score order by sum;";
 
 else
 $sql = "select * from stud_score;";
 
 $stt = $dbo -> prepare($sql);

 $result = $stt->execute();


 $count = 1; // 성적출력하기의번호

 // 데이터베이스데이터출력시작
 while ($row=$stt->fetch(PDO::FETCH_ASSOC)/*$row = mysql_fetch_array($result)*/)
 {
 $avg = round($row['avg'], 1);

 $num = $row['num'];

 echo (
 		"<tr align='center'>
 		<td> $row[num] </td>
 		<td> $count </td>
 		<td> $row[name] </td>
 		<td> $row[sub1] </td>
 		<td> $row[sub2] </td>
 		<td> $row[sub3] </td>
 		<td> $row[sub4] </td>
 		<td> $row[sub5] </td>
 		<td> $row[sum] </td>
 		<td> $avg </td>
 		<td> <a href='score_delete.php?num=$num'>[삭제]</a></td>
 		</tr>"
 	);


 $count++;
 }
 // 데이터베이스데이터출력완료

 $dbo = NULL; // 데이터베이스와의접속종료

 ?>

 </table>