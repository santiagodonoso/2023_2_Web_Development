<?php
session_start();
$title = $_SESSION['email'];
require_once __DIR__ . '/components/header.php';
if( ! $_SESSION ){
  header('Location: /login.php');
  exit();
}
?>

<h1>
  Hi <?= $_SESSION['email'] ?>
</h1>

<?php
require_once __DIR__ . '/components/footer.php';
?>

