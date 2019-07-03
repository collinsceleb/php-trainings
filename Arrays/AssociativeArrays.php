<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$numbers = array(
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4
);

print_r($numbers);

$authors = array(
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespeare"
);
foreach ($authors as $key =>$val) {
    echo $val. "(".$key.") \n";
}

