<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */

// trait is prior to inherit
trait NewTrait
{
    public function getSum($n1, $n2)
    {
        echo "Trait";
        return $n1 + $n2;
    }
}

class A
{
    public function getSum($n1, $n2)
    {
        echo "Class";
        return $n1 + $n2;
    }

    public function test()
    {
        echo "A test";
    }
}

class B extends A
{
    use NewTrait;
}

$b = new B;
echo $b -> getSum(1, 2); //Trait

