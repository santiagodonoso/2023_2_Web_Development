<?php

require_once __DIR__ . '/_.php';

try{
  $db = _db();
  $q = $db->prepare(' INSERT INTO 
                      users (id, name) 
                      VALUES (null, "Santiago")'); 
  $q->execute();
  echo json_encode(['info' => 'user created']);
}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info' => 'database error']);
}





