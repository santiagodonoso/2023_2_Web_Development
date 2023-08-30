<?php

$items = [
  ['item_id'=>1, 'item_name'=>'A'],
  ['item_id'=>2, 'item_name'=>'B'],
  ['item_id'=>3, 'item_name'=>'C'],
];

try{
  foreach($items as $item){
    if( $item['item_id'] == $_GET['item-id'] ){
      echo json_encode($item);
      exit();
    }
  }



}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>'ups...']);
}


// echo $_GET['item-name'];
// echo $_GET['item-color'];

// Query string after the ?
// ? starts the variables
// every other variable defined with &


?>