<?php
$title = 'Login';
require_once __DIR__ . '/components/header.php';
?>

<form action="bridge-login.php" method="POST">
  <input name="email" type="text" placeholder="email">
  <input name="password" type="password" placeholder="password">
  <button>Login</button>
</form>

<?php
require_once __DIR__ . '/components/footer.php';
?>