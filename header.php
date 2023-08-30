<?php
require_once __DIR__ . '/_.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= "Company::$the_title" ?? 'My APP' ?>
  </title>
</head>
<body>

  <nav>
    <a href="/">Home</a>
    <a href="/items">Items</a>
    <a href="/users">Users</a>
  </nav>



  