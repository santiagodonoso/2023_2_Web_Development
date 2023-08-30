<?php

try{

  // Connect to the database
  $items = [
    ['item_id'=>1, 'item_name'=>'A', 'color'=>'blue'],
    ['item_id'=>2, 'item_name'=>'B', 'color'=>'red'],
    ['item_id'=>3, 'item_name'=>'C', 'color'=>'blue'],
  ];

  $data = [];

  foreach($items as $item){
    if( $item['color'] == $_GET['item-color'] ){
      $data[] = $item;
    }
  }


  echo json_encode($data);

}catch(Exception $e){
  http_response_code(400);
  echo json_encode(['info'=>'ups...']);
}


?>