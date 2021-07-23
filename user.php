<?php 

    $selectAllUsers = Database::selectAll();

    foreach ($selectAllUsers as $selectAllUsers) {

        echo $selectAllUsers['nameUser'] . $selectAllUsers['pseudoUser'] . "<a href='index.php?page=update&id=" . $selectAllUsers['idUser'] . "'>Modifier</a><a href='index.php?page=delete&id=" . $selectAllUsers['idUser'] . "'>Supprimer</a><br>";
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?page=add" method="post">
        <input type="text" placeholder= "Ton nom" name="nom">
        <input type="text" placeholder= "Ton pseudo" name="pseudo">
        <input type="submit" name="submit" value="Inscription">
    </form>

    <?php 
        if (isset($_GET['error'])) {
            echo $_GET['error'];
        }
    ?>
</body>
</html>