<?php 

    if (isset($_POST['submit'])) {

        if (!empty($_POST['nameUser']) && !empty($_POST['pseudoUser'])) {

            $update = Database::update($_POST['nameUser'], $_POST['pseudoUser'], $_GET['id']);
            header("Location: index.php?page=user");
            
        }
        else{
            
            echo "remplir les champs";

        }

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
    <form action="" method="post">
        <input type="text" name="nameUser" placeholder="nom">
        <input type="text" name="pseudoUser" placeholder="pseudo">
        <input type="submit" name="submit" value="Modifier">
    </form>
</body>
</html>