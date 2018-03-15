<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Child
{
    public $name;
    /*
     * outside class ---------------> class::$name
     * inside class ----------------> self::$name
     * self is relate to class
     * $this is related to class instance
     */
    public static $child_count;
    public static $value = 100;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function joinGame()
    {
        echo $this -> name.' join game!!!';
        self ::$child_count++;
    }

    public function getTotalChild()
    {
        return self ::$child_count;
    }
}

$child1 = new Child('jack');
$child2 = new Child('mike');
$child3 = new Child('joe');
$child4 = new Child('john');
$child5 = new Child('nancy');
$child1 -> joinGame();
echo "\n";
$child2 -> joinGame();
echo "\n";
$child3 -> joinGame();
echo "\n";
$child4 -> joinGame();
echo "\n";
$child5 -> joinGame();
echo "\n";
echo Child ::$child_count;
echo "\n";
echo Child ::$value;
