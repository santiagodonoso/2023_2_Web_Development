<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?? 'Company' ?>
  </title>
  <style>
    .active{
      background-color: black;
      color: white;
    }
  </style>
</head>
<body>

  <nav>
    <a href="/"        class="<?= $active_link == 'index' ? 'active' : '' ; ?>">Home</a>
    <a href="/one.php" class="<?= $active_link == 'one' ? 'active' : '' ; ?>">One</a>
    <a href="/two.php" class="<?= $active_link == 'two' ? 'active' : '' ; ?>">Two</a>
  </nav>
  
