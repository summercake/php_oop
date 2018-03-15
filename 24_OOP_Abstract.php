<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

// abstract class
abstract class Animal
{
    public $name = 'jack';
    const TAX_RATE = 0.08;
    public static $total_num = 10;

    // abstract method
    abstract function cry();

    // normal method
    function show()
    {
        echo "non abstract";
    }

    function __construct()
    {
        echo 'abstract constructor';
    }
}

// abstract class can not be instantiated.
//$animal = new Animal();
class Dog extends Animal
{
    function cry()
    {
        echo "bark";
    }
}

$dog = new Dog();
echo "\n";
$dog -> cry();
echo "\n";
$dog -> show();

// if sub class also is abstract class, those abstract methods of parent abstract class do not need to be implemented in sub abstract class
abstract class Cat extends Animal{
    abstract function eat($food);
}

// no matter how much parent abstract class have, all abstract function must be implemented in sub non abstract class.
class Fish extends Cat{
    function cry()
    {
        // TODO: Implement cry() method.
    }

    function eat($food)
    {
        // TODO: Implement eat() method.
    }
}