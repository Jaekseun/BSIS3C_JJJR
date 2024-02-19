<?php

class App
{
    protected $controller = 'Home';
    public function __construct()
    {
        $url = $this->splitURL();
        
        if (isset($url[0])) {

            if (file_exist('../app/controllers/'  .ucfirst($url[0]) . '.php')){

                $this->controller = ucfirst($url[0]);

            }
        }
    }

    private function splitURL()
{
    if (isset($_GET['url'])){

        $url = explode ("/", trim($_GET['url'], "/"));
    }
}
}  