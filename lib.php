<?php

namespace MyLibrary;

class RandomPasswordGenerator
{
    public static function generate($length = 12)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
        $password = '';
        $maxIndex = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, $maxIndex)];
        }
        return $password;
    }
}


?>