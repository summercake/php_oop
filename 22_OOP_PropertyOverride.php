<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Person
{
    public $name = 'mike';
    protected $age = 20;
    private $salary = 90;
}

class Student extends Person
{
    public $name = 'jack';
    protected $age = 19;
    private $salary = 78;

    public function showInfo()
    {
        echo $this -> name;
        echo "\n";
        echo $this -> age;
        echo "\n";
        echo $this -> salary;
    }
}

$student = new Student();
$student -> showInfo();