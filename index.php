<?php 
    // call all the classes you want
    require('autoload.php');


    if (isset($_GET['page'])) {
        
        // send in parameter the desired page
        // the function will retrieve the page entered in parameters
        Routeur::route($_GET['page']);

    }
    // when the user arrives on the site
    else{
        
        require('home.php');

    }
    
?>