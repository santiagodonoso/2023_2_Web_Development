<?php
$the_title = 'Home';
require_once __DIR__ . '/header.php';
?>

<form>
  <label for="">
    Item name min <?= ITEM_NAME_MIN_LEN ?> max <?= ITEM_NAME_MAX_LEN ?>
  </label>
  <input type="text">
</form>

<?php
require_once __DIR__ . '/footer.php';
?>

