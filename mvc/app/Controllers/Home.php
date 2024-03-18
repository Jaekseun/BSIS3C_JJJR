<?php

class Home extends Controller
{
    public function index()
    {
        $user = new User();
        $data = $user->findAll();
        show($data);

        $product = new Product();
        $data = $product->findAll();
        show($data);

        $this->view('home');
    }
}