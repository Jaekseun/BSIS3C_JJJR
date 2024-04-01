<?php include "partials/header.php"?>



<div class="container d-flex justify-content-center">
<form method="POST" class="mt-5 w-50">
<div class="mb-3">
    <label class="form-label">First Name</label>
    <input name="firstname" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Last Name</label>
    <input name="lastname" type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input name="email" type="email" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Password</label>
    <input name="password" type="password" class="form-control">
  </div>
  
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


<?php include "partials/footer.php"?>