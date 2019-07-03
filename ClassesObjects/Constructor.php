<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Person {
    const AVG_LIFE_SPAN = 79;
    public $firstName;
    public $lastName;
    public $yearBorn;
    
    # A constructor
    function __construct($tempFirst = "", $tempLast = "", $tempBorn = "") {
       // echo "I'm in the constructor";
       $this->firstName = $tempFirst;
       $this->lastName = $tempLast;
       $this->yearBorn = $tempBorn;
    }
    
    # Getter method
    public function getFirstName() {
        return $this->firstName;
    }
    # Setter Method
    public function setFirstName() {
        $this->firstName = $tempName;
    }
}
$myObject = new Person("Collinsceleb", "Sylvester", 1899);
echo $myObject->getFirstName();
