<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Person
{
    public $name;
    protected $nickname;
    private $address;

    public function __construct($name, $nickname, $address)
    {
        $this -> name = $name;
        $this -> nickname = $nickname;
        $this -> address = $address;
    }

    public function __get($name)
    {
        if (isset($this -> $name)) {
            return $this -> $name;
        } else {
            return 'not exits';
        }
    }

    public function __set($name, $value)
    {
        if (isset($this -> $name)) {
            $this -> $name = $value;
        } else {
            return 'not exits';
        }
    }
}

$person = new Person('jack', 'geek', '123 asjfas road');
$person -> nickname = 'mike';
echo $person -> nickname;