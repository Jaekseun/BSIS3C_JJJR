<?php

<<<<<<< HEAD
require 'functions.php';
require 'App.php';
=======
require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

spl_autoload_register(function ($class_name)
{
    require '../app/models/' . $class_name . '.php';
});
>>>>>>> 4ad4c6a907b7ef46749ca083ed726dda04f85c36
