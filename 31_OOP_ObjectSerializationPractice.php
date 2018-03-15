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
    public $age;
    public $school;

    public function __construct($name, $age, $school)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> school = $school;
    }
}

class College
{
    public $name;
    public $address;

    public function __construct($name, $address)
    {
        $this -> name = $name;
        $this -> address = $address;
    }
}

$college = new College('good college', 'houston');
$student = new Student('jack', 18, $college);
file_put_contents('C:\Users\jack\Desktop\student.txt', serialize($student));
$student_str = file_get_contents('C:\Users\jack\Desktop\student.txt');
$student_deserialize = unserialize($student_str);
var_dump($student_deserialize);