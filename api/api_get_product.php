<?php

echo $_GET['id'];
exit();

// keys values assosiative
$product = [
  'id'    => 1,
  'name'  => 'A'
]; 
// Cannot echo arrays
echo json_encode($product);
?>