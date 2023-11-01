
<?php require_once __DIR__.'/_header.php' ?>

<main class="">

  <div>
    <?= $_lan['name'] ?>
  </div>

  <form onsubmit="validate(signup); return false">
    <input type="text" data-validate="str" 
    data-min="<?= USER_NAME_MIN ?>" data-max="<?= USER_NAME_MAX ?>">
    <button>
      Signup
    </button>
  </form>
</main>

<?php require_once __DIR__.'/_footer.php' ?>

