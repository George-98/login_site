<?php

spl_autoload_register(function($class) {
    if(file_exists('classes/' . str_replace('\\', '/', $class) . '.php')){
        include 'classes/' . str_replace('\\', '/', $class) . '.php';
    }
    else if(file_exists('controllers/' . str_replace('\\', '/', $class) . '.php')){
        include 'controllers/' . str_replace('\\', '/', $class) . '.php';
    }
});

require_once('./Routes.php');





