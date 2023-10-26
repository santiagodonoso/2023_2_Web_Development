<?php


try{
  require_once __DIR__.'/_.php';
  $db = _db();
  $db->beginTransaction();
  $transfer = 5;
  // Take 5 from A
  $q = $db->prepare(' UPDATE users 
                      SET user_balance = user_balance - :transfer
                      WHERE user_id = 1
                  ');
  $q->bindValue(':transfer', $transfer);
  $q->execute();
  // Connect API
  // Connect API
  // Connect API
  // Connect Database
  // Use a file

  if( 'a' != 'b' ){
    throw new Exception('System under maintainance');
  }

  // Add 5 to B
  $q = $db->prepare(' UPDATE users 
                      SET user_balance = user_balance + :transfer
                      WHERE user_id = 2
                  ');
  $q->bindValue(':transfer', $transfer);
  $q->execute(); 
  
  
  $db->commit();
  echo 'Transfer OK';
}catch(Exception $ex){
  echo $ex;
  $db->rollBack();
}

















