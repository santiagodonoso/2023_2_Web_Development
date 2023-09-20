<?php 
require_once __DIR__.'/../_.php';
require_once __DIR__.'/_header.php';  
?>

<main>
  <form onsubmit="validate(signup); return false">
    <label for="">
      user name mix <?= USER_NAME_MIN ?> max <?= USER_NAME_MAX ?>
    </label>
    <input name="user_name" type="text"
    data-validate="str" data-min="<?= USER_NAME_MIN ?>" data-max="<?= USER_NAME_MAX ?>">
    <button>Signup</button>
  </form>
</main>

<?php require_once __DIR__.'/_footer.php'  ?>





