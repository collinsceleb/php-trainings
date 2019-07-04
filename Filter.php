<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$str = "Hello World";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr.PHP_EOL;


$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid").PHP_EOL;
}
 else {
    echo ("Integer is not valid").PHP_EOL;
}



# filter_var() and problem with 0
$int = 0;
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid").PHP_EOL;
}
 else {
    echo ("Integer is not valid").PHP_EOL;
}
