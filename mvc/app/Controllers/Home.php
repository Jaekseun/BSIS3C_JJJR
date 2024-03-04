<?php

class Home extends Controller
{
    public function index()
    {
        $model = new Model();
        $arr['firstname'] = 'Marvic Joshua';
        $arr2['lastname'] = 'Santos';
        $data =$model->where($arr, $arr2);
        show($data);
        $this->view('home');
    }
}