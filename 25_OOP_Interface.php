<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

// interface
interface iMyInterface
{
    const N1 = 1;
    const N2 = 2;

    public function getSum($n1, $n2);
}

interface iUInterface{
    public function show();
    //public function getSum();
}

class MyClass implements iMyInterface, iUInterface
{
    public function getSum($n1, $n2)
    {
        return $n1 + $n2;
    }

    public function show()
    {
        // TODO: Implement show() method.
    }
}

$my_class = new MyClass();
echo $my_class -> getSum($my_class :: N1, $my_class :: N2);
