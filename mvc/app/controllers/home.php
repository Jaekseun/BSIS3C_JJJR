<?php

class Home extends Controller
{
public function index()
{
    $model = new Model();
   
    $arr['lastname'] = 'Panasa';
    $arr2['firstname'] = 'Ryan Carlo';
    $data = $model->where($arr, $arr2);
    show($data);

    $this->view('home');
}

}


