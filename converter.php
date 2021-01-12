<?php

header('Content-Type: text/html; charset=windows-1251');

$result = revertCharacters("Привет! Давно! Не виделись.");


function revertCharacters($string) {


    $strToArr = explode(" ", $string);
    $symbols = array("!", "?", ".");

    foreach ($strToArr as $str){
        foreach ($symbols as $symbol){
            $pos = strpos($str, $symbol);
            if ($pos) {
            $str = strstr("$str", "$symbol", true);
                break;
            }
            $symbol = false;
        }

        $string = strrev($str) . "$symbol" . " ";
        if(preg_match('/[А-Я]/', $string)){
            $string = ucfirst(mb_strtolower($string, 'windows-1251'));
        }

        echo $string;
    }
}
