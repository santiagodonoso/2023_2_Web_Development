<?php
$lg = $lg ?? 'en' ;
$dictionary = file_get_contents(__DIR__.'/../dictionary.json');
$dictionary = json_decode($dictionary, true); // convert text into object
// var_dump($dictionary); // string(77) "[ "home_en" => "home", "home_dk" => "hjem", "home_sp" => "Inicio" ]" 
// print_r($dictionary); // [ "home_en" => "home", "home_dk" => "hjem", "home_sp" => "Inicio" ] 
// echo $dictionary['home_en'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>
    <?= $dictionary['home_'.$lg] ?>
  </h1>
  <p>
    <?= $dictionary['welcome_'.$lg] ?>
  </p>
</body>
</html>