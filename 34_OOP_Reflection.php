<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Dog
{
    const TAX = 0.08;
    public $name;
    public $age;
    public $food;

    public function __construct($name, $age, $food)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> food = $food;
    }

    public function cry()
    {
        echo $this -> name.", ".$this -> age.", ".$this -> food;
    }
}

$dog = new Dog('mike', 9, 'bone');
$dog -> cry();
ReflectionClass ::export('Dog');
// 1. get class
$dog_reflection_class = new ReflectionClass('Dog');
// 2. create class instance
$dog_ref = $dog_reflection_class -> newInstance('jack', 10, 'bone');
// 3. get class methods or properties
$dog_cry_method = $dog_reflection_class -> getMethod('cry');
// 4. invoke
$dog_cry_method -> invoke($dog_ref, null);





