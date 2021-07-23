<?php 

class Security{

    // general function that checks that the inputs are fulfilled
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