<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 11:34 PM
 */
class Sheep
{
    public $name;
    public $food;

    function __construct($name, $food)
    {
        $this -> name = $name;
        $this -> food = $food;
    }

    function __toString()
    {
        return 'To String '.$this -> name." ".$this -> food;
    }
}

$sheep = new Sheep('mie', 'grass');
echo $sheep;