<?php
ini_set('display_errors', 1);
require_once __DIR__.'/_.php';

try{

  // Validate
  _validate_user_name();
  // TODO: validate user last name
  _validate_last_name();

  $message = [
    'info' => 'You are logged in',
    'name' => $_POST['name'],
    'last_name' => $_POST['last_name']
  ];
  echo json_encode($message);
}catch(Exception $e){
  http_response_code(400);
  $message = ['info' => $e->getMessage()];
  echo json_encode($message);
}
?>