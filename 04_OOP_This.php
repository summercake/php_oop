<?php

/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/12/2018
 * Time: 9:15 PM
 */
class Pig
{
    public $name;

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function showInfo()
    {
        echo 'name='.$this -> name."\n";
        var_dump($this);
    }
}

$pig1 = new Pig('jack');
$pig2 = new Pig('mike');

$pig1 -> showInfo();
var_dump($pig1);
$pig2 -> showInfo();
var_dump($pig2);