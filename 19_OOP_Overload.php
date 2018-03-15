<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
// PHP can not allow use overload like C# and Java
// PHP overloading ----------------> USELESS && STUPID
class Bull
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function getMax($n1, $n2, $n3)
    {
        return max($n1, $n2, $n3);
    }

    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function __call($name, $arguments)
    {
        if ($name == 'getVal') {
            if (2 == count($arguments)) {
                if (is_numeric($arguments[0]) && is_numeric($arguments[1])) {
                    return $this -> getSum($arguments[0], $arguments[1]);
                } else {
                    return "Wrong way!!!";
                }
            } else {
                if (3 == count($arguments)) {
                    if (is_numeric($arguments[0]) && is_numeric($arguments[1]) && is_numeric($arguments[2])) {
                        return $this -> getMax($arguments[0], $arguments[1], $arguments[2]);
                    } else {
                        return "wrong way!!!";
                    }
                }
            }
        }
    }
}

$bull1 = new Bull('jack');
echo $bull1 -> getVal(30, 40);
echo "\n";
echo $bull1 -> getVal(30, 40, 50);