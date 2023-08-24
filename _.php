<?php

function _validate_user_name(){
  if( ! isset($_POST['name']) ){
    throw new Exception('name missing');
  }

  $_POST['name'] = trim($_POST['name']);

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

  $_POST['last_name'] = trim($_POST['last_name']);


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