<?php
require_once __DIR__ . '/comp_header.php';

// TODO: Get products from the database

// multi dimansional array
$products = [
  [1, 'A'],
  [2, 'B'],
  [3, 'C']
]; 

?>

<h1>
  Products
</h1>

<?php foreach($products as $product): ?>
  <div class=''>
    <div><?= $product[0] ?></div>
    <div><?= $product[1] ?></div>
  </div>  
<?php endforeach; ?>






<?php
require_once __DIR__ . '/comp_footer.php';
?>