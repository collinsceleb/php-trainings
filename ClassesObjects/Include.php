<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'Person.php';
include 'Author.php';

$newAuthor = new Author("Collinsceleb", "Sylvester", 1899);
echo $newAuthor->getCompleteName();

