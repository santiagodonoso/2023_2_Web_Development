<?php

try{
  require_once __DIR__.'/_.php';
  $db = _db();
  $db->beginTransaction();

  $db->commit();
}catch(Exception $ex){
  echo $ex;
  $db->rollBack();
}

















