<?php include PATH."partials/header.php"?>

<div class="container">
    <form action="" method="POST" class="mt-5 w-50 mx=auto">
        <h2>CREATE USER</h2>
        <div class="mb-2">
            <label for="firstname">FirstName</label>
            <input name ="firstname" type ="text" class ="form-control">
        </div>
        <div class="mb-2">
            <label for="lastname">LastName</label>
            <input name ="lastname" type ="text" class ="form-control">
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input name ="email" type ="text" class ="form-control">
        </div>
        <div class="mb-2">
            <label for="password">Password</label>
            <input name ="password" type ="text" class ="form-control">
        </div>
        <button type = "submit" name = "create" class = "bt-info">Create</button>
        
    </form>
</div>

<?php include PATH."partials/footer.php"?>