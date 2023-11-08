<?php
// ##############################
function _db($query, $type='cursor'){
    $ch = curl_init("http://localhost:8529/_api/$type");
    curl_setopt($ch, CURLOPT_TIMEOUT, 2); //timeout in seconds
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Do not outout the response automatically on exec
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    curl_setopt($ch, CURLOPT_USERPWD, "root:password");
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    // execute!
    $response = curl_exec($ch);
    // close the connection, release resources used
    curl_close($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // if( ! $http_code ){ throw new Exception('timeout'); } // On windows put this line on
    // do anything you want with your response
    // add the status code to the response
    $response = json_decode($response, true);
    // $response['status_code'] = $http_code;
    return $response;
}

// ##############################
try{
    $q = ['query' => 'FOR item IN items RETURN item'];
    $items = _db($q)['result']; // [{"_key":"77....]
    foreach($items as $item){ ?>
        <div>
            <div><?= $item['name'] ?></div>
            <div><?= $item['price'] ?></div>
        </div>
    <?php }
}catch(Exception $ex){
    http_response_code(500);
    echo $ex;
}

/*
try{
  $q = [
    'query'=>'FOR item IN items FILTER item._id==@item_key RETURN item',
    'bindVars'=>[
      'item_key'=>'items/'.$_POST['item_key']
    ]
  ];
  $res = _db($q);
  if( $res['error'] ){
    _respond($res['errorMessage'], 400);
  }
  if( ! $res['result'] ){
    _respond('Item not found', 400);
  }
  unset($res['result'][0]['_id']);
  unset($res['result'][0]['_rev']);
  _respond($res['result'][0]);
}catch(Exception $ex){
  _respond($ex, 500);
}
*/


