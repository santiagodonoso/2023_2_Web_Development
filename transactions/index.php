<?php

try{
  require_once __DIR__.'/_.php';
  $db = _db();
  $db->beginTransaction();
  $transfer = 5;
  $q = $db->prepare(' UPDATE users 
                      SET user_balance = user_balance - :transfer
                      WHERE user_id = 1
                  ');
  $q->bindValue(':transfer', $transfer);
  $q->execute();
  $db->commit();
  echo 'Transfer OK';
}catch(Exception $ex){
  echo $ex;
  $db->rollBack();
}

















