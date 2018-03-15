<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 3:29 PM
 */
class Cat
{
    public $name = 'miao';
    protected $age = 10;
    private $lover = 'mie';

    function showAll()
    {
        foreach ($this as $pro_name => $pro_val) {
            echo $pro_name." = ".$pro_val."\n";
        }
    }
}

$cat = new Cat();
foreach ($cat as $pro_name => $pro_val) {
    echo $pro_name." = ".$pro_val;
}
echo "\n";
$cat -> showAll();

