<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Animal
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }
}

class Dog extends Animal
{
    public function showInfo()
    {
        echo $this -> name;
    }
}

class Cat extends Animal
{
    public function showInfo()
    {
        echo $this -> name;
    }
}

class Food
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }
}

class Fish extends Food
{
    public function showInfo()
    {
        echo $this -> name;
    }
}

class Bone extends Food
{
    public function showInfo()
    {
        echo $this -> name;
    }
}

class Master
{
    public $name;

    public function __construct($name)
    {
        $this -> name;
    }

    public function feed(Animal $animal, Food $food)
    {
        echo $animal -> showInfo();
        echo "\n";
        echo $food -> showInfo();
    }
}

$dog = new Dog('bark');
$cat = new Cat('miao');
$fish = new Fish('fish');
$bone = new Bone('bone');
$master = new Master('jack');
$master -> feed($dog, $bone);
$master -> feed($cat, $fish);
