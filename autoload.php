<?php 
// allows to call any class that we call
    spl_autoload_register(function($className){
        require_once("$className.php");
    });

?>