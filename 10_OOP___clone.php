<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 11:42 PM
 */
class sheep
{
    public $name;
    protected $food;

    function __construct($name, $food)
    {
        $this -> name = $name;
        $this -> food = $food;
    }

    function __clone()
    {
        echo "cloning";
    }
}

$sheep1 = new Sheep('mie', 'grass');
$sheep2 = new Sheep('mie', 'grass');
if ($sheep1 == $sheep2) {
    echo "same";
}
echo "\n";
if ($sheep1 === $sheep2) {
    echo "same";
} else {
    echo "not same";
}
echo "\n";
var_dump($sheep1, $sheep2);
echo "\n";
$sheep3 = $sheep1;
if ($sheep1 === $sheep3) {
    echo "same";
}
echo "\n";
$sheep4 = clone $sheep1;
echo "\n";
var_dump($sheep1, $sheep4);