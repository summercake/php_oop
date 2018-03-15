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
    private $lover;

    public function __construct($name, $age, $lover)
    {
        $this -> name = $name;
        $this -> age = $age;
        $this -> lover = $lover;
    }

    protected function cry()
    {
        echo "bark bark!!!!";
    }

    public function __toString()
    {
        $reflect_class = new ReflectionClass($this);
        var_dump($reflect_class);
        echo $reflect_class -> getName();
        $property_list = $reflect_class -> getProperties();
        print_r($property_list);
        $method_list = $reflect_class -> getMethods();
        print_r($method_list);
        echo $property_list[0] -> getValue($this);
        return '';
    }
}

$dog = new Dog('joe', 18, 'macy');
echo $dog;
