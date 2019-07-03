<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Author extends Person {
    public static $centuryPopular = "19th";
    private $penName = "Collinsceleb";
    public function getPenName() {
        return$this->penName.PHP_EOL;
    }
    public function getCompleteName() {
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }

public static function getCenturyAuthorWasPopular() {
  //  return self::$centuryPopular;
    return parent::$firstMoney;
    }
}
