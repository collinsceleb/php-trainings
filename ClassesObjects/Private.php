<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person {
    const AVG_LIFE_SPAN = 79;
    private $firstName;
    private $lastName;
    private $yearBorn;
    
    # A constructor
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") {
       // echo "I'm in the constructor";
       echo "Person Constructor".PHP_EOL;
       $this->firstName = $tempFirst;
       $this->lastName = $tempLast;
       $this->yearBorn = $tempBorn;
    }
    
    # Getter method
    public function getFirstName() {
        return $this->firstName.PHP_EOL;
    }
    # Setter Method
    public function setFirstName() {
        $this->firstName = $tempName;
    }
    protected function getFullName() {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

class Author extends Person {
    private $penName = "Collinsceleb";
    public function getPenName() {
        return$this->penName.PHP_EOL;
    }
    public function getCompleteName() {
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }
}
$newAuthor = new Author("Collinsceleb", "Sylvester", 1899);
echo $newAuthor->getCompleteName();