<?php

if (!function_exists('generateRandomDigit')) {
    function generateRandomDigit($length = 15)
    {
        $characters = '0123456789559900468999988940';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; ++$i) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
