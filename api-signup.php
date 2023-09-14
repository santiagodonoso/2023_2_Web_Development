<?php

require_once __DIR__ . '/_.php';

try{

  // TODO: validate the user_name

  $db = _db();
  $q = $db->prepare(' INSERT INTO 
                      users (id, name) 
                      VALUES (null, :user_name)'); 

  // bind and prevent SQL injections
  $q->bindValue(':user_name', $_POST['user_name']);

  $q->execute();
  echo json_encode(['info' => 'user created']);
}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}





