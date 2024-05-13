<?php include PATH . "partials/header.php" ?>


<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">
    <h2>List Of Tasks</h2>
    <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">Add New</a>
  </div>

  <table class="table table-striped table-bordered mt-3">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th>Status</th>
      <th>Date Due</th>
      <th>Action</th>
    </tr>
    <?php if ($users != null) { ?>
      <?php foreach ($users as $item) { ?>
        <tr>
          <td><?= $item->id ?></td>
          <td><?= $item->task_name ?></td>
          <td><?= $item->task_description ?></td>
          <td><?= $item->task_status ?></td>
          <td><?= date('l, F j, Y h:i A', strtotime($item->task_due)) ?></td>
          <!-- edit -->
          <td class="d-flex">
            <form action="<?= ROOT ?>/tasks/update" method="post" class="me-2">
              <button type="submit" class="btn btn-primary" name="btnedit">edit</button>
              <input type="hidden" name="editid" value="<?= $item->id ?>">
              <input type="hidden" value="<?= $item->task_name ?>">
              <input type="hidden" value="<?= $item->task_description ?>">
              <input type="hidden" value="<?= $item->task_status ?>">
              <input type="hidden" value="<?= date('Y-m-d\TH:i', strtotime($item->task_due)) ?>">
            </form>

            <form action="<?= ROOT ?>/tasks/delete" method="post" class="me-2">
              <button type="submit" class="btn btn-danger" name="delete">remove</button>
              <input type="hidden" name="deleteid" value="<?= $item->id ?>">
            </form>
          </td>

        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h2>No record found.</h2>
        </td>
      </tr>
    <?php } ?>
  </table>

</div>


<?php include PATH . "partials/footer.php" ?>