<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Person
{
    public $name;
    public $age;
    public static $cake_num = 1000;

    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function eat($n)
    {
        self ::$cake_num -= $n;
    }

    public function showCake()
    {
        echo "There are ".self ::$cake_num." cakes";
    }
}

$monk = new Person("monk", 90);
$monkey_king = new Person("monkey_king", 500);
$pig = new Person("pig", 500);
$sha = new Person("sha", 500);
for ($i = 1; $i < 3; $i++) {
    $monk -> eat(3);
    $monkey_king -> eat(5);
    $sha -> eat(9);
    $pig -> eat(30);
}
echo Person ::$cake_num;