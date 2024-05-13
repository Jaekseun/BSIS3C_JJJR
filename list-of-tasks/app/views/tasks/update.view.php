<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Edit Task</h2>
    <?php
    if ($users != null) { ?>
    
    <?php
        foreach ($users as $item) {
    ?>
    
    <div class="mb-2">
      <label for="">First Name</label>
      <input name="task_name" type="text" class="form-control" value="<?=$item->task_name ?>">
    </div>

    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="task_description" type="text" class="form-control" value="<?=$item->task_description ?>">
    </div>

    <div class="mb-2">
      <label for="">Status</label>
      <select name="task_status" class="form-select" aria-label="Default select example">
        <option value="Pending">Pending</option>
        <option value="In Progress">In Progress</option>
        <option value="Late">Late</option>
        <option value="Completed">Completed</option>
      </select>
    </div>

    <div class="mb-2">
      <label for="">Date Due</label>
      <?php
       $formatDate = date('Y-m-d\TH:i', strtotime($item->task_due));
      ?>
      <input name="task_due" type="datetime-local" class="form-control" value="<?= $formatDate ?>">
    </div>

    <button name="update" type="submit" class="btn btn-primary">update</button>
    <a href="<?=ROOT?>/tasks" class="btn btn-danger">back</a>
    <input type="hidden" name="id" value="<?=$item->id ?>">
        <?php } ?>
    <?php } ?>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>