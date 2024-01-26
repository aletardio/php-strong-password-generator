<?php 

    function generateRandomPassword($length){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
        $random_characters = str_shuffle($characters);
        return substr($random_characters, 0, $length);
    }

?>
