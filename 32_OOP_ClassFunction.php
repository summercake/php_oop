<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Car
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this -> name = $name;
        $this -> price = $price;
    }

    function run()
    {
        echo $this -> name.", ".$this -> price;
    }
}

// class_exits()
if (class_exists('Car')) {
    $car = new Car('BMW', 80);
    // method_exists()
    if (method_exists('Car', 'run')) {
        $car -> run();
    } else {
        echo 'method not exists!!!';
    }
    echo "\n";
    // property_exists()
    if (property_exists('Car', 'name')) {
        echo $car -> name;
    } else {
        echo 'property not exists';
    }
    echo "\n";
    // get_class()
    echo 'current class name is '.get_class($car);
} else {
    echo 'class not exists!!!';
}

