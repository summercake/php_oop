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
    public static $total_num = 10;

    public function cry()
    {
        echo "shout";
    }
}

class Cat extends Animal
{
    public function cry()
    {
        echo "miao";
        echo "\n";
        parent ::cry();
        echo "\n";
        Animal ::cry();
        echo "\n";
        echo parent::$total_num;
    }
}

$cat = new Cat();
$cat -> cry();