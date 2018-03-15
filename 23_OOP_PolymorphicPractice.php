<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Animal
{
    public function cry($val)
    {
        echo 'shout';
    }
}

class Cat extends Animal
{
    public function cry($name)
    {
        echo "miao";
    }
}

$cat = new Cat();
$cat -> cry('jack');

class A
{
    private $num1 = 100;
    protected $num2 = 200;
    public $num3 = 300;

    public function show1()
    {
        echo $this -> num3;
    }

    public function show2()
    {
        echo $this -> num2;
    }

    public function show3()
    {
        echo $this -> num1;
    }
}

class B extends A
{
    private $num1 = 1;
    protected $num2 = 2;
    public $num3 = 3;

    public function show1()
    {
        echo $this -> num3;
        parent ::show1();
    }

    public function show2()
    {
        echo $this -> num2;
        parent ::show2();
    }

    public function show3()
    {
        echo $this -> num1;
        parent ::show3();
    }
}

echo "\n";
$b = new B();
$b -> show1();
echo "\n";
$b -> show2();
echo "\n";
$b -> show3();