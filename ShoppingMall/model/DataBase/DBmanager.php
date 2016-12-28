<?php 
class DBControl{

						public $dbo;
						public $stt;
						function __construct(){
							try{$this->dbo = $this->connect();}
							catch(PDOException $e){
							}
					
						}

						function useSql($sql){
							$this->stt = $this->dbo->prepare($sql,array(PDO::ATTR_CURSOR=>PDO::CURSOR_SCROLL));
							$this->stt->execute();
						}

						function sttFetchAssoc(){
							return $this->stt->fetch(PDO::FETCH_ASSOC);
						}

						function connect() {// 드라이브명 
						   $dsn = 'mysql:host=localhost;port=3309;dbname=ShoppingMall;';
						   $user = 'root';
						   $pass = 'iammanager';

						   try{

						      $db = new PDO($dsn, $user, $pass);
						     
						      //print '접속';

						   }catch(PDOException $e){
						   		echo "안녕~";
						      exit('DB접속 불가:{$e->getMessage()}');
						   }

						   return $db;
					}
				}

	

?>