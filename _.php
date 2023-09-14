<?php

function _db(){
	try{
	  $sDatabaseUserName = 'root';
	  $sDatabasePassword = ''; // MAC the password root, password
	  $sDatabaseConnection = "mysql:host=localhost; dbname=company; charset=utf8mb4";
	
	  // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	  //   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ   [{}]    $user->id
	  $aDatabaseOptions = array(
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // [['id'=>1, 'name'=>'A'],[]]  $user['id']
	  );
	  return new PDO( $sDatabaseConnection, $sDatabaseUserName, $sDatabasePassword, $aDatabaseOptions );
	}catch( PDOException $e){
	  throw new Exception('ups... system under maintainance', 500);
	  exit();
	}	
}
