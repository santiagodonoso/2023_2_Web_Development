<?php
require_once __DIR__.'/../_.php';
try{

  _validate_user_email();
  _validate_user_password();

  session_start();
  $_SESSION['user'] = [
    'user_id' => 1,
    'user_name' => 'A'
  ];

  echo json_encode($_SESSION['user']);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>$e->getMessage()]);
}




