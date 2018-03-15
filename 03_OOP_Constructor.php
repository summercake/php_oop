<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 6:33 PM
 */
class Person
{
    public $name;
    public $age;

    // constructor don't have return value
    // only one constructor for one class
    // class has one default constructor if there is no self-defined constructor
    // the default access is public for constructor
    public function __construct($my_name, $my_age)
    {
        // $this: who call me, I'm whom
        $this -> name = $my_name;
        $this -> age = $my_age;
    }

    public function showInfo()
    {
        echo $this -> name." ".$this -> age."\n";
    }

    public function showThis()
    {
        var_dump($this);
    }
}

$person = new Person('jack', 20);
$person -> showInfo();

// "$this" is as same as "$person"
$person -> showThis();
var_dump($person);

class Cat{
    public $name;
    public $age;
    // This also is constructor; NOT RECOMMEND
    public function Cat($my_name, $my_age){
        $this->name = $my_name;
        $this->age = $my_age;
    }
    // echo class only can has one constructor
    //public function __construct(){}
    public function showInfo(){
        echo "\n".$this->name." ".$this->age;
    }
}
$cat = new Cat('mike', 10);
$cat ->showInfo();
var_dump($cat);
//$catNew = new Cat();
//$catNew-> name = 'mao';
//echo $catNew->name;
//var_dump($catNew);
//$catNew -> Cat('nancy', 18);
//var_dump($catNew);