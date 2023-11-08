<?php
// ##############################
function _db($query, $type='cursor'){
    $ch = curl_init("http://localhost:8529/_api/$type");
    curl_setopt($ch, CURLOPT_TIMEOUT, 2); //timeout in seconds
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Do not output the response automatically on exec
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
function delete_item(){
    try{
        $q = [
            'query' => 'REMOVE @item_id IN items RETURN OLD',
            'bindVars' => [
                'item_id' => $_POST['id']
            ]
        ];
        $res = _db($q)['result'];
        echo json_encode($res);
        exit();
    }catch(Exception $ex){
        http_response_code(500);
        echo $ex;
    }    
}


// ##############################
if(isset($_POST['id'])){ delete_item(); }

// ##############################
try{
    $q = ['query' => 'FOR item IN items RETURN item'];
    $items = _db($q)['result']; // [{"_key":"77....]
    foreach($items as $item){ ?>
        <form method="POST">
            <input name="id" type="text" value="<?= $item['_key'] ?>">
            <div><?= $item['name'] ?></div>
            <div><?= $item['price'] ?></div>
            <button>Delete</button>
        </form>
    <?php }
}catch(Exception $ex){
    http_response_code(500);
    echo $ex;
}


