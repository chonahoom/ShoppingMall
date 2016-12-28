-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: shoppingmall
-- ------------------------------------------------------
-- Server version	5.7.15-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `free_board`
--

DROP TABLE IF EXISTS `free_board`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `free_board` (
  `board_no` int(11) NOT NULL AUTO_INCREMENT,
  `board_title` varchar(100) DEFAULT NULL,
  `board_file` varchar(100) DEFAULT NULL,
  `board_content` varchar(2000) DEFAULT NULL,
  `board_writer` varchar(20) DEFAULT NULL,
  `board_date` varchar(50) DEFAULT NULL,
  `board_root` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`board_no`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `free_board`
--

LOCK TABLES `free_board` WRITE;
/*!40000 ALTER TABLE `free_board` DISABLE KEYS */;
INSERT INTO `free_board` VALUES (10,'제목수정합니다','home_button.png','ㅁㄴㅁㄻㄴ\r\n													','whguswls1212','2016-12-10',NULL),(11,'zip파일첨부','oop.zip','ㅁㄴㅇㄹ','whguswls1212','2016-12-10',NULL),(12,'농협사진','농협.jpg','올려드립니다','whguswls1212','2016-12-10',NULL),(15,'배송 너무 느려요 진짜 ','KakaoTalk_20161115_213657888.jpg','짜증나요 일주일 전에 시켰는데ㅡㅡ','dahee','2016-12-11',NULL),(18,'아 이제 화장실 가야겠다',NULL,'헤헤','skgna','2016-12-12',NULL),(20,'index작업중입니다',NULL,'양해바람\r\n			tn										\r\n													','whguswls1212','2016-12-12',NULL),(21,'DB객체화시킴',NULL,'잘되나요','whguswls1212','2016-12-12',NULL),(26,'오 되나요(수정)됬나요',NULL,'제발\r\n			뭐시여										\r\n													','whguswls1212','2016-12-13',NULL),(27,'사진','home_button.png','사진','whguswls1212','2016-12-13',NULL),(28,'다운로드 구현을 다시해보자',NULL,'시작!','skgna','2016-12-13',NULL),(33,'파일업로드','./uploadfile/KakaoTalk_20161201_114649462.jpg','ㅁㄴㅇㄹ','skgna','2016-12-13',NULL),(35,'ㄴㄹㅇ','./uploadfile/Koala.jpg','알라알라코알라','hangi','2016-12-13',NULL),(39,'asdf','./uploadfile/','sdaasdf','whguswls1212','2016-12-13',NULL),(54,'asfdasdf','./uploadfile/','asdfasdf','whguswls1212','2016-12-13',NULL);
/*!40000 ALTER TABLE `free_board` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `member` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(30) DEFAULT NULL,
  `passwd` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tel` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `zip` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `manager` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (1,'chonahoom','skgna','조나훔','1994-07-29','062-952-8279','010-2907-8270','chonahoom@naver.com','644-11','부영애시앙 201동 101호',1),(2,'dahee','ekgml','다희','1994-08-31','062-626-6262','626-2622-6262','dahee@naver.com','123-123','베로니스 306호',NULL),(3,'gkdldy131','123456','asdg','1994-04-29','010-547-3148','010-677-3451','anldlnk@naver.com','139-770','asgasgg112',NULL),(4,'whguswls1212','guswls','현진','1993-05-16','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',NULL),(5,'test','test','테스트','1111-11-11','111-111-1111','111-1111-1111','1','1-1','1',NULL),(6,'skgna','skgna','조나훔','1994-07-29','062-954-8270','010-2907-8270','chonahoom@naver.com','654-97','광주광역시 광산구 산정동 부영애시앙 2차 201동 101호',NULL),(7,'test1','asdf','test','1232-12-21','13-1321-1132','132-1323-1323','132','123-132','132',NULL),(8,'test1','asdf','test','1232-12-21','13-1321-1132','132-1323-1323','132','123-132','132',NULL),(9,'skeks','skeks729','조나단','1994-07-29','010-9849-9799','010-5105-8270','skeks729@naver.com','64-64','광주광역시광산구산정동',NULL),(10,'tjdals','tjdals','성민','1994-08-16','062-645-4887','010-2978-8994','tjdals@naver.com','12-3','영진전문대학',NULL),(11,'hangi','1234','한기','2012-05-15','010-754-7864','010-7894-7977','qwewq@naver.com','12-101','영진전문대 본관 311호',NULL);
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_product` (
  `order_num` int(11) NOT NULL AUTO_INCREMENT,
  `order_uid` varchar(30) DEFAULT NULL,
  `order_pname` varchar(100) DEFAULT NULL,
  `order_option1` varchar(15) DEFAULT NULL,
  `order_option2` varchar(15) DEFAULT NULL,
  `order_pcount` int(11) DEFAULT NULL,
  `order_pcost` int(11) DEFAULT NULL,
  `order_final_cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_num`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (1,'whguswls1212','밤고구마','밤고구마','1kg',3,38000,117500),(2,'whguswls1212','미키마우스','미키키보드','소',2,26000,55500),(3,'whguswls1212','항정살','항정살','3인분',8,6500,55500),(4,'dahee','총각김치','아재김치','5kg',2,8282,20064),(5,'whguswls1212','양배추','염소배추','빨간색',231,800,188300),(6,'whguswls1212','양배추','염소배추','빨간색',12,800,13100),(7,'dahee','호박고구마!!','호박고구마','5kg',40,45000,1803500),(8,'whguswls1212','샐러리(아삭아삭!)','샐러리','소',1,2400,5900),(9,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(10,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(11,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(12,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(13,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(14,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(15,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(16,'whguswls1212','배추김치','포기김치','1kg',1,10000,13500),(17,'skgna','총각김치','처녀김치','3kg',2,8282,20064),(18,'whguswls1212','호박고구마!!','호박고구마','1kg',1,45000,48500),(19,'whguswls1212','호박고구마!!','호박고구마','3kg',1,45000,48500),(20,'whguswls1212','백상아리','백상아리','대',1,120000000,120003500),(21,'whguswls1212','미키마우스','미키모니터','중',1,26000,29500),(22,'whguswls1212','고구마말랭이','쫀득말랭','대',1,3200,6700),(23,'whguswls1212','팥빵','녹팥빵','대',1,800,4300),(24,'whguswls1212','양배추','염소배추','빨간색',1,800,4300),(25,'whguswls1212','양배추','염소배추','빨간색',1,800,4300),(26,'skgna','청상아리','내가아리','대',1,125000000,125003500),(27,'whguswls1212','무민인형','무민','대',1,34000,37500),(28,'whguswls1212','마','하마','중',2,3000,9500),(29,'whguswls1212','깍두기','각독기','5kg',3,2000,9500),(30,'hangi','봉하쌀','봉하농법','10kg',214,60000,12843500);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_info`
--

DROP TABLE IF EXISTS `post_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_info` (
  `post_num` int(11) NOT NULL AUTO_INCREMENT,
  `post_uid` varchar(30) DEFAULT NULL,
  `post_client` varchar(20) DEFAULT NULL,
  `post_tel` varchar(30) DEFAULT NULL,
  `post_phone` varchar(30) DEFAULT NULL,
  `post_email` varchar(100) DEFAULT NULL,
  `post_zip` varchar(11) DEFAULT NULL,
  `post_address` varchar(100) DEFAULT NULL,
  `post_memo` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`post_num`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_info`
--

LOCK TABLES `post_info` WRITE;
/*!40000 ALTER TABLE `post_info` DISABLE KEYS */;
INSERT INTO `post_info` VALUES (1,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','ㅁㄴㅇㄹ'),(2,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','미키마우스 미키키보드!'),(3,'whguswls1212','김다희','053-654-6541','010-4714-4055','kimdahee78@naver.com','123-126','대구광역시 북구 용산동 현진이형집','항정살 많이많이주세욥>_<'),(4,'dahee','다희','062-626-6262','626-2622-6262','팡디','123-123','데헷','사랑해주세요 헤헤'),(5,'whguswls1212','주성민','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','ㅁㄴㅇㄹ'),(6,'whguswls1212','조나훔','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','나훔이집','맛있게먹으렴^^'),(7,'dahee','다희','062-626-6262','626-2622-6262','팡디','123-123','응디','나훔이랑 함께 보내주세요^^'),(8,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집',''),(9,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(10,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(11,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(12,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(13,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(14,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(15,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(16,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-126','대구광역시 북구 용산동 현진이형집','asfd'),(17,'skgna','조나훔','062-954-8270','010-2907-8270','chonahoom@naver.com','654-97','광주광역시 광산구 산정동 부영애시앙 2차 201동 101호',''),(18,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(19,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(20,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(21,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(22,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(23,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(24,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(25,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(26,'skgna','김진영','0615-84-9740','010-3039-3192','rlawlsdud@naver.com','132-12','진영이형집','포장 잘해주세요~'),(27,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(28,'whguswls1212','조현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집','마지막컨트롤러 test'),(29,'whguswls1212','현진','053-654-6541','010-8625-0570','whguswls1212@naver.com','123-123','현진이형집',''),(30,'hangi','한기','010-754-7864','010-7894-7977','qwewq@naver.com','12-101','영진전문대 본관 311호','두배로 주세요'),(31,'hangi','한기','010-754-7864','010-7894-7977','qwewq@naver.com','12-101','영진전문대 본관 311호','');
/*!40000 ALTER TABLE `post_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `product_no` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `product_cost` int(11) DEFAULT NULL,
  `product_count` int(11) DEFAULT NULL,
  `product_position` varchar(20) DEFAULT NULL,
  `product_kind1` varchar(20) DEFAULT NULL,
  `product_kind2` varchar(20) DEFAULT NULL,
  `product_kind3` varchar(20) DEFAULT NULL,
  `product_size1` varchar(10) DEFAULT NULL,
  `product_size2` varchar(10) DEFAULT NULL,
  `product_size3` varchar(10) DEFAULT NULL,
  `main_img` varchar(60) DEFAULT NULL,
  `sub_img1` varchar(60) DEFAULT NULL,
  `sub_img2` varchar(60) DEFAULT NULL,
  `sub_img3` varchar(60) DEFAULT NULL,
  `sub_img4` varchar(60) DEFAULT NULL,
  `product_content` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`product_no`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'호박고구마!!',45000,12,'menu01','호박고구마','밤고구마','하지마','1kg','3kg','5kg','호박고구마.jpg','밤고구마.jpg','밤고구마.jpg','밤고구마.jpg','밤고구마.jpg','그래!! 호!박!고!구!마!!!'),(2,'밤고구마',38000,100,'menu01','밤고구마','호박고구마','뭐임마','1kg','3kg','5kg','밤고구마.jpg','밤고구마.jpg','밤고구마.jpg','밤고구마.jpg','밤고구마.jpg','낮고구마'),(3,'God김치',1004,1004,'menu02','god김치','신김치','jesus김치','1kg','3kg','5kg','갓김치.jpg','갓김치.jpg','갓김치.jpg','갓김치.jpg','갓김치.jpg','김치계의 최강자!! God김치!'),(4,'배추김치',10000,100,'menu02','포기김치','배추김치','키무치','1kg','3kg','5kg','배추김치.jpg','배추김치.jpg','배추김치.jpg','배추김치.jpg','배추김치.jpg','역시 김치는 Classic한 배추김치지!'),(5,'총각김치',8282,82,'menu02','총각김치','처녀김치','아재김치','1kg','3kg','5kg','총각김치.jpg','총각김치.jpg','총각김치.jpg','총각김치.jpg','총각김치.jpg','총각김치 ㅠㅠ 불쌍해..'),(6,'바게트빵',1600,8,'menu03','파리바게트','뚜레쥬르','바게트빵','대','중','소','바게트빵.jpg','바게트빵.jpg','바게트빵.jpg','바게트빵.jpg','바게트빵.jpg','파리바게트~'),(7,'소보로빵',1200,80,'menu03','곰보','나병','소보르','대','중','소','소보로빵.jpg','소보로빵.jpg','소보로빵.jpg','소보로빵.jpg','소보로빵.jpg','곰보곰보해'),(8,'식빵',3200,32,'menu03','식빵','밤식빵','죽빵','대','중','소','식빵.jpg','식빵.jpg','식빵.jpg','식빵.jpg','식빵.jpg','식빵은 전자랜지 돌린다음 우유랑 같이!'),(9,'팥빵',800,80,'menu03','팥빵','녹팥빵','팥죽빵','대','중','소','팥빵.jpg','팥빵.jpg','팥빵.jpg','팥빵.jpg','팥빵.jpg','우리 외할머니가 참 좋아하시던 빵인데 ..ㅎ'),(10,'고등어',4200,7,'menu04','간고등어','폐고등어','심장고등어','대어','중간','피라미','고등어.jpg','고등어.jpg','고등어.jpg','고등어.jpg','고등어.jpg','간고등어 구워서 먹고싶다 .. 소금구이짱맛'),(11,'참다랑어',160000,1,'menu04','참다랑어','거짓다랑어','진짜다랑어','대','중','소','참다랑어.jpg','참다랑어.jpg','참다랑어.jpg','참다랑어.jpg','참다랑어.jpg','진짜다랑어야??'),(12,'범고래',80000000,6,'menu04','범고래','사자고래','난다고래','대','중','소','범고래.jpg','범고래.jpg','범고래.jpg','범고래.jpg','범고래.jpg','아! 고래?!'),(13,'백상아리',120000000,4,'menu04','백상아리','흑상아리','황상아리','대','중','소','백상아리.jpg','백상아리.jpg','백상아리.jpg','백상아리.jpg','백상아리.jpg','백상아리~청상아리'),(14,'청상아리',125000000,3,'menu04','백상아리','슈퍼비','내가아리','대','중','소','청상아리.jpg','청상아리.jpg','청상아리.jpg','청상아리.jpg','청상아리.jpg','아리아리랑'),(15,'가루껌',600,60,'menu05','가루껌','액체껌','분말껌','X','X','X','가루껌.png','가루껌.png','가루껌.png','가루껌.png','가루껌.png','가루가루 가루껌'),(16,'깜찍이',1200,12,'menu05','빨간달팽이','파란달팽이','초록달팽이','X','X','X','깜찍이.jpg','깜찍이.jpg','깜찍이.jpg','깜찍이.jpg','깜찍이.jpg','야 방금 뭐가 지나갔냐? '),(17,'뻥튀기',400,40,'menu05','뻥튀기','뻥이요','뻥뻐레','X','X','X','뻥튀기.jpg','뻥튀기.jpg','뻥튀기.jpg','뻥튀기.jpg','뻥튀기.jpg','예전에 먹어봤던 것 같기도 하고..'),(18,'이구동성',1400,14,'menu05','이구동성','삼구동성','사구동성','X','X','X','이구동성.jpg','이구동성.jpg','이구동성.jpg','이구동성.jpg','이구동성.jpg','와 이거 진짜 맛있었는데 또 먹고 싶다'),(19,'언니몇쌀',59000,1,'menu06','언니몇쌀','엄마뱃쌀','오빤몇쌀','1kg','3kg','5kg','언니몇쌀.jpg','엄마뱃쌀.jpg','오빤몇쌀.jpg','언니몇쌀.jpg','언니몇쌀.jpg','내가봤을땐 28살?'),(20,'엄마뱃쌀',46000,46,'menu06','언니몇쌀','엄마몇쌀','오빤몇쌀','1kg','3kg','5kg','엄마뱃쌀.jpg','오빤몇쌀.jpg','엄마뱃쌀.jpg','엄마뱃쌀.jpg','엄마뱃쌀.jpg','몇키로실까..'),(21,'오빤몇쌀',23000,23,'menu06','23살','24살','25살','68kg','73kg','78kg','오빤몇쌀.jpg','오빤몇쌀.jpg','오빤몇쌀.jpg','오빤몇쌀.jpg','오빤몇쌀.jpg','딱이다!!'),(22,'당근이지~',800,80,'menu07','당큰','당근','당윤','대','중','소','당근.jpg','당근.jpg','당근.jpg','당근.jpg','당근.jpg','당근이지`~`'),(23,'브로콜리',600,60,'menu07','홀맨','브로콜리','브로콜리','대','중','소','브로콜리.jpg','브로콜리.jpg','브로콜리.jpg','브로콜리.jpg','브로콜리.jpg','나단이 머리스타일 아니야?ㅋㅋ'),(24,'청경채',1200,120,'menu07','청경채','홍경채','진미채','대','중','소','청경채.jpg','청경채.jpg','청경채.jpg','청경채.jpg','청경채.jpg','군대에서 돼지고기 청경채 많이 먹었었는데 '),(25,'가브리살',6847,648,'menu08','가브리엘','미카엘','라파엘','1인분','2인분','3인분','가브리살.jpg','가브리살.jpg','가브리살.jpg','가브리살.jpg','가브리살.jpg','나는 가브리살이랑 갈메기살이랑 같은건줄..'),(26,'갈메기살',23000,23,'menu08','갈메기','기러기','비행기','1인분','2인분','3인분','갈메기살.jpg','갈메기살.jpg','갈메기살.jpg','갈메기살.jpg','갈메기살.jpg','돼지 한마리에 1인분 나올까 말까한 갈메기살이래'),(27,'삼겹살',12039,123,'menu08','삼겹살','사겹살','오겹살','1인분','2인분','3인분','삼겹살.jpg','삼겹살.jpg','삼겹살.jpg','삼겹살.jpg','삼겹살.jpg','삼겹살 진짜 땡긴다.. 삼겹살에 소주딱'),(28,'토시살',48030,408,'menu08','토시살','팔토시','발토시','1인분','2인분','3인분','토시살.png','토시살.png','토시살.png','토시살.png','토시살.png','이건 먹어 본 적이 없는 것 같은데..'),(29,'항정살',6500,65,'menu08','항정살','인정살','진정살','1인분','2인분','3인분','항정살.jpg','항정살.jpg','항정살.jpg','항정살.jpg','항정살.jpg','항정살이다요!'),(30,'러버덕',2500,25,'menu09','러버독','러버덕','러버독','대','중','소','러버독.jpg','러버독.jpg','러버독.jpg','러버독.jpg','러버독.jpg','저번에 설치미술했다가 낭패봤던 러버독..'),(31,'미니언즈(군인바나나)',8600,1,'menu09','미니언','미니언즈','미니언즈','대','중','소','미니언즈.jpg','미니언즈.jpg','미키마우스.jpg','미니언즈.jpg','미니언즈.jpg','바나나 바나나나 바나나 바나나 바나나아아 포테토다아아'),(32,'미키마우스',26000,4,'menu09','미키마우스','미키키보드','미키모니터','대','중','소','미키마우스.jpg','미키마우스.jpg','미키마우스.jpg','미키마우스.jpg','미키마우스.jpg','미키마우스의 인기는 식지 않는다!'),(34,'샐러리(아삭아삭!)',2400,4,'menu07','샐러리','샐러리맨','샐러드','대','중','소','샐러리1.png','샐러리2.jpg','샐러리1.png','샐러리2.jpg','샐러리1.png','소리 난리남 진짜'),(35,'양배추',800,4,'menu07','양배추','염소배추','말배추','초록색','빨간색','보라색','양배추.png','양배추.jpg','양배추.png','양배추1.jpg','양배추2.jpg','이제는 조세호'),(36,'고구마말랭이',3200,20,'menu01','쫀득말랭','쫄깃말랭','말랑말랭','특대','대','중','고구마말랭이1.jpg','고구마말랭이1.jpg','고구마말랭이2.jpg','고구마말랭이3.jpg','고구마말랭이4.jpg','말랑말랑 말랭이 잡수세요~^^'),(37,'고구마줄기',1200,4,'menu01','적줄기','청줄기','흑줄기','대','중','소','고구마줄기1.jpg','고구마줄기1.jpg','고구마줄기3.jpg','고구마줄기4.jpg','고구마줄기2.jpg','고구마줄기 무침 먹고싶다 ㅠㅠ'),(38,'마',3000,15,'menu01','마','임마','하마','대','중','소','마1.jpg','마1.jpg','마2.jpg','마4.jpg','마2.jpg','고구마는 고구려에서 난 마가 고구마인거, 다들 아시나요?'),(39,'파김치',4200,30,'menu02','파김치','대파김치','양파김치','1kg','3kg','5kg','파김치1.jpg','파김치1.jpg','파감치3.jpg','파감치2.jpg','파감치4.jpg','파김치가 되었다 ㅠㅠ'),(40,'깍두기',2000,40,'menu02','깍두기','각독기','무김치','1kg','3kg','5kg','깍두기1.jpg','깍두기1.jpg','깍두기2.jpg','깍두기3.jpg','깍두기4.jpg','깍두기의 본 명칭은 각독기!'),(41,'맘모스빵',3200,8,'menu03','맘모스빵','코끼리빵','기린빵','대','중','소','맘모스빵1.jpg','맘모스빵2.jpg','맘모스빵3.jpg','맘모스빵4.jpg','맘모스빵1.jpg','맘모스빵 !! 짱맛'),(42,'아폴로',200,30,'menu05','딸기맛','초코맛','바나나맛','대','중','소','아폴로1.jpg','아폴로2.jpg','아폴로3.jpg','아폴로4.jpg','아폴로2.jpg','아폴로!!'),(43,'우렁이쌀',40000,20,'menu06','우렁이쌀','우렁쌀','우럭쌀','20kg','10kg','3kg','우렁이쌀1.jpg','우렁이쌀2.jpg','우렁이쌀3.jpg','우렁이쌀4.jpg','우렁이쌀5.png','우렁이가 직접 한땀한땀 키운 쌀!'),(44,'봉하쌀',60000,60,'menu06','오리농법','우렁이농법','봉하농법','10kg','5kg','3kg','봉하쌀1.jpg','봉하쌀2.jpg','봉하쌀3.jpg','봉하쌀3.jpg','봉하쌀2.jpg','봉하마을 쌀 '),(45,'드론',800000,5,'menu09','SCV','드론','프로브','특대','대','중','드론1.jpg','드론2.jpg','드론3.jpg','드론4.jpg','드론5.jpg','드론의시대!'),(46,'무민인형',34000,56,'menu09','무민','시민','평민','특대','대','중','무민4.jpg','무민1.jpg','무민2.jpg','무민3.jpg','무민5.jpg','무민!!><');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-13 12:04:44
