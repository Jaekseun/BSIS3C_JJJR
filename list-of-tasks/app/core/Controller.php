<?php

class Controller
{
  public function view($name, $data = [])
  {
    if (!empty($data)) {
      extract($data);
    }

    if (file_exists('../app/views/' . $name . '.view.php')) {

      require '../app/views/' . $name . '.view.php';
    } else {

      require '../app/views/404.view.php';
    }
  }
}