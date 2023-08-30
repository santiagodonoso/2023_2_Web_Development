<?php


define('ITEM_NAME_MIN_LEN', 2);

function _validate_item_name(){
  if(!isset($_POST['item_name'])){
    throw new Exception('item_name missing');
    exit();
  }
  $_POST['item_name'] = trim($_POST['item_name']);
  if( strlen($_POST['item_name']) < ITEM_NAME_MIN_LEN){
    throw new Exception('item_name min '.ITEM_NAME_MIN_LEN.' characters');
    exit();    
  }
}


?>