<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 9:31 PM
 */

// __destructor is used for releasing object resources in the memory, such as db connection
class Person{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function __destruct()
    {
        echo "\nThis is destructor!!!";
        echo "\nThe object has been destructed!!!";
    }
}

// last created, first destruct
$person1 = new Person("jack"); // last destruct
$person1 = null; // as similar as destruct. It can improve code performance -
$person2 = new Person("mike"); // first destruct
$person3 = new Person("john"); // first destruct
$person4 = new Person("joe"); // first destruct

