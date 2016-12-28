show databases;
use nh_db;
select * from stud_score;

create table usertest1(
userID varchar(12),
userPW varchar(12)
);

select * from usertest1;

insert into usertest1 value ('kyr','1234');

create table memo (
num int not null auto_increment,
id char(15) not null,
name char(10) not null,
nick char(10) not null,
content text not null,
regist_day char(20),
primary key(num)
);

use ShoppingMall;
create table member(
no int not null auto_increment primary key,
uid varchar(30),
passwd varchar(30),
name varchar(30),
birthday date,
tel varchar(30),
phone varchar(30),
email varchar(50),
zip varchar(11),
address varchar(100),
manager tinyint
);

drop table member;
select * from member; 
select manager from member where uid='dahee' and manager='1';
insert into member (uid, passwd, name, birthday, tel, phone, email, zip, address,manager) values('chonahoom', 'skgna', '조나훔', '1994/07/29', '062-952-8279', '010-2907-8270', 'chonahoom@naver.com', '644-11', '부영애시앙 201동 101호', '1');




create table product(
product_no int not null auto_increment primary key,
product_name varchar(100),
product_cost int,
product_count int,
product_position varchar(20),
product_kind1 varchar(20),
product_kind2 varchar(20),
product_kind3 varchar(20),
product_size1 varchar(10),
product_size2 varchar(10),
product_size3 varchar(10),
main_img varchar(60),
sub_img1 varchar(60),
sub_img2 varchar(60),
sub_img3 varchar(60),
sub_img4 varchar(60),
product_content varchar(1000)
);

select * from product order by product_no desc;
select FORMAT(product_cost,0) from product;

drop table product;
select * from product;

delete from product where product_no = 33;


create table order_product(
    order_num int not null auto_increment primary key,
    order_uid varchar(30),
    order_pname varchar(100),
    order_option1 varchar(15),
    order_option2 varchar(15),
    order_pcount int,
    order_pcost int,
    order_final_cost int
);
select * from order_product;
drop table order_product;






create table post_info(
    post_num int not null auto_increment primary key,
    post_uid varchar(30),
    post_client varchar(20),
    post_tel varchar(30),
    post_phone varchar(30),
    post_email varchar(100),
    post_zip varchar(11),
    post_address varchar(100),
    post_memo varchar(400)
);
select post_num, post_client, post_tel, post_phone, post_zip, post_address, post_memo from post_info where post_uid='whguswls1212';
select * from post_info;


drop table post_info;

create table free_board(
    board_no int not null auto_increment primary key,
    board_title varchar(100),
    board_file varchar(100),
    board_content varchar(2000),
    board_writer varchar(20),
    board_date varchar(50)
);
select * from free_board;
drop table free_board;

insert into free_board (board_title, board_content, board_writer, board_date) 
values('ㅁㄴㅇㄻㄴㅇㄻㄴㅇㄹ', 'ㅁㄴㅇㄻㄴㅇㄹ', 'dahee', '2016-12-10 AM 04:33:06' );