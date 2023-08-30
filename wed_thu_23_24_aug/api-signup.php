<?php

require_once __DIR__ . '/_.php';

try{
  _validate_user_name();
  _validate_last_name();

  $user = [
    'id' => bin2hex(random_bytes(5)),
    'name' => $_POST['name'],
    'last_name' => $_POST['last_name']
  ];
  echo json_encode($user);

}catch(Exception $e){
  http_response_code(400);
  $message = [
    'info' => $e->getMessage()
  ];
  echo json_encode( $message);
}


?>