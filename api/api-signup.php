<?php

require_once __DIR__.'/../_.php';

try{
  _validate_user_name();
  _validate_user_last_name();
  _validate_user_email();
  _validate_user_password();
  _validate_user_confirm_password();

  $user_id = bin2hex(random_bytes(5));
  echo json_encode(['user_id' => $user_id]);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>$e->getMessage()]);
}




