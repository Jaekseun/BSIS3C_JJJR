<<<<<<< HEAD
<?php include PATH."partials/header.php" ?>

<div class="container">
  <form action="" method="POST" class="mt-5 w-50 mx-auto">
      <h2>Edit User</h2>

      <div class="mb-2">
          <label for="">First Name</label>
          <input name="firstname" value="<?= $user->firstname ?>" type="text" class="form-control">
      </div>
      <div class="mb-2">
          <label for="">Last Name</label>
          <input name="lastname" value="<?= $user->lastname ?>"  type="text" class="form-control">
      </div>
      <div class="mb-2">
          <label for="">Email</label>
          <input name="email" value="<?= $user->email ?>" type="email" class="form-control">
      </div>
      <div class="mb-2">
          <label for="">Password</label>
          <input name="password" value="<?= $user->password ?>" type="password" class="form-control">
      </div>

      <button type="submit" name="update" class="btn btn-primary">Update</button>
  </form>
</div>

<?php include PATH."partials/footer.php" ?>
=======
<?php include PATH . "partials/header.php" ?>

<div class="container">

    <form action="" method="POST" class="mt-5 w-50 mx-auto">
        <h2>Edit User</h2>

        <div class="mb-2">
            <label for="">First Name</label>
            <input name="firstname" value="<?= $user->firstname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Last Name</label>
            <input name="lastname" value="<?= $user->lastname ?>" type="text" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Email</label>
            <input name="email" value="<?= $user->email ?>" type="email" class="form-control">
        </div>
        <div class="mb-2">
            <label for="">Password</label>
            <input name="password" value="<?= $user->password ?>" type="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</div>

<?php include PATH . "partials/footer.php" ?>
>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
