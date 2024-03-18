<?php

class Home extends Controller
{
public function index()
{
    $user = new User();
    $rows = $user->findAll();
    show($rows);

    $this->view('home');
}

}
