<?php

$data = [
  'user_api_key' => 'YOUR_API_KEY_HERE',
  'sms_to_phone' => 'YOUR_MOBILE_NUMBER_HERE',
  'sms_message' => 'YOUR_MESSAGE_HERE',
];

$curl = curl_init('https://fiotext.com/send-sms');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);
echo $response;














