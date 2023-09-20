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

    <label for="">
      user last name mix <?= USER_LAST_NAME_MIN ?> max <?= USER_LAST_NAME_MAX ?>
    </label>    
    <input name="user_last_name" type="text"
    data-validate="str" data-min="<?= USER_LAST_NAME_MIN ?>" data-max="<?= USER_LAST_NAME_MAX ?>">

    <input name="user_email" type="text" 
    data-validate="email">


    <button>Signup</button>

  </form>
</main>

<?php require_once __DIR__.'/_footer.php'  ?>





