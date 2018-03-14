<?php

/**
 * Class Pokemon
 */
class Pokemon {
    protected $name;
    public $energyType;
    public $hitPoints;
    public $attacks;
    public $weakness;
    public $ressitance;


    public function __construct($name){
        $this->name = $name;
    }

    public function attack() {

    }

}
