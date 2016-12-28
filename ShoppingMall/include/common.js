
/*category메뉴이미지에 마우스  on/out 이벤트 발생시 호출*/
function img_change(mode){
				/*mode:함수 호출 시 on || off를 넘김*/
	var reg = /(menu.+)_(on|off)/;
	var find = event.srcElement.src.match(reg)[0];
	var name = event.srcElement.src.match(reg)[1];


	event.srcElement.src = event.srcElement.src.replace(find,name+'_'+mode);
}



/*header에서 search버튼 누르면 호출*/
function Search(){
	if (!form1.findtext.value) {
		alert("검색할 단어를 입력해주세요");
		return;
	}
	form1.submit();
}




/*로그인페이지에서 로그인버튼 누르면 호출*/
function Login_Check(){
				if (!form2.uid.value) {
					alert("아이디를 입력해 주십시오.");
					form2.uid.focus();
					return;
				}
				if (!form2.pwd.value) {
					alert("비밀번호를 입력해 주십시오.");
					form2.pwd.focus();
					return;
				}
				form2.submit();
				
}



/*자유게시판 게시글 수정페이지에서 저장버튼 누르면 호출*/
function Check_Value_board_modify(){
				if (!form2.board_title.value) {
						alert('글제목을 입력하여 주십시요');
						form1.board_title.focus();
						return;
				}
			  if (!form2.board_content.value) {
						alert('내용을 입력하여 주십시요');
						form2.board_content.focus();
						return;
				}
			 
				form2.submit();
				
}


/*자유게시판에 글 작성할 떄 호출*/
function Check_Value_board_new() {
				if (!form2.board_title.value) {
						alert('글제목을 입력하여 주십시요');
						form1.board_title.focus();
						return;
				}
			  if (!form2.board_content.value) {
						alert('내용을 입력하여 주십시요');
						form2.board_content.focus();
						return;
				}
			 
				form2.submit();
				
}

/*board_read에서 수정버튼 눌렀을 때 호출*/
function Check_Modify_board_read(arg_int)	{
			/*arg_ind:해당 게시글번호 (primary)*/
					var a = arg_int;
					
							form2.action="index.php?mode=board_modify&no="+a;
							form2.submit();
				
					return;
}



/*board_read에서 삭제버튼 눌렀을 때 호출*/
function Check_Delete_board_read(arg_int)	{
			/*arg_ind:해당 게시글번호 (primary)*/
				var a = arg_int;
							alert("삭제를 진행합니다.");
							form3.action="index.php?mode=board_update&no="+a;
							form3.submit();
					
					
					return;
}


/*product_detail에서 메인사진 눌렀을때 호출*/
function Zoomimage_product_detail(no){
			/*no:product고유 넘버값(primary)*/
	window.open("./view/Goods/zoomimage.php?no="+no, "", "menubar=no, scrollbars=yes, width=560, height=640, top=30, left=50");
}



/*product_detail에서 구매하기 눌렀을때 호출*/
function check_form2_product_detail(){
				
	if (form2.opts1.value=='x') {
		alert("옵션1을 선택하십시요.");
		form2.opts1.focus();
		return;
	}
	if (form2.opts2.value=='x') {
		alert("옵션2를 선택하십시요.");
		form2.opts2.focus();
		return;
	}
	if (!form2.count.value) {
		alert("수량을 입력하십시요.");
		form2.count.focus();
		return;
	}
					
	form2.submit();
}


/*manager_add_product에서 상품등록 눌렀을 때 호출*/
function Check_Value_manager_add_product() {

					if (!form2.product_name.value) {
						alert("상품명이 잘못되었습니다.");		form2.product_name.focus();	return;
					}
					if (!form2.product_cost.value) {
						alert("상품가격이 잘못되었습니다.");	form2.product_cost.focus();	return;
					}
					if (!form2.product_count.value) {
						alert("상품수량이 잘못되었습니다.");	form2.product_count.focus();	return;
					}
					if (!form2.product_position.value) {
						alert("업로드위치가 잘못되었습니다.");	form2.product_position.focus();	return;
					}
					if (!form2.product_kind1.value || !form2.product_kind2.value ||!form2.product_kind3.value) {
						alert("종류는 3가지를 적어야 합니다.");	form2.product_kind1.focus();	return;
					}
					if (!form2.product_size1.value || !form2.product_size2.value ||!form2.product_size3.value ) {
						alert("사이즈는 3가지를 적어야 합니다.");	form2.product_size1.focus();	return;
					}
					if (!form2.main_img.value) {
						alert("메인사진이 잘못되었습니다.");	form2.main_img.focus();	return;
					}
					if (!form2.sub_img1.value || !form2.sub_img2.value ||!form2.sub_img3.value || !form2.sub_img4.value) {
						alert("서브사진은 4개를 선택해야합니다.");	form2.sub_img1.focus();	return;
					}
					if (!form2.product_content.value) {
						alert("상품설명이 잘못되었습니다.");	form2.product_content.focus();	return;
					}

					form2.submit(); /*form action 실행*/
}




/*member_edit에서 입력정보 등록했을때 호출*/
function Check_Value_member_edit() {
					if(!form2.passwd1.value || !form2.passwd2.value){
						alert("암호가 잘못되었습니다.");	
						form2.passwd1.focus();	return;
					}
					if (form2.passwd1.value != form2.passwd2.value) {
						alert("암호가 일치하지 않습니다.");	
						form2.passwd1.focus();	return;
					}
					if (!form2.name.value) {
						alert("이름이 잘못되었습니다.");	form2.name.focus();	return;
					}
					if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
						alert("생일이 잘못되었습니다.");	form2.birthday1.focus();	return;
					}
					if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
						alert("전화번호가 잘못되었습니다.");	form2.tel1.focus();	return;
					}
					if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
						alert("핸드폰 번호가 잘못되었습니다.");	form2.phone1.focus();	return;
					}
					if (!form2.zip1.value || !form2.zip2.value) {
						alert("우편번호가 잘못되었습니다.");	form2.zip1.focus();	return;
					}
					if (!form2.address.value) {
						alert("주소가 잘못되었습니다.");	form2.address.focus();	return;
					}
					if (!form2.email.value) {
						alert("이메일이 잘못되었습니다.");	form2.email.focus();	return;
					}

					form2.submit();
}



/*member_join에서 아이디 확인 눌렀을때 호출*/
function check_id_member_join()	{
					if (!form2.uid.value) {
						alert("ID를 입력하십시요.");	form2.uid.focus();	return;
					}
					window.open("./view/member/member_idcheck.php?uid="+form2.uid.value,"","scrollbars=no,width=300,height=200");
}
				



/*member_join에서 회원가입버튼을 눌렀을때 호출*/
function Check_Value_member_join() {
					if (!form2.check_id.value) {
						alert("중복ID 조사를 먼저 하십시요.");	form2.uid.focus();	return;
					}
					if (!form2.uid.value) {
						alert("아이디가 잘못되었습니다.");	form2.uid.focus();	return;
					}
					if (!form2.passwd.value) {
						alert("암호가 잘못되었습니다.");	form2.passwd.focus();	return;
					}
					if (!form2.passwd1.value) {
						alert("암호가 잘못되었습니다.");	form2.passwd1.focus();	return;
					}
					if (form2.passwd.value != form2.passwd1.value) {
						alert("암호가 일치하지 않습니다.");	
						form2.passwd1.focus();	return;
					}
					if (!form2.name.value) {
						alert("이름이 잘못되었습니다.");	form2.name.focus();	return;
					}
					if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
						alert("생일이 잘못되었습니다.");	form2.birthday1.focus();	return;
					}
					if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
						alert("전화번호가 잘못되었습니다.");	form2.tel1.focus();	return;
					}
					if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
						alert("핸드폰이 잘못되었습니다.");	form2.phone1.focus();	return;
					}
					if (!form2.zip1.value || !form2.zip2.value) {
						alert("우편번호가 잘못되었습니다.");	form2.zip1.focus();	return;
					}
					if (!form2.address.value) {
						alert("주소가 잘못되었습니다.");	form2.address.focus();	return;
					}
					if (!form2.email.value) {
						alert("이메일이 잘못되었습니다.");	form2.email.focus();	return;
					}

					form2.submit(); /*form action 실행*/
}




/*order페이지에서 주문하기 버튼을 눌렀을 때 호출*/
function Check_Value_order() {
				if (!form2.o_name.value) {
					alert("주문자 이름이 잘 못 되었습니다.");	form2.o_name.focus();	return;
				}
				if (!form2.o_tel1.value || !form2.o_tel2.value || !form2.o_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.o_tel1.focus();	return;
				}
				if (!form2.o_phone1.value || !form2.o_phone2.value || !form2.o_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.o_phone1.focus();	return;
				}
				if (!form2.o_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.o_email.focus();	return;
				}
				if (!form2.o_zip1.value || !form2.o_zip2.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.o_zip1.focus();	return;
				}
				if (!form2.o_address.value) {
					alert("주소가 잘 못 되었습니다.");	form2.o_email.focus();	return;
				}

				if (!form2.r_name.value) {
					alert("받으실 분의 이름이 잘 못 되었습니다.");	form2.r_name.focus();	return;
				}
				if (!form2.r_tel1.value || !form2.r_tel2.value || !form2.r_tel3.value) {
					alert("전화번호가 잘 못 되었습니다.");	form2.r_tel1.focus();	return;
				}
				if (!form2.r_phone1.value || !form2.r_phone2.value || !form2.r_phone3.value) {
					alert("핸드폰이 잘 못 되었습니다.");	form2.r_phone1.focus();	return;
				}
				if (!form2.r_email.value) {
					alert("이메일이 잘 못 되었습니다.");	form2.r_email.focus();	return;
				}
				if (!form2.r_zip1.value || !form2.r_zip2.value) {
					alert("우편번호가 잘 못 되었습니다.");	form2.r_zip1.focus();	return;
				}
				if (!form2.r_address.value) {
					alert("주소가 잘 못 되었습니다.");	form2.r_email.focus();	return;
				}
				
				form2.submit();
}

		
/*order페이지에서 주문자정보와 동일 radio 버튼에서 예를 눌렀을때 호출*/
function SameCopy_order(arg_int) {
				if (arg_int == 1) {
					form2.r_name.value = form2.o_name.value;
					form2.r_zip1.value = form2.o_zip1.value;
					form2.r_zip2.value = form2.o_zip2.value;
					form2.r_address.value = form2.o_address.value;
					form2.r_tel1.value = form2.o_tel1.value;
					form2.r_tel2.value = form2.o_tel2.value;
					form2.r_tel3.value = form2.o_tel3.value;
					form2.r_phone1.value = form2.o_phone1.value;
					form2.r_phone2.value = form2.o_phone2.value;
					form2.r_phone3.value = form2.o_phone3.value;
					form2.r_email.value = form2.o_email.value;
				}
				else {
					form2.r_name.value = "";
					form2.r_zip1.value = "";
					form2.r_zip2.value = "";
					form2.r_address.value = "";
					form2.r_tel1.value = "";
					form2.r_tel2.value = "";
					form2.r_tel3.value = "";
					form2.r_phone1.value = "";
					form2.r_phone2.value = "";
					form2.r_phone3.value = "";
					form2.r_email.value = "";
				}
}