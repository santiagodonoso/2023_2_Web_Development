<?php

function _db(){
	try{
	  $user_name = 'root';
	  $user_password = ''; // MAC the password root, password
	  $db_connection = "mysql:host=localhost; dbname=company; charset=utf8mb4";
	
	  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	  //   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ   [{}]    $user->id
	  $db_options = array(
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // [['id'=>1, 'name'=>'A'],[]]  $user['id']
	  );
	  return new PDO( $db_connection, $user_name, $user_password, $db_options );
	}catch( PDOException $e){
	  throw new Exception('ups... system under maintainance', 500);
	  exit();
	}	
}
