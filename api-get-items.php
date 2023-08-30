<?php

try{

  // Connect to the database
  $items = [
    ['item_id'=>1, 'item_name'=>'A'],
    ['item_id'=>2, 'item_name'=>'B'],
    ['item_id'=>3, 'item_name'=>'C'],
  ];

  echo json_encode($items);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>'ups...']);
}


?>