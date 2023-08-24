<?php

function _validate_user_name(){
  if( ! isset($_POST['name']) ){
    throw new Exception('name missing');
  }
  if( strlen($_POST['name']) < 2 ){
    throw new Exception('name min 2');
  }
  if( strlen($_POST['name']) > 20 ){
    throw new Exception('name max 20');
  }  
  // Success
  return true;
}


function _validate_last_name(){
  if( ! isset($_POST['last_name']) ){
    throw new Exception('last_name missing');
  }
  if( strlen($_POST['last_name']) < 2 ){
    throw new Exception('last_name min 2');
  }
  if( strlen($_POST['last_name']) > 20 ){
    throw new Exception('last_name max 20');
  }  
  // Success
  return true;  
}


?>