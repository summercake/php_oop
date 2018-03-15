<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 12:15 AM
 */

class Monkey
{
    public $name;
    public $food;

    public function __construct($name, $food)
    {
        $this -> name = $name;
        $this -> food = $food;
    }

    public function showInfo()
    {
        echo $this -> name." eats ".$this -> food;
    }

    /*
     * @parameter $method method name
     * @parameter $args parameter array
     */
    public function __call($name, $args)
    {
        if ($args[0] == 'getSum') {
            return $this -> $args[0]($args[1], $args[2]);
        }
        echo $name.' called';
    }

    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }
}

$monkey = new Monkey('MonkeyKing', 'peach');
$monkey -> showInfo();
$res1 = $monkey -> play('getSum', 200, 400);
$res2 = $monkey -> cry();
echo "\n";
echo $res1;
