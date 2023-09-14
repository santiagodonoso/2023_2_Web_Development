<?php

session_start();
// echo $_SESSION['user_id'];
// exit();


require_once __DIR__ . '/_.php';

try{

  // TODO: validate the user_name
  
  $db = _db();
  $q = $db->prepare('
    UPDATE users 
    SET user_name = :user_name, 
        user_last_name = :user_last_name
    WHERE user_id = :user_id
  ');
  $q->bindValue(':user_name', $_POST['user_name']); // dup. line alt+shift+arrow down
  $q->bindValue(':user_last_name', $_POST['user_last_name']); 
  $q->bindValue(':user_id', $_SESSION['user_id']); 
  $q->execute();
  $counter = $q->rowCount(); 
  
  echo json_encode(['info'=>'user updated']);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}






