<?php

class Home extends Controller
{
public function index()
{
<<<<<<< HEAD
=======
    $user = new User();
    $rows = $user->findAll();
    show($rows);

>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
    $this->view('home');
}

}
<<<<<<< HEAD


=======
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
