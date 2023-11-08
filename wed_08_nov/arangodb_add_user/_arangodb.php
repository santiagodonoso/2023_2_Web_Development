<?php
function _db($query, $type = 'cursor')
{
    $ch = curl_init("http://localhost:8529/_api/$type");
    curl_setopt($ch, CURLOPT_TIMEOUT, 2); //timeout in seconds
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Do not output the response automatically on exec
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    // execute!
    $response = curl_exec($ch);
    // close the connection, release resources used
    curl_close($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // if( ! $http_code ){ throw new Exception('timeout'); } // WINDOWS SET THIS LINE ON
    // do anything you want with your response
    // add the status code to the response
    $response = json_decode($response, true);
    // $response['status_code'] = $http_code;
    return $response;
}
