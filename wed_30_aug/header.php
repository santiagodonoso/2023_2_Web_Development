<?php
require_once __DIR__ . '/_.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/app.css">
  <script src="/app.js" defer></script>
  <title>
    <?= "Company : : $the_title" ?? 'My APP' ?>
  </title>
</head>
<body class="w-full h-full bg-gray-600 text-white">

  <nav class="flex w-full h-8 bg-sky-600 items-center gap-4 px-4">
    <a href="/">Home</a>
    <a href="/items" class="hidden sm:block">Items</a>
    <a href="/users" class="hidden sm:block">Users</a>
    <input type="text" class="mx-auto">
    <a href="/signup" class="">Signup</a>
    <a href="/login" class="">Login</a>
    <button>X</button>
  </nav>



  