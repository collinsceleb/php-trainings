<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa Da Alcot"];
// $authors = [];
$count = count($authors);
if ($count > 0) {
    echo "There is a total of ".$count." author(s).";
}
 else {
    echo "There are no authors";
}

