<?php

require_once __DIR__ . '/_.php';

try{

  // TODO: validate the user_name

  $db = _db();
  $q = $db->prepare('SELECT * FROM users'); 
  $q->execute();
  $users = $q->fetchAll();
  echo json_encode($users);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}





