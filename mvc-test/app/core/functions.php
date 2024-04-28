<?php

function show($stuff)
{
<<<<<<< HEAD
    echo '<pre>';
    print_r($stuff);
    echo '</pre>';
}

function redirect($path){
    header("Location: " .ROOT."/".$path);
=======
  echo '<pre>';
  print_r($stuff);
  echo '</pre>';
}

function redirect($path) {
  header("Location: " . ROOT . "/" . $path );
>>>>>>> 38a97c18948225b0a25081d55c550a321981eeaa
}