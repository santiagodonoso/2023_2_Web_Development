<?php
  if( $_POST ){ signup(); }

  function signup(){
    if( ! isset( $_POST['user_name'] ) ){ return; }
    if( strlen($_POST['user_name']) < 2 ){ return; }

    if( ! isset( $_POST['user_last_name'] ) ){ return; }
    if( strlen($_POST['user_last_name']) < 2 ){ return; }
    
    
    // TODO: SUCCESS - Take user to login
    echo 'SUCCESS';
    exit();
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="/signup.php" method="POST">
    <input name="user_name" type="text" placeholder="name" 
    value="<?= $_POST['user_name'] ?>"
    data-validate="str" data-min="2" data-max="5">
    
    <input name="user_last_name" type="text" placeholder="last name"
    value="<?= $_POST['user_last_name'] ?>"
    data-validate="str" data-min="2" data-max="5">

    <input name="user_email" type="text" placeholder="email"
    data-validate="email">

    <input name="user_password" type="text" placeholder="password"
    data-validate="str" data-min="2" data-max="5">

    <input name="user_confirm_password" type="text" placeholder="confirm password"
    data-validate="match" data-match-name="user_password">

    <button>Signup</button>

  </form>

  <script src="/js/app.js"></script>
  <script src="/js/validator.js"></script>

</body>
</html>