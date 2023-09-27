<?php

header('Content-Type: application/json');
require_once __DIR__.'/../_.php';
try{
  // TODO: make sure this is the admin user
  // TODO: check in the session the user's role

  $user_id = $_GET['user_id'];
  $user_is_blocked = $_GET['user_is_blocked'];


  echo $user_id;
  echo $user_is_blocked;

}catch(Exception $e){
    $status_code = !ctype_digit($e->getCode()) ? 500 : $e->getCode();
    $message = strlen($e->getMessage()) == 0 ? 'error - '.$e->getLine() : $e->getMessage();
    http_response_code($status_code);
    echo json_encode(['info'=>$message]);
}