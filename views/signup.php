<?php 
require_once __DIR__.'/../_.php';
require_once __DIR__.'/_header.php';  
?>

<main>
  <form onsubmit="validate(signup); return false" 
  class="flex flex-col px-4 text-white">

    <label for="user_name">
      user name mix <?= USER_NAME_MIN ?> max <?= USER_NAME_MAX ?>
    </label>
    <input id="user_name" name="user_name" type="text"
    data-validate="str" data-min="<?= USER_NAME_MIN ?>" data-max="<?= USER_NAME_MAX ?>"
    class="outline-none">

    <label for="user_last_name">
      user last name mix <?= USER_LAST_NAME_MIN ?> max <?= USER_LAST_NAME_MAX ?>
    </label>    
    <input id="user_last_name" name="user_last_name" type="text"
    data-validate="str" data-min="<?= USER_LAST_NAME_MIN ?>" data-max="<?= USER_LAST_NAME_MAX ?>"
    class="outline-none">

    <label for="">
      email
    </label>    
    <input name="user_email" type="text" 
    data-validate="email">

    <label for="">
      user password mix <?= USER_PASSWORD_MIN ?> max <?= USER_PASSWORD_MAX ?>
    </label>    
    <input name="user_password" type="text"
    data-validate="str" data-min="<?= USER_PASSWORD_MIN ?>" data-max="<?= USER_PASSWORD_MAX ?>"
    class="outline-none">

    <label for="">
      user confirm password
    </label>    
    <input name="user_confirm_password" type="text"
    data-validate="match" data-match-name="user_password"
    class="outline-none">



    <button>Signup</button>

  </form>
</main>

<?php require_once __DIR__.'/_footer.php'  ?>





