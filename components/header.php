<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?? 'xxxxxxxxxxx' ?>
  </title>
</head>
<body>
  
<nav>
  <a href="/">Home</a>
  <a href="/admin.php">Admin</a>


  <a href="<?= $_SESSION ? '/logout.php' : '/login.php' ?>">
    <?= $_SESSION ? 'Logout' : 'Login' ?>
  </a>



</nav>