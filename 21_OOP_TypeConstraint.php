<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Dog
{
}

class Cat
{
}

function test(Dog $dog, array $arr, callable $f, array $array = null)
{
    var_dump($dog);
    var_dump($arr);
    $f();
}

test(new Dog(), array(1, 2, 3), function (){ echo 'hello'; }, null);