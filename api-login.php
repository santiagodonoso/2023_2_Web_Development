<?php
try{
  $message = ['info' => 'Yes'];
  echo json_encode($message);
}catch(Exception $e){
  http_response_code(400);
  $message = ['info' => 'No'];
  echo json_encode($message);
}
?>