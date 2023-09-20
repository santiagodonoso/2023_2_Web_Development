<?php 
require_once __DIR__.'/../_.php';
require_once __DIR__.'/_header.php';  
?>

<main>
  <form onsubmit="validate(signup); return false">
    <label for="">
      user name mix <?= USER_NAME_MIN ?> max 2
    </label>
    <input name="user_name" type="text"
    data-validate="str" data-min="1" data-max="2">
    <button>Signup</button>
  </form>
</main>

<?php require_once __DIR__.'/_footer.php'  ?>





