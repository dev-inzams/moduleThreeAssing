<?php
function generatePassword($length) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randoms = rand(0, strlen($chars) - 1);
        $password .= $chars[$randoms];
    }

    return $password;
}


$password = generatePassword(12);


echo "Generated Password: $password\n";



?>