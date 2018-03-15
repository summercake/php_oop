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
    private static $fee;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    /*
     * inside class ---------------------------------> self::static_method()
     * inside class ---------------------------------> $this->static_method()
     * outside class ---------------------------------> class::static_method()
     * outside class ---------------------------------> instance::static_method()
     * outside class ---------------------------------> instance->static_method() (NOT RECOMMEND)
     * normal property can not be accessed in the static method
     * static property can be accessed in the normal and static method
     */
    public static function fee($fee)
    {
        self ::$fee += $fee;
    }

    public static function getFee(){
        echo 'Total Fees are '.self::$fee.'!!!!';
    }
}

$student1 = new Student('jack');
$student1 -> fee(40000);
$student2 = new Student('mike');
$student2 -> fee(60000);
Student::getFee();
