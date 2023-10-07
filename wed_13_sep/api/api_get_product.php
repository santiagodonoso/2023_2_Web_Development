<?php

// keys values assosiative
$product = [
  'id'    => $_GET['id'],
  'name'  => 'A'
]; 
// Cannot echo arrays
echo json_encode($product);
?>