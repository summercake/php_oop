<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Student
{
    public $name;
    private $school;

    public function setSchool($school)
    {
        $this -> school = $school;
    }

    public function getSchool()
    {
        return $this -> school;
    }
}

class School
{
    public $name;
    protected $address;
    private $my_class;

    public function setClass($class)
    {
        $this -> my_class = $class;
    }

    public function getClass()
    {
        return $this -> my_class;
    }
}

class MyClass
{
    public $name;
    public $class_num;
}

$my_class = new MyClass();
$my_class -> name = 'php';
$my_class -> class_num = 100;
$school = new School();
$school -> setClass($my_class);
$student = new Student();
$student -> name = 'jack';
$student -> setSchool($school);
// objects reference
echo $student -> getSchool() -> getClass() -> name;



