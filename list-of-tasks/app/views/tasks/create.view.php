<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Task</h2>

    <div class="mb-2">
      <label for="">Name</label>
      <input name="task_name" type="text" class="form-control">
    </div>

    <div class="mb-2">
      <label for="">Description</label>
      <input name="task_description" type="text" class="form-control">
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
      <input name="task_due" type="datetime-local" class="form-control">
    </div>

    <button name="create" type="submit" class="btn btn-primary">Create</button>
    <a href="<?=ROOT?>/tasks" class="btn btn-danger">back</a>

  </form>
</div>

<?php include PATH . "partials/footer.php" ?>