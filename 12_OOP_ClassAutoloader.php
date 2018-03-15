<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 3/13/2018
 * Time: 2:24 PM
 */

// traditional way
//require './Class/Dog.class.php';
//require './Class/Cat.class.php';

/*
 * class autoloader
 * when using a undefined class, it will trig __autoload method.
 * it is dynamical
 */
// normally, mapping array will be used for autoloader in a big project
$class_map = array(
    'Dog' => './Class/Dog.class.php',
    'Cat' => './Class/Cat.class.php',
    'Config' => './Lib/Config.class.php'
);

function __autoload($class_name){
    echo 'class name is '.$class_name;
    //require './Class/'.$class_name.'.class.php';
    global $class_map;
    require $class_map[$class_name];
}


$cat = new Cat();
echo "\n";
$cat -> cry();
echo "\n";
$dog = new Dog();
echo "\n";
$dog -> cry();