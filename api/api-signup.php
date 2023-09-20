<?php

require_once __DIR__.'/../_.php';

try{
  _validate_user_name();

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>$e->getMessage()]);
}




