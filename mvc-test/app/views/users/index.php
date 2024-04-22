<?php include PATH . "partials/header.php"; ?>

<div class="container">
  <div class="mt-5 d-flex justify-content-between align-items-center">
    <h2>List of Users</h2>
    <a href="<?= ROOT ?>/users/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped mt-3">
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