<<<<<<< HEAD
=======
<?php

require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Controller.php';
require 'Model.php';
require 'App.php';

spl_autoload_register(function ($class_name) {

  require '../app/models/' . $class_name . '.php';
});
>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
