<?php


/*
 * Property
 */
class Person{
    public $name;
    public $age;
}
$person1 = new Person();
$person1->name = 'jack';
$person2 = $person1;
$person2->name = 'mike';
echo '$person1->name=' . $person1->name; // mike
echo '<br>';

class Cat{
    public $name;
    public $age;
}
$cat1 = new Cat();
$cat1->name = 'jack';
$cat2 = &$cat1;
$cat2 = "def";
//echo '$cat1->name'.$cat1->name; // error: try to get property of non-object
echo $cat1;