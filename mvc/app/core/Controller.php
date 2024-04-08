<?php

class Controller
{
<<<<<<< HEAD
public function view($name, $data = [])
{
    if(!empty($data))
    {
        extract($data);
    }

    if (file_exists('../app/views/' . $name . '.php')){

        require '../app/views/' . $name . '.php';
    } else{

        require '../app/views/404.php';
    }
}
}
=======
public function view($name)
{
    if(file_exists('../app/views/'. $name.'.php'))
    {    
    require '../app/views/'. $name.'.php';
    }

    else 
    {
    require '../app/views/404.php';
    }
}

}
 
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
