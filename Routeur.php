<?php 

class Routeur{

    public static function route($route){

        if ($_GET['page'] === "add") {

            if (Security::inputNotEmpty($_POST)) {
                $insert = Database::insert($_POST["nom"], $_POST["pseudo"]);
                header("Location: index.php?page=user");
            }
            else{
                $error = "remplir les champs";
                header("Location: index.php?page=user&error=" . $error . "");                
            }

        }
        else if ($_GET['page'] === "delete") {
            $delete = Database::delete($_GET['id']);
            header("Location: index.php?page=user");
        }
        else if ($_GET['page'] === $route) {
            require($route . '.php');
        }

    }

}

?>