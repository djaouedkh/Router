<?php 

class Security{

    public static function inputNotEmpty($champs){

        if (isset($champs['submit'])) {

            foreach ($champs as $key => $value) {
                if ($value === '') {
                    $error = "fail";
                }
            }
            if (isset($error)) {
                return false;
            }
            else{
                return true;
            }

        }
    }
}

?>