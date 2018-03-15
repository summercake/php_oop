<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

// base class
class Person
{
    public $name = 'jack';
    protected $age = 10;
    private $salary = 90.4;
}

class Student extends Person
{
    public $address = 'Houston';

    public function showInfo()
    {
        echo $this -> name." ".$this -> age." ".$this -> salary;
    }
}

$student = new Student;
var_dump($student);
echo "\n";
$student -> showInfo();
echo "\n";

class A
{
    // if sub class does not have constructor, sub class will use parent constructor
    public function __construct()
    {
        echo 'A constructor'."\n";
    }

    public function sayHello()
    {
        echo 'A say hello'."\n";
    }
}

class B extends A
{
    // if sub class has constructor, sub class will use self constructor
    public function __construct()
    {
        echo 'B constructor'."\n";
        $this -> sayHello();
        A ::sayHello();
        parent ::sayHello();
        //$this -> __construct(); // this will be recursion
        parent ::__construct();
    }

    //public function sayHello(){
    //    echo 'B say hello';
    //}
}

$b = new B();