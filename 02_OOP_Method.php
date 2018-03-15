<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 6:17 PM
 */

/*
 * Method
 */

class Person
{
    public $name;
    public $age;

    public function speak()
    {
        echo "I'm a good boy";
    }

    public function calculate()
    {
        $res = 0;
        for ($i = 0; $i <= 1000; $i++) {
            $res += $i;
        }
        echo "\n the result is ".$res;
    }

    public function calculateN($n)
    {
        $res = 0;
        for ($i = 0; $i <= $n; $i++) {
            $res += $i;
        }
        echo "\n the result is ".$res;
    }

    public function add($n1, $n2)
    {
        echo "\n".($n1 + $n2);
    }
}

$person = new Person();
$person -> speak();
$person -> name = 'jack';
$person -> calculate();
$person -> calculateN(100);
$person -> add(10, 20);