<?php
ini_set('display_errors', 1);
require_once __DIR__.'/_.php';

try{

  // Validate
  _validate_user_name();
  // TODO: validate user last name
  _validate_last_name();
  

  $message = ['info' => 'Yes'];
  echo json_encode($message);
}catch(Exception $e){
  http_response_code(400);
  $message = ['info' => $e->getMessage()];
  echo json_encode($message);
}
?>