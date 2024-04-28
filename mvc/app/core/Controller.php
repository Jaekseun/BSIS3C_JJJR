<?php

class Controller
{
<<<<<<< HEAD
    public function view($name, $data = [])
    {
        if (!empty($data)){
            extract($data);
        }
        if (file_exists('../app/views/' . $name . '.php' ))
        {
            require '../app/views/' . $name . ".php";
        } else{
            require '../app/views/404.php';
        }
    }
}
=======
  public function view($name, $data = [])
  {
    if (!empty($data)) {
      extract($data);
    }

    if (file_exists('../app/views/' . $name . '.php')) {

      require '../app/views/' . $name . '.php';
    } else {

      require '../app/views/404.php';
    }
  }
}
>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
