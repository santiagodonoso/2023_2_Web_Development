<?php
require_once __DIR__ . '/_.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APP</title>
</head>
<body>
  <form>
    <label for="">
      Item name min <?= ITEM_NAME_MIN_LEN ?> max <?= ITEM_NAME_MAX_LEN ?>
    </label>
    <input type="text">
  </form>
</body>
</html>