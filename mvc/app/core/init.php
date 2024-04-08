<?php

<<<<<<< HEAD
require 'config.php';
=======
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

<<<<<<< HEAD
spl_autoload_register(function ($class_name)
{
    require '../app/models/' . $class_name . '.php';
=======

spl_autoload_register(function ($class_name) 
{

    require '../app/models/' . $class_name . '.php';
    
>>>>>>> 23f6356c2bd39da251b78c9df2463a13e2522941
});