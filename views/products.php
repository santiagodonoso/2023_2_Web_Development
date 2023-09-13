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
    <a href="/api/products/<?= $product[0] ?>" onclick="get_product(<?= $product[0] ?>); return false"><?= $product[1] ?></a>
  </div>  
<?php endforeach; ?>


<div class="w-full h-20 bg-sky-300">


</div>




<?php
require_once __DIR__ . '/comp_footer.php';
?>