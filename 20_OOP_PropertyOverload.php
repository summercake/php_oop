<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
// Property Overload
class Dog1
{
    private $pro_array = array();

    function __set($pro_name, $value)
    {
        $this -> pro_array[$pro_name] = $value;
    }

    function __get($pro_name)
    {
        if (isset($this -> pro_array[$pro_name])) {
            return $this -> pro_array[$pro_name];
        } else {
            return "not exists";
        }
    }
}

$dog1 = new Dog1();
$dog1 -> name = 'bark';
echo $dog1 -> name;