<?php
session_start();
require_once __DIR__ . '/_.php';

try{

  // TODO: validate the user_name

  $db = _db();
  $q = $db->prepare(' INSERT INTO 
                      users (user_id, user_name, user_last_name) 
                      VALUES (null, :user_name, :user_last_name)'); 

  // bind and prevent SQL injections
  $q->bindValue(':user_name', $_POST['user_name']);
  $q->bindValue(':user_last_name', $_POST['user_last_name']);
  // Get the user's id

  $q->execute();
  $user_id = $db->lastInsertId();
  $_SESSION['user_id'] = $user_id;
  echo json_encode([
      'user_id' => (int)$user_id,
      'user_name' => $_POST['user_name'],
      'user_last_name' => $_POST['user_last_name']
    ]);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}





