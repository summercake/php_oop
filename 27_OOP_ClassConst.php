<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

class Student
{
    // class constant
    // no access modifier, default is public
    const NUMBER = 300;

    function getTotalNumber()
    {
        return self::NUMBER;
    }
}

$student = new Student();
echo $student ::NUMBER;
echo "\n";
echo $student -> getTotalNumber();
echo "\n";
echo Student::NUMBER;