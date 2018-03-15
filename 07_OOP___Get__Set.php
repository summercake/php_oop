<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 10:23 PM
 */
class Monkey
{
    public $name;
    protected $food;

    function __construct($name, $food)
    {
        $this -> name = $name;
        $this -> food = $food;
    }

    function sayHello()
    {
        echo 'Hello, my name is '.$this -> name.'. I love eat '.$this -> food;
    }

    // if __get() exists in a class, the protected and private properties can be accessed outside this class.
    function __get($name)
    {
        if (isset($this -> $name)) {
            echo '$name is '.$name;
        }
    }

    // if __set() exists in a class, the protected and private properties can be assigned value outside this class.
    function __set($name, $value)
    {
        if (isset($this -> $name)) {
            $this -> $name = $value;
        } else {
            echo 'property does not exist';
        }
    }
}

$monkey = new Monkey('mad', 'peach');
$monkey -> sayHello();
echo "\n";
echo $monkey -> food;
$monkey -> food = 'kids';
echo "\n";
echo $monkey -> sayHello();
echo "\n";
$monkey -> gender = "female";