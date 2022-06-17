<?php
function hashPassword($password, $login){

    $char = ['a', 'C', '8', '0', 'B', '7', '9', '2', '$', 'e', 'b', 'd', '4', '1', '5', '_', 'A', 'F', '6'];
    $trainingList = ['burpee', 'pushup', 'dips', 'pullup', 'cardio', 'footing', 'crunch', 'battlerope', 'biceps', 'squat', 'triceps', 'quadriceps'];

    $lengthPassword = strlen($password);
    $number = ceil(intval($lengthPassword) * 2.834);
    $number2 = floor(intval($lengthPassword) * 1.23);

    if($number > 50)
        $number = 26;

    if($number2 > 50)
        $number2 = 24;

    $password2 = $password . "J";
    $sha1 = sha1($password2);

    $password3 = $login . "w";
    $md5 = md5($password3) . $number;

    $sha512 = hash('sha512', $password);
    $str_salt1 = substr_replace($sha512, $password[0], 1, 0);
    $str_salt2 = substr_replace($str_salt1, '8', 4, 0);
    $str = $str_salt2 . 'e';

    for($i = 0 ; $i < $number ; $i++){
        $j = $i % count($char);
        $str = substr_replace($str, $char[$j], ($i * 4), 0);
    }

    $str[intval($number2)] = "+";

    $lengthStr = strlen($str);

    $str[intval($lengthStr - 6)] = "*";

    $str = $sha1 . substr_replace($str, $trainingList[$number2 % count($trainingList)], ($number * 2), 0) . $md5;
    

    return $str;
}