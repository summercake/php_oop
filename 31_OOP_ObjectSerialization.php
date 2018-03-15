<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Dog
{
    public $name;
    protected $age;

    function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }
}

$dog = new Dog('mike', 19);
$str = 'hello doggy!!!!';
file_put_contents('C:\Users\jack\Desktop\ok.txt', $str);
file_put_contents('C:\Users\jack\Desktop\dog.txt', serialize($dog));
$dog_str = file_get_contents('C:\Users\jack\Desktop\dog.txt');
$dog_deserialize = unserialize($dog_str);
var_dump($dog_deserialize);


