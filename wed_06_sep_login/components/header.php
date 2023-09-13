<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app.css">
  <title>
    <?= $title ?? 'xxxxxxxxxxx' ?>
  </title>
</head>
<body class="w-full h-screen">
  
<nav class="flex gap-4 items-center h-12 px-4  bg-sky-600 text-white">
  <a href="/">Home</a>
  <a href="/admin.php">Admin</a>
  <a class="ml-auto" href="<?= $_SESSION ? '/logout.php' : '/login.php' ?>">
    <?= $_SESSION ? 'Logout' : 'Login' ?>
  </a>
</nav>

main