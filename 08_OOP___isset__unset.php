<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 10:52 PM
 */

class Cat
{
    public $name;
    protected $food;
    private $gender;

    function __construct($name, $food, $gender)
    {
        $this -> name = $name;
        $this -> food = $food;
        $this -> gender = $gender;
    }

    function __isset($name)
    {
        return isset($this -> $name);
    }

    function __unset($name)
    {
        if (isset($this -> $name)) {
            unset($this -> $name);
        } else {
            echo 'not exists';
        }
    }
}

$cat1 = new Cat('mao', 'fish', 'male');
// to know, whether a property exists
//echo isset($cat1 -> food);
echo "\n";
unset($cat1 -> name); // name will be removed
var_dump($cat1);
echo "\n";
unset($cat1 -> sex);

