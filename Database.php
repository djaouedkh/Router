<?php 

class Database {

    private static function getPdo(){

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=routeur;charset=utf8", "root", "");
        }catch(PDOException $e) {
            echo "message:" . $e->getMessage();
        }
        return $pdo;

    }
    public static function selectAll(){
        
        $selectAllUsers = self::getPdo()->prepare("SELECT * FROM user");
        $selectAllUsers->execute();

        return $selectAllUsers->fetchAll();
    }

    public static function insert($nameUser, $pseudoUser){

        $insert = self::getPdo()->prepare("INSERT INTO user(nameUser, pseudoUser) VALUES(?, ?)");
        $insert->execute([$nameUser, $pseudoUser]);

    }

    public static function update($nameUser, $pseudoUser, $id){

        $update = self::getPdo()->prepare("UPDATE user SET nameUser = ?, pseudoUser = ? WHERE idUser = ?");
        $update->execute([$nameUser, $pseudoUser, $id]);

    }

    public static function delete($id){

        $delete = self::getPdo()->prepare("DELETE FROM user WHERE idUser = ?");
        $delete->execute([$id]);
        
    }

}

?>