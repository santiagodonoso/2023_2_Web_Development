<?php 
// Validate
// ini_set("display_errors", 1);

if( ! isset($_POST["name"])){
  http_response_code(400);
  echo json_encode(["error" => "name is missing"]);
  exit();
}
// trim it... remove empty left and right spaces
$_POST["name"] = trim($_POST["name"]);


if( strlen(  $_POST["name"]  ) < 2 ){
  http_response_code(400);
  echo json_encode(["error" => "name min 2 characters"]);
  exit();
}
if( strlen(  $_POST["name"]  ) > 20 ){
  http_response_code(400);
  echo json_encode(["error" => "name max 20 characters"]);
  exit();
}

if( ! isset($_POST["last_name"])){
  http_response_code(400);
  echo json_encode(["error" => "last_name is missing"]);
  exit();
}
$_POST["last_name"] = trim($_POST["last_name"]);

if( strlen(  $_POST["last_name"]  ) < 2 ){
  http_response_code(400);
  echo json_encode(["error" => "last_name min 2 characters"]);
  exit();
}
if( strlen(  $_POST["last_name"]  ) > 20 ){
  http_response_code(400);
  echo json_encode(["error" => "last_name max 20 characters"]);
  exit();
}

// Age min 18 max 100
if( ! isset($_POST["age"])){
  http_response_code(400);
  echo json_encode(["error" => "age is missing"]);
  exit();
}
$_POST["age"] = trim($_POST["age"]);

if( ! preg_match( "/^(1[8-9]|[2-9][0-9]|100)$/",  $_POST["age"] ) ){
  echo json_encode(["error" => "age min 18 mx 100"]);
  exit();
}




// Connect to the database
// Send data back to the client
$user = [
  "id" => bin2hex(random_bytes(5)),
  "name" => $_POST["name"],
  "last_name" => $_POST["last_name"],
  "age" => $_POST["age"]
];

echo json_encode($user);
?>