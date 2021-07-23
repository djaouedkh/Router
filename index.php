<?php 

    require('autoload.php');

    if (isset($_GET['page'])) {

        Routeur::route($_GET['page']);

    }
    else{

        require('home.php');

    }
    
?>