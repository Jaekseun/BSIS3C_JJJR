<<<<<<< HEAD
<?php include PATH . "partials/header.php"; ?>

<div class="container">
  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Users</h2>
=======
<?php include PATH . "partials/header.php" ?>

<div class="container">

  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Users</h2>

>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
    <a href="<?= ROOT ?>/users/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped mt-3">
<<<<<<< HEAD
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user) { ?>
        <tr>
          <td><?= $user->firstname ?></td>
          <td><?= $user->lastname ?></td>
          <td><?= $user->email ?></td>
          <td>
            <a href="<?=ROOT?>/users/edit/<?= $user->ID?>" class="btn btn-success btn-sm">Edit</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<?php include PATH . "partials/footer.php"; ?>
=======
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th></th>
    </tr>
    <?php if ($users != null) { ?>
      <?php foreach ($users as $item) { ?>
        <tr>
          <td><?= $item->firstname ?></td>
          <td><?= $item->lastname ?></td>
          <td><?= $item->email ?></td>
          <td>
            <a href="<?= ROOT ?>/users/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/users/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h3>No record found.</h3>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>

<?php include PATH . "partials/footer.php" ?>
>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
