<?php
session_start();
require_once __DIR__ . '/_.php';

try{

  // TODO: validate the user_name
  
  $db = _db();
  $q = $db->prepare(' DELETE FROM 
                      users WHERE user_id = :user_id');
  $q->bindValue(':user_id', $_SESSION['user_id']);
  $q->execute();
  $deleted_rows = $q->rowCount(); 
  http_response_code(204);
}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}






