<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa Da Alcot"];
// $authors = [];
$count = count($authors);

switch ($count) {
    case 0:
        echo "There are no authors.".PHP_EOL;
        break;
    case 1:
        echo "There is only one author.".PHP_EOL;
        break;
    default:
        echo "There is a total of ".$count." authors.".PHP_EOL;
        break;
}
echo "\n";

# Spaceship operator
switch (5 <=> 7) {
    case 1:
        echo "Greater Than";
        break;
    case 0:
        echo "Equal";
    case -1:
        echo "Less Than";
    default:
        break;
}