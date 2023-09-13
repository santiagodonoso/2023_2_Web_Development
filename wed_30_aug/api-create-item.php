<?php
require_once __DIR__ . '/_.php';

try{
  _validate_item_name();
  echo 'x';
}catch(Exception $e){
  http_response_code(400);
  // Assosiative array
  echo json_encode(['info'=>$e->getMessage()]);
}



?>