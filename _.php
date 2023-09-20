<?php


// ##############################
define('USER_NAME_MIN', 2);
define('USER_NAME_MAX', 20);
function _validate_user_name(){

  $error = 'user_name min '.USER_NAME_MIN.' max '.USER_NAME_MAX;

  if(!isset($_POST['user_name'])){ 
    throw new Exception($error); 
  }
  $_POST['user_name'] = trim($_POST['user_name']);

  if( strlen($_POST['user_name']) < USER_NAME_MIN ){
    throw new Exception($error);
  }

  if( strlen($_POST['user_name']) > USER_NAME_MAX ){
    throw new Exception($error);
  }
}


// ##############################
define('USER_LAST_NAME_MIN', 2);
define('USER_LAST_NAME_MAX', 20);
function _validate_user_last_name(){

  $error = 'user_last_name min '.USER_LAST_NAME_MIN.' max '.USER_LAST_NAME_MAX;

  if(!isset($_POST['user_last_name'])){ 
    throw new Exception($error); 
  }
  $_POST['user_last_name'] = trim($_POST['user_last_name']);

  if( strlen($_POST['user_last_name']) < USER_LAST_NAME_MIN ){
    throw new Exception($error);
  }

  if( strlen($_POST['user_last_name']) > USER_LAST_NAME_MAX ){
    throw new Exception($error);
  }
}








